<!DOCTYPE html>
<html>
<header>
    <h1 fontcolor="red"> PHP Syntax </h1>
</header>
<body bgcolor="#282828", fontcolor= "white">
<h2>My first PHP page</h2>
<h3> Feito em PHP </h3>
<p>A PHP script is executed on the server, and the plain HTML result is sent back to the browser.</p>
<p>Basic PHP Syntax</p>
<h4>-</h4>
<h3>Codigo em PHP: </h3>

<?php
echo 'Hello World!
<br>Note: PHP statements end with a semicolon (;).
<br>
<br>-
<br>
<br>PHP Case Sensitivity
<br>In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined 
<br>functions are not case-sensitive.<br>
';
?>

<p>
In the example below, all three echo statements below are equal and legal:
<br><br>
Example:
<br><br>
<!DOCTYPE html>
<html>
<body>

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

<br>Note: However; all variable names are case-sensitive!
<br><br>
Look at the example below; only the first statement will display the value of the $color variable! 
<br>This is because $color, $COLOR, and $coLOR are treated as three different variables:
    <br><br>
Example
<br>

<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>

<br><br>
-

<h2>PHP Comments</h2>
<h3>Comments in PHP</h3>
A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be 
<br>read by someone who is looking at the code.
<br>
<br>Comments can be used to:
<br>
<br>* Let others understand your code
<br>* Remind yourself of what you did - Most programmers have experienced coming back to their own work a year 
<br>  or two later and having to re-figure out what they did. Comments can remind you of what you were thinking 
<br>  when you wrote the code
<br>
<br>PHP supports several ways of commenting:
<br>
<br>Example
<br>Syntax for single-line comments:
<br><br>
// This is a single-line comment<br>

# This is alse a single-line comment<br><br>
<?php
    // This is a single-line comment

    # This is alse a single-line comment
?>

Example<br>
Syntax for multiple-line comments:<br><br>
/*
This is a myltiple-lines comment block
that spans over multiple
lines
*/
<?php
/*
This is a myltiple-lines comment block
that spans over multiple
lines
*/
?>
<br><br>
Example<br>
Using comments to leave out parts of the code:<br><br>

// You can also use comments to leave out parts of a code line<br>
$x = 5 /* + 15 */ + 5;<br>
echo $x;<br>

<?php
// You can use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo "The value is: $x, where result pass to the this php code" ;
?>
        <br>
    <br>
</p>

<p>
<h2>PHP Variables</h2>
Variables are "containers" for storing information.<br>
<h3>Creating (Declaring) PHP Variables</h3>
In PHP, a variable starts with the $ sign, followed by the name of the variable:<br>

Example<br><br>

$txt = "Hello World!";<br>
$x = 5;<br>
$y = 10.5;<br>
<br>
<?php
    $txt = "Hello World!";
    $x = 5;
    $y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>
<br><br>
After the execution of the statements above, the variable $txt will hold the value Hello world!, <br>
the variable $x will hold the value 5, and the variable $y will hold the value 10.5.<br>
<br>
Note: When you assign a text value to a variable, put quotes around the value.<br>
<br>
Note: Unlike other programming languages, PHP has no command for declaring a variable. It is created <br>
the moment you first assign a value to it.<br>
<br>
Think of variables as containers for storing data.<br>
<br>-<br>
</p>

<p>
<h2>PHP Variables</h2>
A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).<br>
Rules for PHP variables:<br>
<br>
 - A variable starts with the $ sign, followed by the name of the variable<br>
 - A variable name must start with a letter or the underscore character<br>
 - A variable name cannot start with a number<br>
 - A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )<br>
 - Variable names are case-sensitive ($age and $AGE are two different variables)<br><br>

Remember that PHP variable names are case-sensitive!<br>

<br>-<br>

Output Variables<br>
The PHP echo statement is often used to output data to the screen.<br>
<br>
The following example will show how to output text and a variable:<br>
<br>
Example<br><br>
$txt = "W3Schools.com";<br>
echo "I love $txt!";<br>
<br>

<?php
$txt = ' W3Schools.coom';
echo "I love $txt!";
?>

The following example will produce the same output as the example above:<br>
<br>
Example<br>
<br>
$txt = "W3Schools.com";<br>
echo "I love " . $txt . "!";<br>
<br>
<?php
    $txt = "W3Schools.com";
    echo "I love " .$txt . "!";
?>
<br>

The following example will output the sum of two variables:<br>
<br>
Example<br>
<br>
$x = 5;<br>
$y = 4;<br>
echo $x + $y;<br>
<br>
<?php
    $x = 5;
    $y = 4;
    $z = $x+$y;
    echo "The result of 5 + 4 is: $z" ;
?>
<br>
Note: You will learn more about the echo statement and how to output data to the screen in the next <br>
chapter.<br>
</p><br>
<p>
PHP is a Loosely Typed Language<br>
In the example above, notice that we did not have to tell PHP which data type the variable is.<br>
<br>
PHP automatically associates a data type to the variable, depending on its value. Since the data <br>
types are not set in a strict sense, you can do things like adding a string to an integer without <br>
causing an error.<br>
<br>
In PHP 7, type declarations were added. This gives an option to specify the data type expected when <br>
declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type <br>
mismatch.<br>
<br>
You will learn more about strict and non-strict requirements, and data type declarations in the PHP <br>
Functions chapter.<br>
</p>

<br>-<br>

<p>
<h2>PHP Variables Scope</h2>
<h3>PHP Variables Scope</h3>
In PHP, variables can be declared anywhere in the script.
<br>
The scope of a variable is the part of the script where the variable can be referenced/used.<br>
<br>
PHP has three different variable scopes:<br>
<br>
 * local<br>
 * global<br>
 * static<br>
 * Global and Local Scope<br><br>
A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:<br>
<br>
Example<br>
Variable with global scope:<br>

<?php
$x = 5; // global scope

function myTest() {
    // using x inside function will generate an error
    echo "<p> Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>
<br>
A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
<br>
Example
Variable with local scope:<br>
<br>

<?php
    function myTest1() {
        $x1 = 5; // local scope
        echo "<p>Variable x inside function is: $x1</p>";
    }
    myTest1();

    //using x outside the function will generate an error
    echo "<p>Variable x outside function: $x1</p>"
?>
<br>
You can have local variables with the same name in different functions, <br>
because local variables are only recognized by the function in which they are declared.
<br>
-
<br>
<h2>PHP The global Keyword</h2>
The global keyword is used to access a global variable from within a function.<br>
To do this, use the global keyword before the variables (inside the function):
    <br>
    <br>
Example
<br>
<?php
    
?>






</p><br>



</body>
</html>


