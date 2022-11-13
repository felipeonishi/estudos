<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Indexed Array - PHP</title>
</head>
<body>
<pre>
<h1>PHP Indexed Arrays</h1>
PHP Indexed Arrays
There are two ways to create indexed arrays:

The index can be assigned automatically (index always starts at 0), like this:

<main>
<h2>$cars = array("Volvo", "BMW", "Toyota");</h2>
</main>

or the index can be assigned manually:

<main>
<h2>
    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";
</h2>
</main>

The following example creates an indexed array named $cars, assigns three elements to it, 
and then prints a text containing the array values:

<iframe height=110px src="Indexed_array_example.txt"></iframe>
<p>Result:</p>

<?php
$cars = array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>


<hr>

<h1>Loop Through an Indexed Array</h1>
To loop through and print all the values of an indexed array, you could use a for loop, like this:

Example

<iframe height=170px src="Array_LoopTrought_indexed.txt"></iframe>
<p>Result:</p>
<?php
$cars = array("Volvo","BMW","Toyota");
$arrlenght = count($cars);

for ($x=0; $x < $arrlenght; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>

<hr>

Complete PHP Array Reference
For a complete reference of all array functions, go to our complete <a href="https://www.w3schools.com/php/php_ref_array.asp" PHP Array Reference></a>.

The reference contains a brief description, and examples of use, for each function!

<hr color="Tomato">

</pre>
</body>
</html>