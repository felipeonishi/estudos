<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>ARRAYS - PHP</title>
</head>
<body>
<pre>
<h1>PHP Arrays</h1>
<hr>

An array stores multiple values in one single variable:

<h3>Example</h3>

<iframe height=90px src="arrays_example.txt"></iframe>
<p>Result:</p>
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<hr>

<h2>What is an Array?</h2>
An array is a special variable, which can hold more than one value at a time.

If you have a list of items (a list of car names, for example), storing the cars 
in single variables could look like this:

<iframe height=75px src="example_list.txt"></iframe>


However, what if you want to loop through the cars and find a specific one? And 
what if you had not 3 cars, but 300?

The solution is to create an array!

An array can hold many values under a single name, and you can access the values 
by referring to an index number.

<hr>

<h2>Create an Array in PHP</h2>
In PHP, the array() function is used to create an array:

<div style="color:white">array();</div>
In PHP, there are three types of arrays:

 • Indexed arrays - Arrays with a numeric index;
 • Associative arrays - Arrays with named keys;
 • Multidimensional arrays - Arrays containing one or more arrays.

<hr>


<h2>Get The Length of an Array - The count() Function</h2>
The count() function is used to return the length (the number of elements) of an array:

<h3>Example</h3>

<iframe height=90px src="array_count.txt"></iframe>
<p>Result: </p>
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars)
?>

<hr>
Complete PHP Array Reference
For a complete reference of all array functions, go to our complete <a target="_blank" href="https://www.w3schools.com/php/php_ref_array.asp">PHP Array Reference</a>.

The reference contains a brief description, and examples of use, for each function!
<hr>

<hr color="tomato">
</pre>    
</body>
</html>