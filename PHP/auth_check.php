<?php
// /php/auth_check.php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../html/login.html");
    exit();
}
