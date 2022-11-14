<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Form Validation Example PHP</title>
</head>
<body>
<pre>
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "" ;

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

<h2>PHP Form Validation Example</h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name:     <input type="text" name="name">
<br><br>
E-mail:   <input type="text" name="email">
<br><br>
Website:  <input type="text" name="website">
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender:  
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Other"> Other
<br><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php 
echo "<h2>Your Input: </h2>";
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

</pre>
</body>
</html>