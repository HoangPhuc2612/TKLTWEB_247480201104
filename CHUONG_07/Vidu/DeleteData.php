<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Không kết nối:".mysqli_connect_error());
}
$makh="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["txtmakh"])){
        $makh = $_POST['txtmakh'];
    }
    $sql = "DELETE FROM khachhang WHERE makh='$makh'";
$result = mysqli_query ($conn, $sql);
if ($result) {
    echo "<script>window.location.href='Vidu7.1.php';</script>";
} else
    {
        echo "Xoá thất bại";
    }
}
mysqli_close($conn);
?>