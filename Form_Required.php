<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Forms - Required Fields PHP</title>
</head>
<body>
<pre>
<h1>PHP Forms - Required Fields</h1>
<hr>
This chapter shows how to make input fields required and create error messages if needed.

<hr>
<h2>PHP - Required Fields</h2>
From the validation rules table on the previous page, we see that the "Name", "E-mail", and "Gender" fields are required. 
These fields cannot be empty and must be filled out in the HTML form.

<table>
  <tbody><tr>
    <th style="width:25%">Field</th>
    <th style="width:75%">Validation Rules</th>
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
  </tbody>
</table>

In the previous chapter, all input fields were optional.

In the following code we have added some new variables: $nameErr, $emailErr, $genderErr, and $websiteErr. 
These error variables will hold error messages for the required fields. We have also added an if else 
statement for each $_POST variable. This checks if the $_POST variable is empty (with the PHP empty() 
function). If it is empty, an error message is stored in the different error variables, and if it is not 
empty, it sends the user input data through the test_input() function:

<iframe height="630px" src="Form_Required_example.txt" frameborder="0"></iframe>

<hr>
<h2>PHP - Display The Error Messages</h2>

Then in the HTML form, we add a little script after each required field, which generates the correct error
message if needed (that is if the user tries to submit the form without filling out the required fields):

<iframe height="400px" src="Form_Required_Example_2.txt" frameborder="0"></iframe>

 RESULT:
  
<main>
   Example

<article>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr =  $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
Name:    <input type="text" name="name"> <span class="error">* <?php echo $nameErr; ?></span>
Email:   <input type="text" name="email"> <span class="error">* <?php echo $emailErr; ?></span>
Website: <input type="text" name="website"> <span class="error">* <?php echo $websiteErr; ?></span>
Comment: <textarea name="comment" cols="40" rows="5"></textarea>

Gender: <input type=radio name=gender value=female> Female <input type=radio name=gender value=male> Male <input type=radio name=gender valye=other> Other <span class="error">* <?php echo $genderErr; ?></span>

<input type="submit" name="submit" value="Submit"> <span class="error">* required field</span></p>
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</article>
</main>

The next step is to validate the input data, that is "Does the Name field contain only letters and whitespace?", 
and "Does the E-mail field contain a valid e-mail address syntax?", and if filled out, "Does the Website field 
contain a valid URL?".


<hr color="tomato">
</pre>    
</body>
</html>