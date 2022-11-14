<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Superglobal Test $_POST PHP</title>
</head>
<body>
<pre>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname"> <input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
</pre>
</body>
</html>