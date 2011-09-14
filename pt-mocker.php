<?php

class PT_Mocker {

	public function __construct() {
		add_action( 'admin_notices', Array( $this, 'permission_warning' ) );
		add_action( 'shutdown', Array( $this, 'create_mocker' ), 1 );
	}

	public function create_mocker() {
		if( did_action( 'PT_Activate' ) || get_option( 'PT_NEEDS_PERMISSION' ) ) {

			if( !($file = @fopen( PT_DIR . '/' . PT_MOCK_FILE, "w" )) ) {
				add_option( 'PT_NEEDS_PERMISSION', true );
			} else {
				var_dump( fwrite( $file, 'test' ) );
				delete_option( 'PT_NEEDS_PERMISSION' );
			}
		}
	}

	public function permission_warning() {
		if( get_option( PT_NEEDS_PERMISSION ) )
			echo "<div class = 'updated'><p>Please make the PressTest folder <strong>writable</strong> to allow creation of mock functions based on your setup.</p></div>";
	}
}

new PT_Mocker();
