<?php

$username = "dxinterns";
$password = "dxinterns1";

// Some basic basic security, before we grant acess to our db to everyone on the internet
if(isset($_POST['submit'])){
	if($_POST['username'] == $username && $_POST['password'] == $password){

		// Export the db, will auto-override the previous one, so we do not need unique name for each export
		$output = shell_exec( "wp db export interns-carmag.sql" );

		$file = 'interns-carmag.sql';

		//This renders the popup with the download button for the sql file
		if ( file_exists( $file ) ) {
		    header( 'Content-Description: File Transfer' );
		    header( 'Content-Type: application/octet-stream' );
		    header( 'Content-Disposition: attachment; filename="'.basename( $file ).'"' );
		    header( 'Expires: 0' );
		    header( 'Cache-Control: must-revalidate' );
		    header( 'Pragma: public' );
		    header( 'Content-Length: ' . filesize( $file ) );
		    readfile( $file );
		    exit;
		}

        } else {
       		echo "Sorry the username and password were incorrect";
        }
} else {

	?><form method="post">
		Username: <input type="text" name="username" /><br />
		Password: <input type="password" name="password" />
		<input type='submit' name='submit' />
	</form><?php

}

