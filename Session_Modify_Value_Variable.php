<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<html>
    <body>
        <?php 
        $_SESSION["favcolor"] = "yellow";
        print_r($_SESSION);
        ?>
    </body>
</html>