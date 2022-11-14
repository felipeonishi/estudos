<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Superglobal - $_GET PHP</title>
</head>
<body>
<pre>
<h1>PHP Superglobal - $_GET</h1>
<hr>
Super global variables are built-in variables that are always available in all scopes.

<hr>

<h2>PHP $_GET</h2>
PHP $_GET is a PHP super global variable which is used to collect form data after submitting 
an HTML form with method="get".

$_GET can also collect data sent in the URL.

Assume we have an HTML page that contains a hyperlink with parameters:

<iframe height="150px" src="Superglobals_$_GET.txt"></iframe>

When a user clicks on the link "Test $GET", the parameters "subject" and "web" are sent to 
"test_get.php", and you can then access their values in "test_get.php" with $_GET.

The example below shows the code in "test_get.php":

<iframe height="160px" src="Superglobals_$_GET_example.txt"></iframe>

RESULT:

<a target="_blank" href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>


Tip: You will learn more about $_GET in the <a target="_blank" href="https://www.w3schools.com/php/php_forms.asp">PHP Forms chapter</a>.

</pre>
</body>
</html>