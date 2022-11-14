<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title> Regular Expressions PHP </title>
</head>
<body>
<pre>
<h1> PHP Regular Expressions </h1>

<hr>
What is a Regular Expression?
A regular expression is a sequence of characters that forms a search pattern. When you search 
for data in a text, you can use this search pattern to describe what you are searching for.

A regular expression can be a single character, or a more complicated pattern.

Regular expressions can be used to perform all types of text search and text replace operations

<hr>

Syntax
In PHP, regular expressions are strings composed of delimiters, a pattern and optional modifiers.

<iframe height="45px" src="Regex_Syntax.txt"></iframe>

In the example above, / is the delimiter, w3schools is the pattern that is being searched for, 
and i is a modifier that makes the search case-insensitive.

The delimiter can be any character that is not a letter, number, backslash or space. The most common 
delimiter is the forward slash (/), but when your pattern contains forward slashes it is convenient 
to choose other delimiters such as # or ~.

<hr>

<h2>Regular Expression Functions</h2>
PHP provides a variety of functions that allow you to use regular expressions. The preg_match(), 
preg_match_all() and preg_replace() functions are some of the most commonly used ones:

<table>
    <tr>
        <th>Function</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>preg_match()</td>
        <td>Returns 1 if the pattern was found in the string and 0 if not
    </td>
    </tr>
    <tr>
        <td>preg_match_all()</td>
        <td>Returns the number of times the pattern was found in the string, which may also be 0</td>
    </tr>
    <tr>
        <td>preg_replace()</td>
        <td>Returns a new string where matched patterns have been replaced with another string</td>
    </tr>
</table>

<hr>

<h2>Using preg_match()</h2>
The <b>preg_match()</b> function will tell you whether a string contains matches of a pattern.

Example
Use a regular expression to do a case-insensitive search for "w3schools" in a string:

<iframe height="110px" src="Regex_Preg_Match.txt"></iframe>

RESULT:

<?php
$str = "Visite W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); // Output 1
?>


<hr>

<h2>Using preg_match_all()</h2>
The <b>preg_match_all()</b> function will tell you how many matches were found for a pattern in a string.

Example
Use a regular expression to do a case-insensitive count of the number of occurrences of "ain" in a string:

<iframe height="110px" src="Regex_preg_match_all.txt"></iframe>

RESULT:

<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4
?>


<hr>

<h2>Using preg_replace()</h2>
The <b>preg_replace()</b> function will replace all of the matches of the pattern in a string with another string.

Example
Use a case-insensitive regular expression to replace Microsoft with W3Schools in a string:

<iframe height="110px" src="Regex_preg_match_replace.txt"></iframe>

RESULT:

<?php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"
?>


<hr>

<h2>Regular Expression Modifiers</h2>
Modifiers can change how a search is performed.

<table>
    <tr>
        <th>Modifier</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>i</td>
        <td>Performs a case-insensitive search</td>
    </tr>
    <tr>
        <td>m</td>
        <td>Performs a multiline search (patterns that search for the beginning or end of a <br> string will match the beginning or end of each line)
</td>
    </tr>
    <tr>
        <td>u</td>
        <td>Enables correct matching of UTF-8 encoded patterns</td>
    </tr>
</table>

<hr>

<h2>Regular Expression Patterns</h2>
Brackets are used to find a range of characters:

<table>
    <tr>
        <th>Expression</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>[abc]</td>
        <td>Find one character from the options between the brackets</td>
    </tr>
    <tr>
        <td>[^abc]</td>
        <td>Find any character NOT between the brackets</td>
    </tr>
    <tr>
        <td>[0-9]</td>
        <td>Find one character from the range 0 to 9</td>
    </tr>
</table>

<h2>Metacharacters</h2>
Metacharacters are characters with a special meaning:

<table>
    <tr>
        <th>Metacharacter</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>|</td>
        <td>Find a match for any one of the patterns separated by | as in: cat|dog|fish</td>
    </tr>
    <tr>
        <td>.</td>
        <td>Find just one instance of any character</td>
    </tr>
    <tr>
        <td>^</td>
        <td>Finds a match as the beginning of a string as in: ^Hello</td>
    </tr>
    <tr>
        <td>$</td>
        <td>Finds a match at the end of the string as in: World$</td>
    </tr>
    <tr>
        <td>\d</td>
        <td>Find a digit</td>
    </tr>
    <tr>
        <td>\s</td>
        <td>Find a whitespace character</td>
    </tr>
    <tr>
        <td>\b</td>
        <td>Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b</td>
    </tr>
    <tr>
        <td>\uxxxx</td>
        <td>Find the Unicode character specified by the hexadecimal number xxxx</td>
    </tr>
</table>

<hr>

<h2>Quantifiers</h2>
Quantifiers define quantities:

<table>
    <tr>
        <th>Quantifier</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>n+</td>
        <td>Matches any string that contains at least one n</td>
    </tr>
    <tr>
        <td>n*</td>
        <td>Matches any string that contains zero or more occurrences of n</td>
    </tr>
    <tr>
        <td>n?</td>
        <td>Matches any string that contains zero or one occurrences of n</td>
    </tr>
    <tr>
        <td>n{x}</td>
        <td>Matches any string that contains a sequence of X n's</td>
    </tr>
    <tr>
        <td>n{x,y}</td>
        <td>Matches any string that contains a sequence of X to Y n's</td>
    </tr>
    <tr>
        <td>n{x,}</td>
        <td>Matches any string that contains a sequence of at least X n's</td>
    </tr>
</table>

<main>
Note: If your expression needs to search for one of the special characters you 
can use a backslash ( \ ) to escape them. For example, to search for one or more 
question marks you can use the following expression: $pattern = '/\?+/';
</main>

<hr>

<h2>Grouping</h2>
You can use parentheses <b>( )</b> to apply quantifiers to entire patterns. They also can 
be used to select parts of the pattern to be used as a match.

<b>Example</b>
Use grouping to search for the word "banana" by looking for ba followed by two instances of na:

<iframe height="110px0" src="Regex_Grouping.txt"></iframe>

<?php
$str = "Apple and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str); // Outputs 1
?>

<hr>
<h2>Complete RegExp Reference</h2>
For a complete reference, go to our <a href="https://www.w3schools.com/php/php_ref_regex.asp">Complete PHP Regular Expression Reference</a>.

The reference contains descriptions and examples of all Regular Expression functions.


<hr color="tomato">
</pre>
</body>
</html>