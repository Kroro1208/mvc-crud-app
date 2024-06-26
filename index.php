<?php
require_once "./autoload.php";
require_once "./app/views/inc/session_start.php";

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
    <?php

    use app\controllers\viewsController;

    $viewsController = new viewsController();
    $view = $viewsController->obtainViewsController($url[0]);

    if ($view == "login" || $view == "404") {
        require_once "./app/views/content/" . $view . "-view.php";
    } else {
        require_once $view;
    }

    require_once "./app/views/inc/script.php";
    ?>
</body>

</html>