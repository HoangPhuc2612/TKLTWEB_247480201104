<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="UpdateData.php">
        Mã khách hàng: <input type ="text" name="txtmakh" value=""><br>
        Tên khách hàng: <input type="text" name="txttenkh" value=""><br>

        <button type="submit">Update</button>
    </form>
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

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["txtmakh"])){
        $makh = $_POST['txtmakh'];
    }
    if(isset($_POST["txttenkh"])){
        $tenkh = $_POST['txttenkh'];
    }
    $sql = "UPDATE khachhang SET tenkh='$tenkh' WHERE makh='$makh'";
$result = mysqli_query ($conn, $sql);
if ($result) {
    echo "<script>window.location.href='Vidu7.1.php';</script>";
} else
    {
        echo "Cập nhật thất bại";
    }
}
mysqli_close($conn);
?>
</body>
</html>