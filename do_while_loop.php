<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Do-While Loop - PHP</title>
</head>

<body>
    <pre>
<h2>PHP do while Loop</h2>

<hr>
The do...while loop - Loops through a block of code once, and then repeats 
the loop as long as the specified condition is true.

<hr>

The PHP do...while Loop
The do...while loop will always execute the block of code once, it will then 
check the condition, and repeat the loop while the specified condition is true.

Syntax

do {
  code to be executed;
} while (condition is true);


Examples

The example below first sets a variable $x to 1 ($x = 1). Then, the do while loop will
write some output, and then increment the variable $x with 1. Then the condition is 
checked (is $x less than, or equal to 5?), and the loop will continue to run as long 
as $x is less than, or equal to 5:

Example

<iframe height=140px src="do_while_loop.txt"></iframe>
<p>Result:</p>
<?php
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>

<ax>Note:</ax> In a do...while loop the condition is tested AFTER executing the statements within 
the loop. This means that the do...while loop will execute its statements at least once, 
even if the condition is false. See example below.

This example sets the $x variable to 6, then it runs the loop, and then the condition is checked:


Example

<iframe height=150px src="do_while_loop_2.txt"></iframe>
<p>Result:</p>
<?php
$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>



<hr>


end.

</pre>
</body>

</html>