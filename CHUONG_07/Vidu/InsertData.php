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
$tenkh="";
$namsinh="";
$dienthoai="";
$diachi="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["txtmakh"])){
        $makh = $_POST['txtmakh'];
    }
    if(isset($_POST["txttenkh"])){
        $tenkh = $_POST['txttenkh'];
    }
    if(isset($_POST["txtnamsinh"])){
        $namsinh = $_POST['txtnamsinh'];
    }
    if(isset($_POST["txtdienthoai"])){
        $dienthoai = $_POST['txtdienthoai'];
    }
    if(isset($_POST["txtdiachi"])){
        $diachi = $_POST['txtdiachi'];
    }

   $sql = "INSERT INTO khachhang (makh, tenkh, namsinh, dienthoai, diachi) VALUES ('$makh', '$tenkh', '$namsinh', '$dienthoai', '$diachi')" ;
$result = mysqli_query ($conn, $sql);
if ($result){
    echo "<script>window.location.href='Vidu7.1.php';</script>";
}else
    {
        echo "Không thêm được";
    }
}
mysqli_close($conn);
?>