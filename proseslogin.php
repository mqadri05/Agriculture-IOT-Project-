<?php

$conn=mysqli_connect("localhost","root","");
$pilih=mysqli_select_db($conn,"mqtt");
$user=$_POST['user'];
$pass=$_POST['password'];
$sql="SELECT * FROM login WHERE user='$user' and password='$pass'";
$result=mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
$nama=mysqli_fetch_array($result);
if($count==1){
	session_start();
    $_SESSION["user"]= $user;
	$_SESSION["password"]= $pass;
	header("location:dashboard.php");
}
else{
	echo "Silahkan Isi User Name dan Password dengan Benar!!!";
}
?>