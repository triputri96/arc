<?php
include 'cek-login.php';

echo $_SESSION['failed_login'];
session_destroy();
header('Location: ../login.php');