<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Superglobal - $_REQUEST PHP</title>
</head>
<body>
<pre>
<h1>PHP Superglobal - $_REQUEST</h1>
<hr>
Super global variables are built-in variables that are always available in all scopes.

<hr>

PHP $_REQUEST
PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.

The example below shows a form with an input field and a submit button. When a user submits the data by clicking 
on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. In this example, 
we point to this file itself for processing form data. If you wish to use another PHP file to process form data, 
replace that with the filename of your choice. Then, we can use the super global variable $_REQUEST to collect the 
value of the input field:

Example

<iframe height="280px" src="Superglobals_$REQUEST.txt"></iframe>

RESULT:

<!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">    <input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if(empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
 -->
Devido os dados nao aparecerem nesta pagina, foi criada uma nova onde mostra o resultado desejado.

<a href="teste.php">Clique aqui para testar o código</a>

<hr color="tomato">

</pre>
</body>
</html>