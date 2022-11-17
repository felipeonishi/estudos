<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>File Handling PHP</title>
</head>
<body>
<h1>PHP File Handling</h1>
<pre>
<hr>
File handling is an important part of any web application. You often need to open and process a file for 
different tasks.
<hr>
<h2>PHP Manipulating Files</h2>
PHP has several functions for creating, reading, uploading, and editing files.

<main>
<b>Be careful when manipulating files!</b>

When you are manipulating files you must be very careful.

You can do a lot of damage if you do something wrong. Common errors are: editing the wrong file, filling a 
hard-drive with garbage data, and deleting the content of a file by accident.
</main>
<hr>
<h2>PHP readfile() Function</h2>

The <s>readfile()</s> function reads a file and writes it to the output buffer.

Assume we have a text file called "webdictionary.txt", stored on the server, that looks like this:

<div>
AJAX = Asynchronous JavaScript and XML
CSS = Cascading Style Sheets
HTML = Hyper Text Markup Language
PHP = PHP Hypertext Preprocessor
SQL = Structured Query Language
SVG = Scalable Vector Graphics
XML = EXtensible Markup Language  
</div>

The PHP code to read the file and write it to the output buffer is as follows (the <s>readfile()</s> function 
returns the number of bytes read on success):

<main>
<article>
&lt;?php
echo readfile("webdictionary.txt")
?&gt;
</article>    
</main>

<b>RESULT:</b>

<?php
echo readfile("webdictionary.txt");
?>



The <s>readfile()</s> function is useful if all you want to do is open up a file and read its contents.

The next chapters will teach you more about file handling.


<hr color="tomato">
</pre>   
</body>
</html>