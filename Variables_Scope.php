<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Variables Scope - PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <h2>PHP Variables Scope</h2>
</head>
<body>

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
<p>
<?php
    $x3 = 5;
    $y3 = 10;

        function myTest3(){
            global $x3, $y3;
            $y3 = $x3 + $y3;
        }

    myTest3();
    echo $y3; // outputs 15
?>
<br>
</p>
<az>
PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.<br>
<br>
The example above can be rewritten like this:<br>
<br>
Example<br>
</az>
<p>
<?php
    $x4 = 5;
    $y4 = 10;

        function myTest4(){
            $GLOBALS['y4'] = $GLOBALS['x4'] + $GLOBALS['y4'];
        }
    myTest4();
    echo $y4; // outputs 15
?>
</p>

<br>-<br><br>

PHP The static Keyword<br>
<br>
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
<br><br>
To do this, use the static keyword when you first declare the variable:
<br><br>
Example
<br>
    <p>
        <?php
            function myTest5() { 
                static $x5 = 0;
                echo $x5;
                $x5++;
            }
            myTest5();
            echo "<br>";
            myTest5();
            echo "<br>";
            myTest5();
        ?>
    </p>
<br>    <br>
Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.
<br>
<p>Note: The variable is still local to the function.</p><br><br><br>
The end!
</body>

</html>