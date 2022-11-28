<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    print_r($_SESSION);
    ?>
</body>
</html>