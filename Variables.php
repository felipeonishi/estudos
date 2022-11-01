<!DOCTYPE html>
<html>
<header>
    <meta charset="utf-8" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>versao .PHP</title>
    <h1 style="color: #96332c"> PHP VARIABLES </h1>
</header>
<body>
    <div>
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

    <?php
    $txt = ' W3Schools.com';
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

   <br><br> <ax>Note: You will learn more about the echo statement and how to output data to the screen in the next <br>
        chapter.<br><br>
    </ax>
    <az>
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
    </az>
    </div>
</body>

</html