<!doctype html>
<html lang="en">
<head>
</head>
<body>
<?php
include"connect.php";
$sql = "SELECT * FROM `tabel1` ORDER BY `Time` DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //$response['waktu'] =$row["id_waktu"];
        //$response['suhu'] =$row["suhu"];
        $id = $row["id"];
        $suhu =$row["Temperature"];
        $kelembapan =$row["Humidity"];
        $ph =$row["pH"];
        //$response['kelembapan'] =$row["kelembapan"];
        //$response['ph'] =$row["ph"];
    }
}
 else {
    echo "0 results";
}
	//$json_response = json_encode($response);
	//echo $json_response;
    if($_GET["data"]==="temperature")echo $suhu."&deg; C";
    if($_GET["data"]==="humidity")echo $kelembapan."%";
    if($_GET["data"]==="ph")echo $ph;
?>
</body>
</html>