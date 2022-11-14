<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Form Validation PHP</title>
</head>
<body>
<pre>
<h1>PHP Form Validation</h1>
<hr>
This and the next chapters show how to use PHP to validate form data.

<hr>
<h2>PHP Form Validation</h2>
<div>
<b>Think SECURITY when processing PHP forms!</b>

These pages will show how to process PHP forms with security in mind. <br>Proper validation of form data is important to protect your form from hackers and spammers!

</div>

The HTML form we will be working at in these chapters, contains various input fields: 
 
    • required and optional text fields;
    • radio buttons;
    • and a submit button.

<iframe src="Form_Validation_Example.php" seamless style="border:3px solid #ddd;height:850px;width:90%;padding-left:8px;padding-right:"></iframe>

The validation rules for the form above are as follows:

<table>
<tr>
    <th>Field</th>
    <th>Validation Rules</th>
</tr>
<tr>
    <td>Name</td>
    <td>Required. + Must only contain letters and whitespace</td>
</tr>
<tr>
    <td>E-mail</td>
    <td>Required. + Must contain a valid email address (with @ and .)</td>
</tr>
<tr>
    <td>Website</td>
    <td>Optional. If present, it must contain a valid URL</td>
</tr>
<tr>
    <td>Comment</td>
    <td>Optional. Multi-line input field (textarea)</td>
</tr>
<tr>
    <td>Gender</td>
    <td>Required. Must select one</td>
</tr>
</table>

First we will look at the plain HTML code for the form:

<hr>
<h2>Text Fields</h2>
The name, email, and website fields are text input elements, and the comment field is a textarea. 
The HTML code looks like this:

<main>
<article>
 Name: &lt;input type="text" name="name"&gt;
 E-mail: &lt;input type="text" name="email"&gt;
 Website: &lt;input type="text" name="website"&gt;
 Comment: &lt;textarea name="comment" rows="5" cols="40"&gt;&lt;/textarea&gt;

</article> 
</main>

<b>RESULT:</b>

Name:    <input type="text" name="name">
E-mail:  <input type="text" name="email">
Website: <input type="text" name="website">
Comment: <textarea name="comment" rows="5" cols="40"></textarea>


<hr>
<h2>Radio Buttons</h2>
The gender fields are radio buttons and the HTML code looks like this:

<main>
<article>
Gender:
&lt;input type="radio" name="gender" value="female"&gtFemale
&lt; input type="radio" name="gender" value="male"&gtMale
&lt; input type="radio" name="gender" value=other&gtOther

</article>
</main>

RESULT:

Gender:

<input type="radio" name="gender" value="female">Female <br>
<input type="radio" name="gender" value="male">Male <br>
<input type="radio" name="gender" value="other">Other <br>

<hr>
<h2>The Form Element</h2>
The HTML code of the form looks like this:

<main>
<article>
&ltform method="post" action="&lt?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt"&gt<br>
</article>
</main>

When the form is submitted, the form data is sent with method="post".

<div>
<strong>What is the $_SERVER["PHP_SELF"] variable?</strong>

The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.

</div>

So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. 
This way, the user will get error messages on the same page as the form.

<div>
<strong>What is the htmlspecialchars() function?</strong>

The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML 
characters like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or 
Javascript code (Cross-site Scripting attacks) in forms.  

</div>

<hr>

<h2>Big Note on PHP Form Security</h2>

The $_SERVER["PHP_SELF"] variable can be used by hackers!

If PHP_SELF is used in your page then a user can enter a slash (/) and then some Cross Site Scripting (XSS) 
commands to execute.

<div>
Cross-site scripting (XSS) is a type of computer security vulnerability typically found in Web applications. 
XSS enables attackers to inject client-side script into Web pages viewed by other users.

</div>

Assume we have the following form in a page named "test_form.php":

<main>
<article>
&ltform method="post" action="&lt?php echo $_SERVER["PHP_SELF"];?&gt"&gt
</article>
</main>

Now, if a user enters the normal URL in the address bar like "http://www.example.com/test_form.php", 
the above code will be translated to:

<main>
<article>
&ltform method="post" action="test_form.php"&gt
</article>
</main>

So far, so good.

However, consider that a user enters the following URL in the address bar:

<main>
<article>
http://www.example.com/test_form.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E
</article>

     In this case, the above code will be translated to:


<article>
&ltform method="post" action="test_form.php/"&gt&ltscript&gtalert('hacked')&lt/script&gt
</article>
</main>

This code adds a script tag and an alert command. And when the page loads, the JavaScript 
code will be executed (the user will see an alert box). This is just a simple and harmless 
example how the PHP_SELF variable can be exploited.

Be aware of that any JavaScript code can be added inside the &ltscript&gt tag! A hacker can 
redirect the user to a file on another server, and that file can hold malicious code that 
can alter the global variables or submit the form to another address to save the user data, 
for example.

<hr>
<h2>How To Avoid $_SERVER["PHP_SELF"] Exploits?</h2>
$_SERVER["PHP_SELF"] exploits can be avoided by using the htmlspecialchars() function.

The form code should look like this:

<main>
<article>
&ltform method="post" action="&lt?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt"&gt
</article>
</main>

The htmlspecialchars() function converts special characters to HTML entities. Now if the user 
tries to exploit the PHP_SELF variable, it will result in the following output:

<main>
<article>
<span><span>&lt;</span>form<span> method<span>="post"</span> action<span>="test_form.php/&amp;quot;&amp;gt;&amp;lt;script&amp;gt;alert('hacked')&amp;lt;/script&amp;gt;"</span></span><span>&gt;</span></span>
</article>
</main>

The exploit attempt fails, and no harm is done!

<hr>
<h2>Validate Form Data With PHP</h2>
The first thing we will do is to pass all variables through PHP's htmlspecialchars() function.

When we use the htmlspecialchars() function; then if a user tries to submit the following in a text field:

&ltscript&gtlocation.href('http://www.hacked.com')&lt/script&gt

- this would not be executed, because it would be saved as HTML escaped code, like this:

&amp;lt;script&amp;gt;location.href('http://www.hacked.com')&amp;lt;/script&amp;gt;

The code is now safe to be displayed on a page or inside an e-mail.

We will also do two more things when the user submits the form:
<ol>
  <li>Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)</li>
  <li>Remove backslashes (\) from the user input data (with the PHP stripslashes() function)</li>
</ol>
The next step is to create a function that will do all the checking for us (which is much more convenient than writing the 
same code over and over again).

We will name the function test_input().

Now, we can check each $_POST variable with the test_input() function, and the script looks like this:

Example

<main>
<article>
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2> PHP Form Validatio Example </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name:       <input type="text" name="name">
E-mail:     <input type="text" name="email">
Website:    <input type="text" name="website">
Comment:    <textarea name="comment" rows=5 cols="40"></textarea>
Gender:  

            <input type="radio" name="gender" value="female">   Female
            <input type="radio" name="gender" value="male">     Male
            <input type="radio" name="gender" value="other">    Other
<input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
?>
</article>
</main>

Notice that at the start of the script, we check whether the form has been submitted 
using $_SERVER["REQUEST_METHOD"]. If the REQUEST_METHOD is POST, then the form has 
been submitted - and it should be validated. If it has not been submitted, skip the 
validation and display a blank form.

However, in the example above, all input fields are optional. The script works fine 
even if the user does not enter any data.

The next step is to make input fields required and create error messages if needed.



<hr color="tomato">
</pre>
</body>
</html>