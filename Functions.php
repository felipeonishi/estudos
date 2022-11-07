<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="styles.css">
    <title>FUNCTIONS - PHP</title>

</head>

<body>
    <pre>
<h1>PHP Functions</h1>
<hr>
The real power of PHP comes from its functions.

PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.

<hr>
<h2>PHP Built-in Functions</h2>
PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.

Please check out our PHP reference for a complete overview of the <a target= _blank href="https://www.w3schools.com/php/php_ref_overview.asp">PHP built-in</a> functions.
<hr>

<h2>PHP User Defined Functions</h2>
Besides the built-in PHP functions, it is possible to create your own functions.

 • A function is a block of statements that can be used repeatedly in a program. 
 • A function will not execute automatically when a page loads.
 • A function will be executed by a call to the function.

<hr>

<h2>Create a User Defined Function in PHP</h2>
A user-defined function declaration starts with the word function:

Syntax

<iframe height=75px src="function_syntax.txt"></iframe>

<s> Note: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.</s>

Tip: Give the function a name that reflects what the function does!

In the example below, we create a function named "writeMsg()". The opening curly brace 
( { ) indicates the beginning of the function code, and the closing curly brace ( } ) 
indicates the end of the function. The function outputs "Hello world!". To call the function, 
just write its name followed by brackets ():

<h3>Example<h3> 

<iframe height=90px src="function_example.txt"></iframe>
<p>result:</p>

<?php
function writeMsg() {
    echo "Hello World!";
}
writeMsg();
?>

<hr>
<h2>PHP Function Arguments</h2>
Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. You can add as many 
arguments as you want, just separate them with a comma.

The following example has a function with one argument ($fname). When the familyName() function 
is called, we also pass along a name (e.g. Jani), and the name is used inside the function, which 
outputs several different first names, but an equal last name:

<h3>Example</h3>
<iframe height=200px src="function_example_2.txt"> </iframe>
<p>Result:</p>
<?php
function familyName($fname) {
    echo"$fname Refsnes. <br>";
}
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>


The following example has a function with two arguments ($fname and $year):


<iframe height=200px src="function_example_3.txt"></iframe>

<p>Result:</p>
<?php
function familyName2($fname, $year) {
    echo "$fname Refsnes. Bor in $year <br>";
}

familyName2("Hege", "1975");
familyName2("Stale", "1978");
familyName2("Kim Jim", "1983")
?>




</pre>
</body>

</html>