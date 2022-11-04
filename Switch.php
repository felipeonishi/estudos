<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Switch - PHP</title>
</head>

<body>
    <pre>
<h2>PHP switch Statement</h2>
Use the switch statement to select one of many blocks of code to be executed.

Syntax

<iframe height=250px src="swicth.txt"></iframe>

This is how it works: First we have a single expression n (most often a variable), 
that is evaluated once. The value of the expression is then compared with the values 
for each case in the structure. If there is a match, the block of code associated with 
that case is executed. Use break to prevent the code from running into the next case 
automatically. The default statement is used if no match is found.

Example

<iframe height=350px src="switch_example.txt"></iframe>
<p>Result:</p>
<ax><?php
    $favcolor = "red";

    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
    ?>
</ax>


-
end.
</pre>
</body>

</html>