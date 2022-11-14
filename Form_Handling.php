<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Form Handling PHP</title>
</head>
<body>
<pre>
<h1>PHP Form Handling</h1>
<hr>
The PHP superglobals $_GET and $_POST are used to collect form-data.

<hr>
<h2>PHP - A Simple HTML Form</h2>
The example below displays a simple HTML form with two input fields and a submit button:

<b>Example</b>

<iframe height="230px" src="Form_Handling.txt"></iframe>

<b>RESULT:</b>

<a target="_blank" href="Form_Handling_Example.php">Teste o Código, clicando aqui!</a>

When the user fills out the form above and clicks the submit button, the form data is sent 
for processing to a PHP file named "welcome.php". The form data is sent with the HTTP POST method.

To display the submitted data you could simply echo all the variables. The "welcome.php" looks like this:

<iframe height="160px" src="Welcome.txt"></iframe>

The output could be something like this:

<iframe height="70px" src="Welcome_Result.txt"></iframe>

The same result could also be achieved using the HTTP GET method:

<b>Example</b>

<iframe height="210px" src="Form_Handling_GET.txt"></iframe>

<a target="_blank" href="Form_Handling_Get_Example.php">Clique aqui para rodar o exemplo!</a>


and "welcome_get.php" looks like this:

<iframe height="130px" src="Form_Handling_Get_Example.txt"></iframe>

The code above is quite simple. However, the most important thing is missing. You need to validate form data 
to protect your script from malicious code.

<main>
<b>Think SECURITY when processing PHP forms!</b>

This page does not contain any form validation, it just shows how you can send and retrieve form data.

However, the next pages will show how to process PHP forms with security in mind! Proper validation of form 
data is important to protect your form from hackers and spammers!
</main>

<hr>

<h2>GET vs. POST</h2>
Both GET and POST create an array (e.g. array( key1 => value1, key2 => value2, key3 => value3, ...)). This array 
holds key/value pairs, where keys are the names of the form controls and values are the input data from the user.

Both GET and POST are treated as $_GET and $_POST. These are superglobals, which means that they are always accessible, 
regardless of scope - and you can access them from any function, class or file without having to do anything special.

$_GET is an array of variables passed to the current script via the URL parameters.

$_POST is an array of variables passed to the current script via the HTTP POST method.    

<hr>


<h2>When to use GET?</h2>
Information sent from a form with the GET method is visible to everyone (all variable names and values are displayed 
in the URL). GET also has limits on the amount of information to send. The limitation is about 2000 characters. However, 
because the variables are displayed in the URL, it is possible to bookmark the page. This can be useful in some cases.

GET may be used for sending non-sensitive data.

Note: GET should NEVER be used for sending passwords or other sensitive information!

<hr>


<h2>When to use POST?</h2>
Information sent from a form with the POST method is invisible to others (all names/values are embedded within the body 
of the HTTP request) and has no limits on the amount of information to send.

Moreover POST supports advanced functionality such as support for multi-part binary input while uploading files to server.

However, because the variables are not displayed in the URL, it is not possible to bookmark the page.

<hr>


<main>
Developers prefer POST for sending form data.
</main>

Next, lets see how we can process PHP forms the secure way!



<hr color="tomato">
</pre>
</body>
</html>