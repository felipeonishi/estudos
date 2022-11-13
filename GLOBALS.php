<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Superglobal - $GLOBALS PHP</title>
</head>
<body>
<pre>
<h1>PHP Superglobal - $GLOBALS</h1>
<hr>
Super global variables are built-in variables that are always available in all scopes.

<hr>

PHP $GLOBALS
$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).

PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.

The example below shows how to use the super global variable $GLOBALS:

Example

<iframe height="200px" src="Superglobal_$Globals.txt"></iframe>

RESULT:

<?php
$x = 75;
$y = 25;

function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
?>

In the example above, since z is a variable present within the $GLOBALS array, it is also accessible from outside the function!

<hr color="tomato">
</pre>
</body>
</html>