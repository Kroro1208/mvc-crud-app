<?php

require_once "./autoload.php";
if (isset($_GET['views'])) {
    $url = explode('/', $_GET['views']);
} else {
    $url = ["login"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./app/views/inc/head.php"; ?>
</head>

<body>
    <?php require_once "./app/views/inc/script.php"; ?>
</body>

</html>