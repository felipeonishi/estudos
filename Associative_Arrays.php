<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Associative Arrays PHP</title>
</head>
<body>
<pre>
<h2>PHP Associative Arrays</h2>
Associative arrays are arrays that use named keys that you assign to them.

There are two ways to create an associative array: 
<main>
<h3>
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
</h3>
or: 
<h3>
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
</h3>
</main>
The named keys can then be used in a script:

<iframe height="90px" src="Array_associative.txt"></iframe>
<p>Result:</p>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>43);
echo "Peter is " . $age['Peter'] . " years old.";
?>


<hr>
<h2>Loop Through an Associative Array</h2>
To loop through and print all the values of an associative array, you could use a foreach loop, like this:

Example

<iframe height="150px" src="Array_Loop_Trought.txt"></iframe>
<p>Result:</p>
<?php
$age = array("Peter"=>"35", "Ben"=>"37" ,"Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . ",value=" . $x_value;
    echo "<br>";
}
?>

<hr>
<h2>Complete PHP Array Reference</h2>
For a complete reference of all array functions, go to our complete <a href="https://www.w3schools.com/php/php_ref_array.asp">PHP Array Reference</a>.
The reference contains a brief description, and examples of use, for each function!


<hr color="Tomato">
</pre>
</body>
</html>