<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Echo and Print Statments</title>
    <h1 style="color: #96332c"> PHP - Echo and Print Statements </h1>
</head>
<body>
    <div>
        PHP echo and print Statements<br><br>
        With PHP, there are two basic ways to get output: echo and print.<br>
        <br>
        In this tutorial we use echo or print in almost every example. So, this chapter contains a 
        little more info about those two output statements.<br>
        <br>
        PHP echo and print Statements<br>
        echo and print are more or less the same. They are both used to output data to the screen.<br>
        <br>
        The differences are small: echo has no return value while print has a return value of 1 so it can 
        be used in expressions. echo can take multiple parameters (although such usage is rare) while print 
        can take one argument. echo is marginally faster than print.<br>
        <br>
        The PHP echo Statement<br>
        The echo statement can be used with or without parentheses: echo or echo().<br>
        <br>
        Display Text<br>
        <br>
        The following example shows how to output text with the echo command (notice that the text can contain 
        HTML markup):<br>
        <br>
    </div>
    Example:<br>

    <p>
    <iframe width = 600px eight = 600px src="EchoPrintStatements_Display_Text.txt" title="Display Text"></iframe>
    </p>
    <p>Result:</p>
    <a>
        <?php
            echo "<h2>PHP is Fun!</h2>";
            echo "Hello world!<br>";
            echo "I'm about to learn PHP!<br>";
            echo "This ", "string ", "was ", "made ", "with multiple parameters.";
        ?>
    </a>
    
    <br><br>-<br>
    <h3>Display Variables</h3>    
    The following example shows how to output text and variables with the echo statement:<br>
    <br>
    Example:
    <p>
    <iframe width = 600px eight = 720px src="Echo_Print_Statements_Display_Variables.txt" title="Display Variables"></iframe>
    </p>
    <p>Result:</p>
        <a>
            <?php
            $txt1 = "Learn PHP";
            $txt2 = "W3Schools.com";
            $x = 5;
            $y = 4;

            echo "<h2>" . $txt1 . "</h2>";
            echo "Study PHP at " . $txt2 . "<br>";
            echo $x + $y;
            ?>
        </a>
    <br><br>-
    <h3>The PHP print Statement</h3>
    The print statement can be used with or without parentheses: print or print().<br>
    <h4>Display Text</h4>
    The following example shows how to output text with the print command (notice that the text can contain HTML markup):<br>
    <br>
    Example:
    <p>
        <iframe width = 600px eight = 720px src="Echo_Print_Statements_Display_Text_2.txt" title="Display Text 2"></iframe>
    </p>
    <p>Result:</p>
    <a>
        <?php
            print "<h2>PHP is Fun!</h2>";
            print "Hello world!<br>";
            print "I'm about to learn PHP!";
            ?>
    </a>

    <br><br> - 
       <h3> Display Variables</h3>

       The following example shows how to output text and variables with the print statement:<br>
    <br>
    Example:
    <p>
    <iframe width = 600px eight = 720px src="Echo_Print_Statements_Display_Variables_2.txt" title="Display Variables 2"></iframe>
    </p>
    <p>Result:</p>
    <a>
        <?php
            $txt1 = "Learn PHP";
            $txt2 = "W3Schools.com";
            $x = 5;
            $y = 4;

            print "<h2>" . $txt1 . "</h2>";
            print "Study PHP at " . $txt2 . "<br>";
            print $x + $y;
            ?>
    </a>
    <br>---
        <p>Fonte: <a href="https://www.w3schools.com/php/php_echo_print.asp">https://www.w3schools.com/php/php_echo_print.asp</a></p>
    </body>
</html>