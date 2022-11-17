<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Form Complete Example PHP</title>
</head>
<body>
<pre>
<main>
<article>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
          $nameErr = "Only letters and white space allowed";
        }
      }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
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

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

}
?>

<h2>PHP Form Validation Example</h2>
<span class="error">* required field</span>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name:       <input type="text" name="name"    value="<?php echo $name; ?>">    
<span class="error">* <?php echo $nameErr ; ?>      </span>
E-mail:     <input type="text" name="email"   value="<?php echo $email; ?>">   
<span class="error">* <?php echo $emailErr; ?>      </span>
Website:    <input type="text" name="website" value="<?php echo $website; ?>"> 
<span class="error">* <?php echo $websiteErr; ?>    </span>
Comment:    <textarea name="comment" cols="40" rows="5"><?php echo $comment; ?></textarea>

Gender:     
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked"; ?>     value="female"> Female 
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>      value="male"> Male 
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked"; ?>    value="other"> other
<span class="error">* <?php echo $genderErr;?></span>
<input type="submit" name="submit" value="Submit">

<?php

echo "<h2>Your Input is:</h2>";
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
</form>
</article>
</main>
</pre>    
</body>
</html>