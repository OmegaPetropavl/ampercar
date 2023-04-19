<?php
session_start();
unset ($_SESSION['Name']);
    header ('Location:/login.php');
?>