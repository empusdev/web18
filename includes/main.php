<?php

$content = glob('./includes/*.inc.php');
$page = isset($_GET['page']) ? $_GET['page'] : "";
$page = "./includes/" . $page . ".inc.php";

$page = in_array($page, $content) ? $page : '.includes/home.inc.php';
require $page;
