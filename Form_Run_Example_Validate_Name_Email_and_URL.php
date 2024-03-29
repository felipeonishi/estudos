<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Form Validation Example PHP </title>
</head>
<body>
<pre>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
// check if name only contains letters an whitespaces
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)){
            $nameErr = "Only letters an white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "E-mail is required";
    } else {
        $email = test_input($_POST["email"]);
// check if email address id well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid e-mail format";
        }
    }

    if (empty($_POST["website"])){
        $websiteErr = "";
    } else {
        $website = test_input($_POST["website"]);
// check if URL address sytanx is valid
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)){
            $websiteErr = "Invalid URL";
        }
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

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<span class="error">* required field</span>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
Name:       <input type="text" name="name"> <span class="error">* <?php echo $nameErr; ?></span>
E-mail:     <input type="text" name="email"> <span class="error">* <?php echo $emailErr; ?></span>
Website:    <input type="text" name="website"> <span class="error">* <?php echo $websiteErr;?></span>
Comment:    <textarea name="comment" rows="5" cols="40"></textarea>
Gender: <input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="Female"> Female <span class="error">* <?php echo $genderErr;?></span>

<input type="submit" name="submit" value="Submit">

</form>

<?php
echo $name;
echo "<br><br>";
echo $email;
echo "<br><br>";
echo $website;
echo "<br><br>";
echo $comment;
echo "<br><br>";
echo $gender;
?>


<hr color="tomato">
<p> by duke.357@protonmail.com </p>
</pre>    
</body>
</html>