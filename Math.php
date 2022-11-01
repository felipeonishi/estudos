<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Math - PHP</title>
</head>

<body>
    <pre>
<div>
<h2>PHP Math</h2>
- 
PHP has a set of math functions that allows you to perform mathematical tasks on numbers.
-

<h3>PHP pi() Function</h3>
The pi() function returns the value of PI:

Example

<iframe height=75px src="Math_Pi.txt"></iframe>
<ax>
<p>Result</p>
<?php
echo(pi()); // return 3.1415926535898
?>
</ax>

-

<h3>PHP min() and max() Functions</h3>
The min() and max() functions can be used to find the lowest or highest value in a list of arguments:

Example

<iframe height=90px src="Math_Min_Max_Function.txt"></iframe>

<p>Result: </p>
<ax><?php
echo(min(0,150,30,20,-8,-200));
echo("<br>");
echo(max(0,150,30,20,-8,-200));
?>
</ax>

-


<h3>PHP abs() Function</h3>
The abs() function returns the absolute (positive) value of a number:

Example

<iframe height=75px src="Math_ABS.txt"></iframe>
<ax><p>Result</p>
<?php
echo(abs(-6.7)); // returns 6.7
?>
</ax>

-

<h3>PHP sqrt() Function</h3>
The sqrt() function returns the square root of a number:

Example

<iframe height=75px src="Math_sqrt_Function.txt"></iframe>
<p>Result:</p>
<ax><?php
echo(sqrt(64)); //returns 8
?></ax>


-

<h3>PHP round() Function</h3>
The round() function rounds a floating-point number to its nearest integer:

Example

<iframe height=110px src="Math_Round_Function.txt"></iframe>
<p>Result</p>
<ax><?php
echo(round(0.60)); // returns 1
echo("<br>");
echo(round(0.49)); // returns 0
?></ax>


-

<he>Random Numbers</h3>
The rand() function generates a random number:

Example

<iframe height=75px src="Math_Random_Numbers.txt"></iframe>
<ax><p>Result:</p>
<?php
echo(rand());
?></ax>



-

To get more control over the random number, you can add the optional min and max parameters to 
specify the lowest integer and the highest integer to be returned.

For example, if you want a random integer between 10 and 100 (inclusive), use rand(10, 100):

Example

<iframe height=75px src="Math_Random_Numbers_2.txt"></iframe>
<p>Result</p>
<ax><?php
echo(rand(10,100));
?></ax>


-


Complete PHP Math Reference
For a complete reference of all math functions, go to our complete <a href="https://www.w3schools.com/php/php_ref_math.asp">PHP Math Reference.</a>

The PHP math reference contains description and example of use, for each function.
</div>
-
End.
</pre>
</body>

</html>