<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>File Open/Read/Close PHP</title>
</head>
<body>
<h1>PHP File Open/Read/Close</h1>
<pre>
<hr>
In this chapter we will teach you how to open, read, and close a file on the server.
<hr>
<h2>PHP Open File - fopen()</h2>
A better method to open files is with the <s>fopen()</s> function. This function gives you more 
options than the <s>readfile()</s> function.

We will use the text file, "webdictionary.txt", during the lessons:

<div>
AJAX = Asynchronous JavaScript and XML
CSS = Cascading Style Sheets
HTML = Hyper Text Markup Language
PHP = PHP Hypertext Preprocessor
SQL = Structured Query Language
SVG = Scalable Vector Graphics
XML = EXtensible Markup Language
</div>

The first parameter of <s>fopen()</s> contains the name of the file to be opened and the second parameter 
specifies in which mode the file should be opened. The following example also generates a message if 
the <s>fopen()</s> function is unable to open the specified file:

<main>
 Example    

<article>
&lt;?php
$mylife = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?&gt;
</article>
</main>

<b>RESULT:</b>

<?php
$myfile = fopen("webdictionary.txt","r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>

<strong>Tip:</strong> The fread() and the fclose() functions will be explained below.

The file may be opened in one of the following modes:

<table>
  <tbody><tr>
    <th style="width:10%">Modes</th>
    <th style="width:90%">Description</th>
  </tr>
  <tr>
    <td>r</td>
    <td><strong>Open a file for read only</strong>. File pointer starts at the beginning of the file</td>
  </tr>
    <tr>
    <td>w</td>
    <td><strong>Open a file for write only</strong>. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file</td>
    </tr>
  <tr>
    <td>a</td>
    <td><strong>Open a file for write only</strong>. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist</td>
    </tr>
  <tr>
    <td>x</td>
    <td><strong>Creates a new file for write only</strong>. Returns FALSE and an error if file already exists</td>
    </tr>
  <tr>
    <td>r+</td>
    <td><strong>Open a file for read/write</strong>. File pointer starts at the beginning of the file</td>
  </tr>
  <tr>
    <td>w+</td>
    <td><strong>Open a file for read/write</strong>. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file</td>
  </tr>
  <tr>
    <td>a+</td>
    <td><strong>Open a file for read/write</strong>. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist</td>
  </tr>
  <tr>
    <td>x+</td>
    <td><strong>Creates a new file for read/write</strong>. Returns FALSE and an error if file already exists</td>
  </tr>
</tbody>
</table>

<hr>

<h2>PHP Read File - fread()</h2>

The <s>fread()</s> function reads from an open file.

The first parameter of <s>fread()</s> contains the name of the file to read from and the second parameter 
specifies the maximum number of bytes to read.

The following PHP code reads the "webdictionary.txt" file to the end:

<main>
fread($myfile,filesize("webdictionary.txt"));
</main>
<hr>

<h2>PHP Close File - fclose()</h2>

The <s>fclose()</s> function is used to close an open file.

<main>
It's a good programming practice to close all files after you have finished with them. You don't want an 
open file running around on your server taking up resources!   
</main>

The <s>fclose()</s> requires the name of the file (or a variable that holds the filename) we want to close:

<div>
&lt;?php
$myfile = fopen("webdictionary.txt", "r");
// some code to be executed...
fclose($myfile);
?&gt;
</div>

<hr>

<h2>PHP Read Single Line - fgets()</h2>

The <s>fgets()</s> function is used to read a single line from a file.

The example below outputs the first line of the "webdictionary.txt" file:

<main>
 Example

<article>
&lt;?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?&gt;
</article>
</main>

<b>RESULT:</b>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>

<strong>Note:</strong> After a call to the <s>fgets()</s> function, the file pointer has moved to the next line.

<hr>

<h2>PHP Check End-Of-File - feof()</h2>

The <s>feof()</s> function checks if the "end-of-file" (EOF) has been reached.

The <s>feof()</s> function is useful for looping through data of unknown length.

The example below reads the "webdictionary.txt" file line by line, until end-of-file is reached:

<main>
<article>
&lt;?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)){
    echo fgets($myfile) . "<br>";
}
fclose($myfile);
?&gt;
</article>
</main>

<b>RESULT:</b>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

<hr>

<h2>PHP Read Single Character - fgetc()</h2>

The <s>fgetc()</s> function is used to read a single character from a file.

The example below reads the "webdictionary.txt" file character by character, until end-of-file is reached:

<main>
 Example

<article>
&lt;?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!"");

// Output one character until end-of-file
while(!foef($myfile)) {
    echo fgetc($myfile);
}
fclose($myfile);
?&gt;
</article>
</main>

<b>RESULT:</b>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until enf-of-file
while(!feof($myfile)) {
  echo !fgetc($myfile);
}

fclose($myfile);
?>


<strong>Note: </strong>After a call to the fgetc() function, the file pointer moves to the next character.
<hr>

<h2>Complete PHP Filesystem Reference</h2>
For a complete reference of filesystem functions, go to our complete <a href="https://www.w3schools.com/php/php_ref_filesystem.asp">PHP Filesystem Reference</a>.

<hr color="tomato">

</pre>
</body>
</html>