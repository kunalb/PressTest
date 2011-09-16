<?php

class PT_Mocker {

	public function __construct() {
		add_action( 'admin_notices', Array( $this, 'permission_warning' ) );
		add_action( 'shutdown', Array( $this, 'create_mockers' ), 1000 );
	}

	public function permission_warning() {
		if( get_option( PT_NEEDS_PERMISSION ) && !@fopen( PT_DIR . '/' . PT_MOCK_FILE, "w" ) )
			echo "<div class = 'updated'><p>Please make the folder <code>PressTest/mocked</code> <strong>writable</strong> to allow creation of mock functions based on your setup.</p></div>";
	}

	public function create_mockers() {
		$filelist = $this->getPaths();
		
		$wpcontents = $filelist[ 'wp-content' ];
		unset( $filelist[ 'wp-content' ] );
		
		$core = $this->flattenPaths( $filelist );
	}

	private function flattenPaths( $files ) {
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
				$paths[] = ABSPATH . $file;
			}
			unset( $queue[ $file ] );
		}

		return $paths;
	}

	private function getPaths() {
		if( !class_exists( 'WP_Filesystem_Base' ) )
			require PT_ADMIN_INCLUDES_DIR . '/class-wp-filesystem-base.php';
		if( !class_exists( 'WP_Filesystem_Direct' ) )
			require PT_ADMIN_INCLUDES_DIR . '/class-wp-filesystem-direct.php';
		
		$filesys = new WP_Filesystem_Direct();	
		
		return $filesys->dirlist( ABSPATH, false, true );
	}

	private function parse( $file ) {
	}

}

new PT_Mocker();
