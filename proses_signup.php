<?php  
if (isset($_POST['submit'])) {  
    extract($_POST);  
    $servername = "localhost"; 
    $username   = "root";  
    $password   = "";  
    $dbname     = "mqtt";  
    // Create connection  
    $conn       = mysqli_connect($servername,$username,$password, $dbname);  
    // Check connection  
    if ($conn->connect_error) {  
        die("Connection failed: " . $conn->connect_error);  
    } 
    $user=$_POST['user'];
	$password=$_POST['password']; 
    $sql = "INSERT INTO `login`(`user`, `password`) VALUES ('$user','$password')";  
    if ($conn->query($sql) === TRUE) {  
        header('Location: index.php');  
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }  
    $conn->close();  
}  
?> 