<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title> While Loop - PHP </title>
</head>

<body>
    <pre>
<h2>PHP while Loop</h2>
The while loop - Loops through a block of code as long as the specified condition is true.
<h3>The PHP while Loop</h3>
The while loop executes a block of code as long as the specified condition is true.

Syntax

while (condition is true) {
code to be executed;
}

Examples
The example below displays the numbers from 1 to 5:

Example

<iframe height=150px src="while_loop.txt"></iframe>
<p>Result:</p>
<?php
$x = 1;

while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
?>

<h3>Example Explained</h3>
 • $x = 0; - Initialize the loop counter ($x), and set the start value to 0
 • $x <= 100 - Continue the loop as long as $x is less than or equal to 100
 • $x+=10; - Increase the loop counter value by 10 for each iteration

This example counts to 100 by tens:

Example

<iframe height=150px src="While_loop_100.txt"></iframe>

<p>Result:</p>
<?php
$x = 0;

while ($x <= 100) {
    echo "The number is: $x <br>";
    $x += 10;
}
?>

<h3>Example Explained</h3>
 • $x = 0; - Initialize the loop counter ($x), and set the start value to 0
 • $x <= 100 - Continue the loop as long as $x is less than or equal to 100
 • $x+=10; - Increase the loop counter value by 10 for each iteration



 
 -
 end.

</pre>
</body>

</html>