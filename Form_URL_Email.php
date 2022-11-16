<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Forms - Validate E-mail and URL PHP</title>
</head>
<body>
<pre>
<h1>PHP Forms - Validate E-mail and URL</h1>    
<hr>
This chapter shows how to validate names, e-mails, and URLs.

<hr>
<h2>PHP - Validate Name</h2>
The code below shows a simple way to check if the name field only contains letters, dashes, 
apostrophes and whitespaces. If the value of the name field is not valid, then store an 
error message:

<div>
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
&nbsp;$nameErr = "Only letters and white space allowed"; 
}

</div>

<main>
<article>
The preg_match() function searches a string for pattern, returning true if the pattern exists, 
and false otherwise.
</article>
</main>
<hr>

<h2>PHP - Validate E-mail</h2>

<div>
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}

</div>
<hr>
<h2>PHP - Validate URL</h2>
The code below shows a way to check if a URL address syntax is valid (this regular expression also 
allows dashes in the URL). If the URL address syntax is not valid, then store an error message:

<div>
$website = test_input($_POST["website"]);
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  $websiteErr = "Invalid URL";
}

</div>
<hr>
<h2>PHP - Validate Name, E-mail, and URL</h2>
Now, the script looks like this:

<main>
Example

<iframe  height="969px" src="Form_Validate_Name_Email_and_URL.txt" frameborder="0"></iframe>

</main>

RESULT:

<form action="Form_Run_Example_Validate_Name_Email_and_URL.php" target="_blank">
<button>Run Example</button>
</form>

The next step is to show how to prevent the form from emptying all the input fields when the user submits the form.


<hr color="tomato">
</pre>
</body>
</html>