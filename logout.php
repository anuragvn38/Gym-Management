<?php

session_start();

unset($_SESSION["userid"]);

unset($_SESSION["fname"]);

$BackToMyPage = $_SERVER['HTTP_REFERER'];
if(isset($BackToMyPage)) {
    header('Location: '.$BackToMyPage);
} else {
    header('Location: dashboard.php'); // default page
}

?>
