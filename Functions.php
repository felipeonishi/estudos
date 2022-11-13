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

<hr>
<h2>PHP is a Loosely Typed Language</h2>
In the example above, notice that we did not have to tell PHP which data type the variable is.

PHP automatically associates a data type to the variable, depending on its value. Since the data 
types are not set in a strict sense, you can do things like adding a string to an integer without 
causing an error.

In PHP 7, type declarations were added. This gives us an option to specify the expected data type 
when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if 
the data type mismatches.

In the following example we try to send both a number and a string to the function without using strict:

<iframe height=170px src="function_Example_addNumbers.txt"></iframe>
<p>Result:</p>
Fatal Error: Uncaught TypeError: addNumbers(): Argument #2 ($b) must be of type int, string given, 
called in C:\php-sdk\php_teste\estudos\Functions.php on line 129 and defined in 
C:\php-sdk\php_teste\estudos\Functions.php:126 

Stack trace:

#0 C:\php-sdk\php_teste\estudos\Functions.php(129): addNumbers(5, '5 days')
#1 {main}
  thrown in C:\php-sdk\php_teste\estudos\Functions.php on line 126

<p>Obs.: Nao deu o resultado conforme sugere o exemplo!</p>

To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.

In the following example we try to send both a number and a string to the function, but here we have added the 
strict declaration:
<h3>Example</h3>
<iframe height=170px src="function_example_types.txt"></iframe>
<p>Result:</p>
<ax>Fatal error: strict_types declaration must be the very first statement in the script in 
C:\php-sdk\php_teste\estudos\Functions.php on line 145</ax>

<p>The strict declaration forces things to be used in the intended way.</p>

<hr>
<h2>PHP Default Argument Value</h2>
The following example shows how to use a default parameter. If we call the function 
setHeight() without arguments it takes the default value as argument:
<h3>Example</h3>
<iframe height=200px src="fucntion_example_Default_Argument.txt"></iframe>
<p>Result:</p>
<ax><?php declare(strict_type=1); //strict requirement
function setHeight(int $minHeight = 50) {
    echo "The height is: $minHeight <br>";
}
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
?>
</ax>
<hr>
<h2>PHP Functions - Returning values</h2>
To let a function return a value, use the return statement:

<h3>Example</h3>
<iframe height=210px src = "function_example_returning_values.txt"></iframe>
<p>Result:</p>
<ax><?php declare(strict_type=1); //strict requirement
function sum (int $x, int $y) {
    $z = $x + $y;
    return $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>
</ax>

<hr>
<h2>PHP Return Type Declarations</h2>
PHP 7 also supports Type Declarations for the return statement. Like with the type
declaration for function arguments, by enabling the strict requirement, it will 
throw a "Fatal Error" on a type mismatch.

To declare a type for the function return, add a colon ( : ) and the type right before 
the opening curly ( { )bracket when declaring the function.

In the following example we specify the return type for the function:

<h3>Example</h3>
<iframe height=170px src="function_example_retunring_types.txt"></iframe>
<p>Result:</p>
<ax><?php
function addNumbers(float $a, float $b) : float {
    return $a + $b;
}
echo addNumbers(1.2, 5.2);
?></ax>

You can specify a different return type, than the argument types, but make sure the return is the correct type:

<iframe height=170px src="function_example_returning_types_int.txt"></iframe>
<p>Result:</p>
<?php declare(strict_type=1); // strict requirement
function addNumbers3(float $a, float $b) : int {
    return $a + $b;
}
echo addNumbers3(1.2, 5.2);
?>

<hr>
<h2>Passing Arguments by Reference</h2>
In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and 
the variable that was passed into the function cannot be changed.

When a function argument is passed by reference, changes to the argument also change the variable that was passed 
in. To turn a function argument into a reference, the & operator is used:
<h3>Example</h3>
Use a pass-by-reference argument to update a variable:

<iframe height=170px src="function_example_arguments_by_reference.txt"></iframe>
<p>Result:</p>
<ax>
<?php
function add_five(&$value) {
    $value = 5;
}

$num = 2;
add_five($num);
echo $num;
?>
</ax>


<hr>
end
<hr color="tomato">
</pre>
</body>

</html>