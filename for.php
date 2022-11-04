<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>FOR LOOP - PHP</title>
</head>

<body>
    <pre>
<h1>PHP for Loop</h1>

<hr>
The for loop - Loops through a block of code a specified number of times.

<hr>

The PHP for Loop
The for loop is used when you know in advance how many times the script should run.

Syntax

<iframe height=75px src="for_syntax.txt" ></iframe>

Parameters:

 • init counter: Initialize the loop counter value
 • test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. 
    If it evaluates to FALSE, the loop ends.
 • increment counter: Increases the loop counter value
 
Examples

The example below displays the numbers from 0 to 10:

Example

<iframe height=110px src="for_example.txt"></iframe>

Example Explained

 • $x = 0; - Initialize the loop counter ($x), and set the start value to 0
 • $x <= 10; - Continue the loop as long as $x is less than or equal to 10
 • $x++ - Increase the loop counter value by 1 for each iteration

This example counts to 100 by tens:

Example

<iframe height=100px src="for_example_2.txt"></iframe>

Example Explained

 • $x = 0; - Initialize the loop counter ($x), and set the start value to 0
 • $x <= 100; - Continue the loop as long as $x is less than or equal to 100
 • $x+=10 - Increase the loop counter value by 10 for each iteration

</pre>
</body>

</html>