<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$sql  = "SELECT * FROM admin where username = '$username' and password = '$password'";
$login = mysqli_query($conn, $sql);
$cek = mysqli_num_rows($login);

 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	header("location: index.php?p=home");
}else{
	header("location:index.php");	
}