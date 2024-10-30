<?php
/*
Plugin Name: moURL Link
Plugin URI: http://mourl.net/documentation-api.php
Description: Get an alternate <a href="http://mourl.net/">moURL</a> link for your article or post permalink.
Author: Erwin Setiawan
Version: 0.1
Author URI: http://blog.erwinsetiawan.com/

USAGE:
<?php moLink() ?>

*/

function moLink() {
	// get the moURL link and create one for the current permalink		
	$moLink =  file_get_contents("http://mourl.net/api-create.php?url=" . get_permalink());

	// Print the result
	echo $moLink;

	}
?>