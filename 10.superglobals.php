<!-- $GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION 

//see documentation in w3schools
-->
<?php 
$x = 75; 
$y = 25;
 
function addition() { 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
    //or the other short way check in variables.php
}

addition(); 
echo "$z <br>"; 

//$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";

//PHP $_REQUEST is used to collect data after submitting an HTML form.
//see $_resuest.php 
?>
