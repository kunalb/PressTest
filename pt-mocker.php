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
		add_action( 'admin_notices', Array( $this, 'permission_warning' ) );
		add_action( 'shutdown', Array( $this, 'create_mockers' ), 1000 );
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
			$filelist = $this->getPaths();
			
			// $this->mock( $filelist[ 'core' ], PT_MOCK_DIR . '/core.php' );
			$this->mock( Array( ABSPATH . 'wp-includes/plugin.php' ), PT_MOCK_DIR . '/core.php' );
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
		
		$filesys = new WP_Filesystem_Direct();	
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

				if( !flag )
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
		$output = "";
		foreach( $files as $file ) {
			KB_Debug( $file );
			$parser = new PT_Parser( $file );
		}
	}

}

new PT_Mocker();
