<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Superglobal - $_POST PHP</title>
</head>
<body>
<pre>
<h1>PHP Superglobal - $_POST</h1>

<hr>
Super global variables are built-in variables that are always available in all scopes.

<hr>

<h2>PHP $_POST</h2>

PHP $_POST is a PHP super global variable which is used to collect form data after 
submitting an HTML form with method="post". $_POST is also widely used to pass variables.

The example below shows a form with an input field and a submit button. When a user submits 
the data by clicking on "Submit", the form data is sent to the file specified in the action 
attribute of the <form> tag. In this example, we point to the file itself for processing form 
data. If you wish to use another PHP file to process form data, replace that with the filename 
of your choice. Then, we can use the super global variable $_POST to collect the value of the input field:

Example

<iframe height="350px" src="Superglobals_$_POST.txt"></iframe>

RESULT:

Devido os dados nao aparecerem nesta pagina, foi criada uma nova onde mostra o resultado desejado.

<a target="_blank" href="teste_$_POST.php">TESTE</a>

<hr>

Tip: You will learn more about $_POST in the <a href="https://www.w3schools.com/php/php_forms.asp">PHP Forms chapter</a>.


<hr color="tomato">
</pre>
</body>
</html>