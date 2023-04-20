<?php session_start();?>
<?php require_once '../connect.php';?>
<?php
$login =$_POST["Login"];
$password =$_POST["Password"];
$sql = $conn -> prepare("SELECT ID, Name FROM login WHERE  Login=:Login AND Password=:Password");
$sql -> execute(array('Login' => $login, 'Password' => $password));
$array = $sql -> fetch (PDO::FETCH_ASSOC);
if ($array["ID"]>0){
    $_SESSION["Name"] = $array["Name"];
    header ('Location:/admin.php');
}
else {
    header ('Location:/login.php');
}
    
?>