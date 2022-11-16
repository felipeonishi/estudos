<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Complete Form Example PHP</title>
</head>
<body>
<pre>
<h1>PHP Complete Form Example</h1>
<hr>
    This chapter shows how to keep the values in the input fields when the user hits the submit button.
<hr>

<h2>PHP - Keep The Values in The Form</h2>
To show the values in the input fields after the user hits the submit button, we add a little PHP script
inside the value attribute of the following input fields: name, email, and website. In the comment textarea 
field, we put the script between the <span><</span>textarea<span>></span> and <span><</span>/textarea<span>></span> tags. The little script outputs the value 
of the $name, $email, $website, and $comment variables.&nbsp;

Then, we also need to show which radio button that was checked. For this, we must manipulate the checked 
attribute (not the value attribute for radio buttons):


<iframe height="330px" src="Form_Complete_Example.txt" frameborder="0"></iframe>

<form action="Form_Complete_Example.php" target="_blank"> 
<button>Run Example</button>


</form>
</pre>
</body>
</html>