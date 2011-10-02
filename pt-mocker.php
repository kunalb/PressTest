<?php

/**
 * Creates mock files.
 *
 * @package PressTest
 * @author Kunal Bhalla
 * @version 0.2
 */

/**
 * Checks whether mock files are required and creates them.
 *
 * The mocked core functions and classes are placed in the PT_MOCK_DIR, 
 * mocked plugin, theme files are placed in PT_MOCK_PLUGIN_DIR and
 * PT_MOCK_THEME_DIR. 
 */
class PT_Mocker {

	/**
	 * Enqueues required functions on appropriate hooks.
	 */
	public function __construct() {
		add_action( 'PT_Activate', Array( $this, 'run' ) );
		add_action( 'admin_notices', Array( $this, 'permission_warning' ) );
	}

	public function run() {
		add_action( 'shutdown', Array( $this, 'create_mockers' ), 1 );
	}

	/**
	 * Show warning asking for correct permissions on mocked folder.
	 */
	public function permission_warning() {
		if( !@is_writable( PT_MOCK_DIR ) )
			if( !@chmod( PT_MOCK_DIR, 0755 ) )
				echo "<div class = 'updated'><p>Please make the folder <code>PressTest/mocked</code> <strong>writable</strong> to allow creation of mock functions based on your setup.</p></div>";
	}

	/**
	 * Create the files for mocking.
	 */
	public function create_mockers() {
		if( @is_writable( PT_MOCK_DIR ) ) {
			set_time_limit( 600 );
			$filelist = $this->getPaths();
			$this->mock( $filelist[ 'core' ], PT_MOCK_DIR . '/core.php' );
		}
	}

	/**
         * Flatten paths returned by WP_Filesystem_Direct.
	 *
	 * @param $files Array[string]Array Filelist
	 * @param $path String Base path of filelist
	 * @returns Array String Array of paths to files
	 */
	private function flattenPaths( $files, $path = ABSPATH ) {
		$queue = $files; $paths = Array();
		while( !empty( $queue ) ) {
			$properties = array_pop( $queue );
			$file = $properties['name'];
			if( 'd' == $properties['type'] ) {
				foreach( $properties['files'] as $iFile => $iProperties ) {
					$iProperties[ 'name' ] =  $file . '/' . $iFile;
					$queue[ $file . '/' . $iFile ] = $iProperties;
				}
			} else if( 'f' == $properties['type'] ) {
				$paths[] = $path . $file;
			}
			unset( $queue[ $file ] );
		}

		return $paths;
	}

	/** 
	 * Return complete list of files broken by source of file.
	 *
	 * @return Array[string]Array Complete list of files
	 */
	private function getPaths() {
		global $wp_theme_directories;

		if( !class_exists( 'WP_Filesystem_Base' ) )
			require PT_ADMIN_INCLUDES_DIR . '/class-wp-filesystem-base.php';
		if( !class_exists( 'WP_Filesystem_Direct' ) )
			require PT_ADMIN_INCLUDES_DIR . '/class-wp-filesystem-direct.php';
		
		$filesys = new WP_Filesystem_Direct('');	
		$filelist = $filesys->dirlist( ABSPATH, false, true );

		$escaped_wp_content_dir = preg_replace( '/([\-\/\.])/', '\\\$1', WP_CONTENT_DIR );
		$escaped_wp_plugin_dir = preg_replace( '/([\-\/\.])/', '\\\$1', WP_PLUGIN_DIR );
		$escaped_wp_mu_plugin_dir = preg_replace( '/([\-\/\.])/', '\\\$1', WPMU_PLUGIN_DIR );

		foreach( $wp_theme_directories as $wp_theme_dir )
			$escaped_wp_theme_dirs[] = preg_replace( '/([\-\/\.])/', '\\\$1', $wp_theme_dir );

		$files = array_filter( $this->flattenPaths( $filelist ), Array( $this, 'filterPaths' ) );

		$core = $plugins = $muplugins = $themes = $etc = Array();

		foreach( $files as $file ) {
			$matched = Array();
			if( !preg_match( '/^' . $escaped_wp_content_dir . '\//', $file ) )
				$core[] = $file;
			else if( preg_match( '/^' . $escaped_wp_plugin_dir . '\/(.*?)(\/|$)/', $file, $matched ) )
					$plugins[ $matched[ 1 ] ][] = $file;
			else if( preg_match( '/^' . $escaped_wp_mu_plugin_dir . '\/(.*?)(\/|$)/', $file, $matched ) )
					$muplugins[ $matched[ 1 ] ][] = $file;
			else {		
				$flag = false;
				foreach( $escaped_wp_theme_dirs as $escaped_wp_theme_dir ) {	
					if( preg_match( '/^' . $escaped_wp_theme_dir . '\/(.*?)(\/|$)/', $file, $matched ) ) {
						$themes[ $matched[ 1 ] ][] = $file;
						$flag = true;
						break;
					}
				}

				if( !$flag )
					$etc[] = $file;
			}
		}

		return Array( 
			'core' => $core,
			'plugins' => $plugins,
			'muplugins' => $muplugins,
			'themes' => $themes,
			'etc' => $etc
		);
		
	}

	/**
	 * Returns php files from given filelist 
	 * @param String $path The file path
	 * @returns Bool Whether it ends with php or inc.
	 */
	private function filterPaths( $path ) {
		return preg_match( '/\.(inc|php)$/', $path );
	}

	/**
	 * Creates a mock version of files at the path.
	 *
	 * Mocks all classes and functions present in the file into a single output file.
	 *
	 * @param String $file Full path to file.
	 * @param String $path Path to file to be created.
	 */
	private function mock( $files, $path ) {
		$classes = Array(); $functions = Array();

		$output = fopen( $path, "w" );
		fwrite( $output, "<?php \n" );

		$classesCompleted = Array();
		$captured = Array();

		$i = 500; //Throttle for debugging 
		foreach( $files as $file ) {
			$parsed = new PT_Parse_File( $file );

			$newFunctions = $parsed->get( 'functions' );
			foreach( $newFunctions as $fun ) {
				fwrite( $output, "\n/** @file " . $file . " */" );
				fwrite( $output,  "\n" . $this->mock_function( $fun ) . "\n" );
			}

			$newClasses = $parsed->get( 'classes' );
			foreach( $newClasses as $cl ) {
				$dependency = $cl->get( 'extends' );
				$mockedClass = "\n" . $this->mock_class( $cl ) . "\n";

				if( $dependency != null && !in_array( $dependency, $classesCompleted ) )
					$captured[$dependency][] = Array( $file, $mockedClass );
				else {	
					fwrite( $output, "\n/** @file " . $file . " */" );
					fwrite( $output,  $mockedClass );

					$classesCompleted[] = $cl->get( 'name' );
					if( array_key_exists( $cl->get( 'name' ), $captured ) ) {
						foreach( $captured[ $cl->get( 'name' ) ] as $captive ) {
							fwrite( $output, "\n/** @file " . $captive[0] . " */" );
							fwrite( $output,  $captive[1] );
						}
						unset( $captured[ $cl->get( 'name' ) ] );
					}
				}
			}

			unset( $parsed );
			
			if( --$i < 0 )
				break;
		} 

		fclose( $output );
	}

	/**
	 * Returns the mocked equivalent of a class.
	 *
	 * @param PT_Parse_Class $class
	 * @return String Mocked class string
	 */
	private function mock_class( $class ) {
		$cname = $class->get( 'name' );
		$abstract = $class->get( 'abstract' )? "abstract " : "";
		$extends = ( $class->get( 'extends' ) != null )? " extends " . $class->get( 'extends' ) : "";

		$propertyList = '';
		$properties = $class->get( 'properties' );
		if( $properties == '' ) 
			$properties = Array();
		foreach( $properties as $property ) {
			$pname = $property->get( 'name' );
			$paccess = $property->get( 'access' ) . " ";
			$pdefault = ($property->get( 'default' ) != null)? " = ''" : "";
			$pstatic = ($property->get( 'static' ) != null )? "static " : "";
			$propertyMock = <<<PROP
		$paccess$pstatic$pname$pdefault;
PROP;
			$propertyList .= $propertyMock . "\n";
		}

		$methodList = '';
		$methods = $class->get( 'methods' );
		if( $methods == '' )
			$methods = Array();
		foreach( $methods as $method ) {
			$mname = $method->get( 'name' );
			$maccess = $method->get( 'access' ) . " ";
			$mstatic = ($method->get( 'static' ) != null )? "static " : "";
			$margstring = "";
			$margs = $method->get( 'arguments' );
			if( $margs == '' )
				$margs = Array();
			foreach( $margs as $marg ) {
				$margstring .= ( $marg->get( 'name' ) );
				if( $marg->get( 'default' ) != '' )
					$margstring .= " = ''";
				$margstring .=', ';	
			}
			$margstring = rtrim( $margstring, ", " );
			$content = $this->mime_content();
			$methodMock = <<<METH
		$maccess{$mstatic}function $mname($margstring) { $content }
METH;
			$methodList .= $methodMock . "\n";
		}

		return <<<CLS
if( !class_exists( '$cname' ) ) {
	{$abstract}class $cname{$extends} {
$propertyList
$methodList
	}
}
CLS;
	}

	/**
	 * Returns the mocked equivalent of a function.
	 *
	 * @param PT_Parse_Function $function
	 * @return String Mocked function string.
	 */
	private function mock_function( $function ) {
		$fnname = $function->get( 'name' );
		$argstring = "";

		$args = $function->get( 'arguments' );
		if( $args == '' )
			$args = Array();

		foreach( $args as $arg ) {
			$argstring .= ( $arg->get( 'name' ) );
			if( $arg->get( 'default' ) != '' )
				$argstring .= " = ''";
			$argstring .=', ';	
		}

		$argstring = rtrim( $argstring, ", " );
		$content = $this->mime_content();

		return "if( !function_exists( '$fnname' ) ) { function $fnname($argstring) { $content } }";
	}
	
	/**
	 * Returns the code string that should be added to give functionality to mocked functions.
	 */
	private function mime_content() {
		return <<<STR
return PT_Mime::mime( func_get_args() ); 
STR;
	}
}

new PT_Mocker();
