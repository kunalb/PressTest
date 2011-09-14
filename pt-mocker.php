<?php

class PT_Mocker {

	public function __construct() {
		add_action( 'admin_notices', Array( $this, 'permission_warning' ) );
		add_action( 'shutdown', Array( $this, 'create_mocker' ), 1000 );
	}

	public function create_mocker() {
		if( did_action( 'PT_Activate' ) || get_option( 'PT_NEEDS_PERMISSION' ) ) {

			if( !($file = @fopen( PT_DIR . '/' . PT_MOCK_FILE, "w" )) ) {
				add_option( 'PT_NEEDS_PERMISSION', true );
			} else {
				delete_option( 'PT_NEEDS_PERMISSION' );
				$fns = get_defined_functions();
			
				$mock = "<?php\n";

				foreach( $fns['user'] as $fn ) {
					$reflection = new ReflectionFunction( $fn );
					$mock .= "function $fn() { /*\n"; 
					$mock .= print_r( $reflection->getParameters(), true ) . "\n";
					$mock .= print_r( $reflection->getFileName(), true ) . "\n";
					$mock .= print_r( $reflection->getName(), true ) . "\n";
					$mock .= print_r( $reflection->getNumberOfParameters(), true ) . "\n";
					$mock .= print_r( $reflection->getNumberOfRequiredParameters(), true ) . "\n";
					$mock .= "*/ }\n"; 
				}

				fwrite( $file, $mock );
			}
		}
	}

	public function permission_warning() {
		if( get_option( PT_NEEDS_PERMISSION ) && !@fopen( PT_DIR . '/' . PT_MOCK_FILE, "w" ) )
			echo "<div class = 'updated'><p>Please make the PressTest folder <strong>writable</strong> to allow creation of mock functions based on your setup.</p></div>";
	}
}

new PT_Mocker();
