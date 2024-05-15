<?php
// You can define any configuration variables here
// Display error message caused by your PHP scripts
error_reporting(E_ALL & ~E_STRICT);
ini_set('display_errors', 1);

// The require statement takes all the text/code/markup that exists
// in the specified file and includes it into the file that uses the require statement.
require 'application/mvc.php';
?>