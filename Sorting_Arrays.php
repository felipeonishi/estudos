<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sorting Arrays PHP</title>
</head>
<body>
<pre>
<h1>PHP Sorting Arrays</h1>
<hr>
The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.

<hr>
<h2>PHP - Sort Functions For Arrays</h2>.............
In this chapter, we will go through the following PHP array sort functions:

 • sort() - sort arrays in ascending order
 • rsort() - sort arrays in descending order
 • asort() - sort associative arrays in ascending order, according to the value
 • ksort() - sort associative arrays in ascending order, according to the key
 • arsort() - sort associative arrays in descending order, according to the value
 • krsort() - sort associative arrays in descending order, according to the key

<hr>
<h2>Sort Array in Ascending Order - sort()</h2>.............
The following example sorts the elements of the $cars array in ascending alphabetical order:

<h3>Example</h3>
<iframe height="180px" src="Array_Sort_Ascending_Order.txt"></iframe>

RESULT:

<?php
$cars = array("Volvo","BMW","Toyota");
sort($cars);

$clenght = count($cars);
for ($x = 0; $x < $clenght; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>

The following example sorts the elements of the $numbers array in ascending numerical order:

Example

<iframe height="180px" src="Array_Sort_Ascending_Order_Numbers.txt"></iframe>

RESULT:

<?php
$numbers = array(4,6,2,22,11);
sort($numbers);

$clenght = count($numbers);
for ($x =0; $x < $clenght; $x++) {
    echo $numbers[$x];
    echo "<br>";
}
?>

<hr>

<h2>Sort Array in Descending Order - rsort()</h2>.............
The following example sorts the elements of the $cars array in descending alphabetical order:

Example

<iframe height="180px" src="Array_Sort_Descending_Order.txt"></iframe>

RESULT:

<?php
$cars = array("Volvo","BMW","Toyota");
rsort($cars);

$clenght = count($cars);
for ($x = 0; $x <$clenght; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>

The following example sorts the elements of the $numbers array in descending numerical order:

Example

<iframe height="180px" src="Array_Sort_Descending_Order_Numbers.txt"></iframe>

RESULT:

<?php
$numbers = array(4,6,2,22,11);
rsort($numbers);

$clenght = count($numbers);
for ($x = 0; $x < $clenght; $x++) {
    echo $numbers[$x];
    echo "<br>";
}
?>

<hr>

<h2>Sort Array (Ascending Order), According to Value - asort()</h2>.............
The following example sorts an associative array in ascending order, according to the value:

Example

<iframe height="160px" src="Array_Sort_Ascending_Order_According_to_Value.txt"></iframe>

RESULT:

<?php
$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

<hr>
<h2>Sort Array (Ascending Order), According to Key - ksort()</h2>.............
The following example sorts an associative array in ascending order, according to the key:

Example

<iframe height="160px" src="Array_Sort_Ascending_Order_According_to_Key.txt"></iframe>

RESULT:

<?php
$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);

foreach ($age as $x => $x_value) {
    echo "Key = " . $x . ", Value = " . $x_value;
    echo "<br>";
}
?>

<hr>

<h2>Sort Array (Descending Order), According to Value - arsort()</h2>.............
The following example sorts an associative array in descending order, according to the value:

Example

<iframe height="160px" src="Array_Sort_Descending_Order_According_to_Value.txt"></iframe>

RESULT:

<?php
$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($age);

foreach($age as $x => $x_value){
    echo "Key = " . $x . ", Value = " . $x_value;
    echo "<br>";
}
?>

<hr> 

<h2>Sort Array (Descending Order), According to Key - krsort()</h2>.............
The following example sorts an associative array in descending order, according to the key:

Example

<iframe height="160px" src="Array_Sort_Descending_Order_According_to_Key.txt"></iframe>

RESULT:

<?php
$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);

foreach ($age as $x => $x_value) {
    echo "Key = " . $x . ", Value = " . $x_value;
    echo "<br>";
}
?>

<hr>

Complete PHP Array Reference
For a complete reference of all array functions, go to our complete <a target= "_blank" href="https://www.w3schools.com/php/php_ref_array.asp"> PHP Array Reference</a>.

The reference contains a brief description, and examples of use, for each function!



<hr color="Tomato">

</pre>
</body>
</html>