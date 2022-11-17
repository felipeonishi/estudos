<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Include Files</title>
</head>
<body>
<h1>PHP Include Files</h1>
<pre>
<hr>
  The include (or require) statement takes all the text/code/markup that exists in the specified file and 
  copies it into the file that uses the include statement.

  Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of 
  a website.
<hr>
<h2>PHP include and require Statements</h2>
It is possible to insert the content of one PHP file into another PHP file (before the server executes it), 
with the include or require statement.

The include and require statements are identical, except upon failure:

 • require will produce a fatal error (E_COMPILE_ERROR) and stop the script
 • include will only produce a warning (E_WARNING) and the script will continue

 So, if you want the execution to go on and show users the output, even if the include file is missing, use 
the include statement. Otherwise, in case of FrameWork, CMS, or a complex PHP application coding, always use 
the require statement to include a key file to the flow of execution. This will help avoid compromising your 
application's security and integrity, just in-case one key file is accidentally missing.

Including files saves a lot of work. This means that you can create a standard header, footer, or menu file 
for all your web pages. Then, when the header needs to be updated, you can only update the header include file.

<b>Syntax</b>

<main>
include 'filename';

or

require 'filename';
</main>
<hr>
<h2>PHP include Examples</h2>
<b>Example 1</b>

Assume we have a standard footer file called "footer.php", that looks like this:

<main>
&lt;?php
echo "&lt;p&gt;Copyright &amp;copy; 1999-" . date("Y") . " W3Schools.com&lt;/p&gt;" ;
?&gt;
</main>
To include the footer file in a page, use the include statement:

<main>
  <b>Example</b>
<iframe height="190px" src="Include_Example.txt" frameborder="0"></iframe>
</main>

<b>RESULT:</b>

<ax>
<div>
<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>
<?php include 'footer.php';?> 
</div>
</ax>
<hr>
<b>Example 2</b>

Assume we have a standard menu file called "menu.php":

<main>
&lt;?php
echo '&lt;a href="/default.asp"&gt;Home&lt;/a&gt; -
&lt;a href="/html/default.asp"&gt;HTML Tutorial&lt;/a&gt; -
&lt;a href="/css/default.asp"&gt;CSS Tutorial&lt;/a&gt; -
&lt;a href="/js/default.asp"&gt;JavaScript Tutorial&lt;/a&gt; -
&lt;a href="default.asp"&gt;PHP Tutorial&lt;/a&gt;';
?&gt;
</main>

All pages in the Web site should use this menu file. Here is how it can be done (we are 
using a &lt;div&gt; element so that the menu easily can be styled with CSS later):

<main>
 <b>Example</b>

<iframe height="230px" src="Include_Example_2.txt" frameborder="0"></iframe>
</main>

<b>RESULT:</b>

<main>
<article>
<?php include 'include/menu.php';?>

<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>
</article>
</main>
<hr>
<b>Example 3</b>

Assume we have a file called "vars.php", with some variables defined:

<main>
&lt;?php
$color = 'red';
$car = 'BMW';
?&gt;
</main>

Then, if we include the "vars.php" file, the variables can be used in the calling file:

<main>
<iframe height="200px" src="Include_Example_3.txt" frameborder="0"></iframe>
</main>

<b>RESULT:</b>

<main>
<article>
<b>Welcome to my home page!</b>

<?php include 'include/vars.php';
echo "I have a $color $car.";
?>
</article>
</main>
<hr>
<h2>PHP include vs. require</h2>
The require statement is also used to include a file into the PHP code.

However, there is one big difference between include and require; when a file is included with the 
include statement and PHP cannot find it, the script will continue to execute:

<main>
  Example  
<iframe height="200px" src="include_vs_required.txt" frameborder="0"></iframe>
</main>

<b>RESULT:</b>

<main>
<article>

<b>Welcome to my home page!</b>

<?php
include 'noFileExists.php';
echo "I have a $color $car.";
?>
</article>
</main>


If we do the same example using the require statement, the echo statement will not be executed because 
the script execution dies after the require statement returned a fatal error:

<main>
<iframe height="220px" src="include_vs_required_2.txt" frameborder="0"></iframe>
</main>

<b>RESULT:</b>

<main>
<article>

<b>Welcome to my home page!</b>

<?php
require 'noFileExists.php';
echo "I have a $color $car.";
?>
</article>
</main>

<div>
Use require when the file is required by the application.

Use include when the file is not required and application should continue when file is not found.
</div>

</pre>    
</body>
</html>