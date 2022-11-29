<?php
session_start();
if (!isset($_SESSION['username'])) {
    if (preg_match("/[a-z]/i", $_POST['name']) && !preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',  $_POST['name'])) {
        $_SESSION['username'] = $_POST['name'];
        header('location:chat.php');
    } else {
        header('location:index.php?loged=denied');
    }
}
