<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>if...else...elsif - PHP</title>
</head>

<body>
    <pre>
<h2> PHP if...else...elseif Statements </h2>
Conditional statements are used to perform different actions based on different conditions.

<h3>PHP Conditional Statements</h3>
Very often when you write code, you want to perform different actions for different conditions. 
You can use conditional statements in your code to do this.

In PHP we have the following conditional statements:

 • if statement - executes some code if one condition is true
 • if...else statement - executes some code if a condition is true and another code if that 
   condition is false
 • if...elseif...else statement - executes different codes for more than two conditions
 • switch statement - selects one of many blocks of code to be executed
______________________________________________________________________________________________
<h3> PHP - The if Statement </h3>
The if statement executes some code if one condition is true.

Syntax
<iframe height=110 src="If_Syntax.txt"></iframe>

Example
Output "Have a good day!" if the current time (HOUR) is less than 20:

<iframe height=140px src="HaveGoodDay_IF_Hour.txt"></iframe> 
<p>Result:</p>
<ax><?php
    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    }
    ?>
</ax>

<h3>PHP - The if...else Statement</h3>
The if...else statement executes some code if a condition is true and another code if 
that condition is false.

Syntax

<iframe height=105px src="If_Else_Syntax.txt"></iframe>

Example

Output "Have a good day!" if the current time is less than 20, and "Have a good night!" 
otherwise:

<iframe height=170px src="if_else_example.txt"></iframe>

<h3>PHP - The if...elseif...else Statement</h3>
The if...elseif...else statement executes different codes for more than two conditions.

Syntax

<iframe height=200px src="if_elseif_else.txt"></iframe>

Example
Output "Have a good morning!" if the current time is less than 10, and "Have a good day!" 
if the current time is less than 20. Otherwise it will output "Have a good night!":

<iframe height=210px src="if_elseif_else_example.txt"></iframe>
<p>Result:</p>
<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

<h3>PHP - The switch Statement</h3>
The switch statement will be explained in the next chapter.


end.

</pre>
</body>

</html>