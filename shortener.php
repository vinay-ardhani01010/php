<?php

	// By Qassim Hassan | wp-time.com

	session_start();

	if( !empty($_POST['my-link']) and isset($_SESSION['prevent_repeat']) ){

		$link = $_POST['my-link']; // link from input "my-link" in index.php form

		$id = substr( str_shuffle("ASDFGHJKLZXCVBNMQWERTYUIOP0123456789asdfghjklzxcvbnmqwertyuiop"), 0, 6 ); // create random ID (6 lenght), you can change 6 to your custom number

		$txt_path = "txt-db/"; // txt folder path, you can change it (if you changed it, open robots.txt file and change "txt-db" to your new folder name, robots.txt is file to protection your text database from search engine)

		if( file_exists($txt_path.$id.".txt") ){ // check if ID is taken
			while($id) { // start loop to create a new ID

				$id = substr( str_shuffle("ASDFGHJKLZXCVBNMQWERTYUIOP0123456789asdfghjklzxcvbnmqwertyuiop"), 0, 6 ); // create random ID again (6 lenght)

				if( file_exists($txt_path.$id.".txt") ){ // if ID is taken 
					continue; // if ID is taken: back again to search for available ID
				}else{
					break; // if found available ID: loop will be finished!
				}

			} // end loop
		}

		$create_txt_file = file_put_contents($txt_path.$id.".txt", $link); // create a new txt file and add inside it the long link

		if( $create_txt_file ){
			$website = "http://shortpii.herokuapp.com/"; // enter your website link
			$short_link = $website.$id; // short link
			echo 'Your Short Link: <a href="'.$short_link.'" target="_blank">'.$short_link.'</a>';
		}else{
			echo "We have some errors! Please try later.";
		}

		unset($_SESSION['prevent_repeat']); // Prevent a repeat of the process

	}

	else{
		header("location: index.php"); // if empty link or repeat process, will be redirect the user to index page
	}

?>