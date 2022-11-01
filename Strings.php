<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Strings PHP</title>
</head>

<body>
    <pre>
<div>
<h2>PHP Strings</h2>
-
A string is a sequence of characters, like "Hello world!".
-
<h3>strlen() - Return the Length of a String</h3>


Example

Return the length of the string "Hello world!":

<iframe height=75px  src="Strings_strlen.txt"></iframe>

<p>Result:</p>
    <?php
    echo strlen("Hello World!"); // outputs 12
    ?>

</div>

-

<div>
<h3>str_word_count() - Count Words in a String</h3>
The PHP str_word_count() function counts the number of words in a string.


Example

Count the number of word in the string "Hello world!":

<iframe height=75px src="Strings_str_word_count.txt"></iframe>
<p>Result:</p>
    <?php
    echo str_word_count("Hello World!"); // outputs 2
    ?>
</div>
-
<div>
<h3>strrev() - Reverse a String</h3>
The PHP strrev() function reverses a string.


Example

Reverse the string "Hello world!":

<iframe height=75px src="Strings_str_rev.txt"></iframe>

<p>Result:</p>
    <?php
    echo strrev("Hello World!");
    ?>
</div>
-
<div>
<h3>strpos() - Search For a Text Within a String</h3>
The PHP strpos() function searches for a specific text within a string. If a match is found, the 
function returns the character position of the first match. If no match is found, it will return FALSE.

Example

Search for the text "world" in the string "Hello world!":

<iframe height=75px src="Strings_strpos.txt"></iframe>
<p>Result: </p>
<?php
echo strpos("Hello world!", "world"); // outputs 6
?>


Tip: The first character position in a string is 0 (not 1).
</div>
-
<div>
<h3>str_replace() - Replace Text Within a String</h3>
The PHP str_replace() function replaces some characters with some other characters in a string.

Example

Replace the text "world" with "Dolly":

<iframe height=75px src="Strings_str_replace.txt"></iframe>
<p>Result:</p>
<?php
echo str_replace("world", "Dolly","Hello world!"); // outputs Hello Dolly!
?>
</div>
-
<div>
Complete PHP String Reference
For a complete reference of all string functions, go to our complete <a href="https://www.w3schools.com/php/php_ref_string.asp">PHP String Reference.</a>

The PHP string reference contains description and example of use, for each function!

-
End!
-
</div>
</pre>
</body>

</html>