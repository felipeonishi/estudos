<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Constants - PHP</title>
</head>

<body>
    <pre>
<h2>PHP Constants</h2>
-
Constants are like variables except that once they are defined they cannot be changed or undefined.
-

<h3>PHP Constants</h3>
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.

-

<h3>Create a PHP Constant</h3>
To create a constant, use the define() function.

Syntax

<iframe height=50px src="Constants_Syntax.txt"></iframe>

Parameters:

 • name: Specifies the name of the constant
 • value: Specifies the value of the constant
 • case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false

Example

Create a constant with a case-sensitive name:

<iframe height=90px src="Constants_Example.txt"></iframe>
<p>Result:</p>
<ax>
<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>
</ax>


Example

Create a constant with a case-insensitive name:
    
<iframe height=90 src="Constants_Case_Insensitive.txt"></iframe>
<p>Result:</p>
<ax>
<?php
// define("GREETING2","Welcome to W3School.com!", true);
// echo greeting2;
echo "deu erro. Impediu de continuar";

?>
</ax>

-

<h3>PHP Constant Arrays</h3>
In PHP7, you can create an Array constant using the define() function.

Example

Create an Array constant:

<iframe height=150px src="Constants_Arrays.txt"></iframe>
<p>Result:</p>
<ax>
<?php
define("cars", ["Alfa Romeo", "BMW", "Toyota"]);
echo cars[0];
?>
</ax>

-

<h3>Constants are Global</h3>
Constants are automatically global and can be used across the entire script.


Example

This example uses a constant inside a function, even if it is defined outside the function:

<iframe height=210px src="Constants_Global.txt"></iframe>

<p>Result:</p>
<ax><?php
define("GREETINGS", "Welcome to W3Scholl.com!");

function myTest() {
    echo GREETINGS;
}

myTest()
?>
</ax>


end.
</pre>
</body>

</html>