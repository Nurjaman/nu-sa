<?php
session_start();
ob_start();
require_once ('Admin/Api/koneksi.php');
 
$email = $_POST['email'];
$password = md5($_POST['password']);
 
$login = mysqli_query($conn,"SELECT * FROM user WHERE email='$email' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location: ../Admin/index.php");
}else{
	echo "<script>alert('Email atau Password Salah');history.go(-1);</script>";
	header("location:Login.php");
}
 
?>