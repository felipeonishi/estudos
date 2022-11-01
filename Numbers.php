<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Numbers - PHP</title>
</head>

<body>
    <pre>
<div>
<h2>PHP Numbers</h2>
-
In this chapter we will look in depth into Integers, Floats, and Number Strings.
- 

<h3>PHP Numbers</h3>
One thing to notice about PHP is that it provides automatic data type conversion.

So, if you assign an integer value to a variable, the type of that variable will automatically be an 
integer. Then, if you assign a string to the same variable, the type will change to a string.

This automatic conversion can sometimes break your code.

- 

<h3>PHP Integers</h3>
2, 256, -256, 10358, -179567 are all integers.

An integer is a number without any decimal part.

An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.

Note: Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).

Here are some rules for integers:

 • An integer must have at least one digit
 • An integer must NOT have a decimal point
 • An integer can be either positive or negative
 • Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) 
   or octal (8-based - prefixed with 0)

PHP has the following predefined constants for integers:

 • PHP_INT_MAX - The largest integer supported
 • PHP_INT_MIN - The smallest integer supported
 • PHP_INT_SIZE -  The size of an integer in bytes

PHP has the following functions to check if the type of a variable is integer:

 • is_int()
 • is_integer() - alias of is_int()
 • is_long() - alias of is_int()

Example

Check if the type of a variable is integer:

<iframe src="Numbers_Integers.txt"></iframe>

<p> Result: </p>
<ax><?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?></ax>
</div>
- 
<div>
<h3>PHP Floats</h3>
A float is a number with a decimal point or a number in exponential form.

2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.

The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have 
a maximum precision of 14 digits.

PHP has the following predefined constants for floats (from PHP 7.2):

 • PHP_FLOAT_MAX - The largest representable floating point number
 • PHP_FLOAT_MIN - The smallest representable positive floating point number
 • PHP_FLOAT_MAX - The smallest representable negative floating point number
 • PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
 • PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
 • PHP has the following functions to check if the type of a variable is float:

is_float()
is_double() - alias of is_float()

Example

Check if the type of a variable is float:

<iframe height=90px src="Numbers_Floats.txt"></iframe>
<p>Result:</p>
<ax><?php
    $x = 10.365;
    var_dump(is_float($x));
?>
</div></ax>
-
<div>
<h3>PHP Infinity</h3>
A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

PHP has the following functions to check if a numeric value is finite or infinite:

 • is_finite()
 • is_infinite()

However, the PHP var_dump() function returns the data type and value:

Example

Check if a numeric value is finite or infinite:

<iframe height=90px src="Numbers_Infinity.txt"></iframe>
<p>Result:</p>
<ax><?php
    $x = 1.9e411;
    var_dump($x);
?>
</div></ax>
- 
<div>
<h3>PHP NaN</h3>
NaN stands for Not a Number.

NaN is used for impossible mathematical operations.

PHP has the following functions to check if a value is not a number:

 • is_nan()

 However, the PHP var_dump() function returns the data type and value:

Example
Invalid calculation will return a NaN value:

<iframe height=90px src="Numbers_NaN.txt"></iframe>
<p>Result:</p>
<ax><?php
$x = acos(8);
var_dump($x);
?></ax>
</div>
-
<div>
<h3>PHP Numerical Strings</h3>
The PHP is_numeric() function can be used to find whether a variable is numeric. The function 
returns true if the variable is a number or a numeric string, false otherwise.

Example

Check if the variable is numeric:

<iframe height=225px src="Numbers_Numerical_String.txt"></iframe>
<p>Result:</p>
<?php
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>

<p>Note:</p>
From PHP 7.0: The is_numeric() function will return FALSE for numeric strings in hexadecimal form 
(e.g. 0xf4c3b00c), as they are no longer considered as numeric strings.
</div>
-
<div>
<h3>PHP Casting Strings and Floats to Integers</h3>
Sometimes you need to cast a numerical value into another data type.

The (int), (integer), or intval() function are often used to convert a value to an integer.

Example

Cast float and string to integer:

<iframe height=235px src="Numbers_Casting_Str_and_float_to_Integers.txt"></iframe>
<p>Result:</p>
<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>

</div>
</pre>
</body>

</html>