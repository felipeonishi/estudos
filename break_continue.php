<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>BREAK AND CONTINUE - PHP</title>
</head>

<body>
    <pre>
<h1>PHP Break and Continue</h1>
<hr>
<h2>PHP Break</h2>
You have already seen the break statement used in an earlier chapter of this tutorial. It was used to "jump 
out" of a switch statement.

The break statement can also be used to jump out of a loop.

This example jumps out of the loop when x is equal to 4:

<h3>Example</h3>
<iframe height= 130px src="break_example.txt" frameborder="0"></iframe>

<a>Result: </a>

<?php
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "The number is: $x <br>";
}
?>
<hr>

<h2>PHP Continue</h2>
The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with 
the next iteration in the loop.

This example skips the value of 4:

<h3>Example</h3>
<iframe height=150px src="continue_example.txt" frameborder="0"></iframe>

<a>Result:</a>

<?php
for ($x = 0; $x < 10; $x++){
    if ($x == 4){
        continue;
    }
    echo "The number is: $x <br>";
}
?>
<hr>
<h2>Break and Continue in While Loop</h2>

You can also use break and continue in while loops:

<h3>Break Example</h3>

<iframe height="200px" src="break_in_while_loop.txt" frameborder="0"></iframe>

<a>Result: </a>

<?php
$x = 0;

while($x<10){
    if($x == 4) {
        break;
    }
    echo"The number is: $x <br>";
    $x++;
}
?>

<h3>Continue Example</h3>

<iframe height=200px src="continue_in_while_loop.txt" frameborder="0"></iframe>

<a>result:</a>

<?php
$x = 0;

while($x < 10) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>";
    $x++;    
}
?>

</pre>
</body>

</html>