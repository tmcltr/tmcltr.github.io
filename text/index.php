<?php

# This file passes the content of the Readme.md file in the same directory
# through the Markdown filter. You can adapt this sample code in any way
# you like.

/*
# Install PSR-0-compatible class autoloader
spl_autoload_register(function($class){
	require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
use \Michelf\Markdown;
*/

require_once 'Michelf/Markdown.inc.php';

$notename = basename("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

# Read file and pass content through the Markdown parser
# $text = file_get_contents('https://dl.dropboxusercontent.com/u/142740/text/'.$notename.'.text');
$text = file_get_contents('https://dl.dropboxusercontent.com/u/142740/text/Oahu.text');



$html = Markdown::defaultTransform($text);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="couriered.css" />

<title><?php echo $notename; ?></title>
</head>

<body>

		<?php
			# Put HTML content in the document
			echo $html;
		?>

</body>

</html>