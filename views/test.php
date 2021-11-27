<?php

$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
// header("Location: ". $_SESSION['current_page']);
var_dump($_SERVER['HTTP_REFERER']);

?>