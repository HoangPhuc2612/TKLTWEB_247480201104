
<?php
$kq = "";

if (isset($_POST["tinh"])) {
    $a = $_POST["so1"];
    $b = $_POST["so2"];
    $phep = $_POST["tinh"];

    if ($phep == "cong") {
        $kq = $a + $b;
    } else if ($phep == "tru") {
        $kq = $a - $b;
    } else if ($phep == "nhan") {
        $kq = $a * $b;
    } else if ($phep == "chia") {
        if ($b != 0) {
            $kq = $a / $b;
        } else {
            $kq = "Khong chia duoc cho 0";
        }
    } else if ($phep == "mod") {
        if ($b != 0) {
            $kq = $a % $b;
        } else {
            $kq = "Khong chia duoc cho 0";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tinh toan so hoc</title>
</head>
<body>

<h2 align="center">TÍNH TOÁN SỐ HỌC</h2>

<h3 align="center"><form method="post">
    So thu 1:
    <input type="number" name="so1" required>
    <br><br>

    So thu 2:
    <input type="number" name="so2" required>
    <br><br>

    Ket qua:
    <input type="text" value="<?php echo $kq; ?>" readonly>
    <br><br>

    <button type="submit" name="tinh" value="cong">Cộng</button>
    <button type="submit" name="tinh" value="tru">Trừ</button>
    <button type="submit" name="tinh" value="nhan">Nhân</button>
    <button type="submit" name="tinh" value="chia">Chia</button>
    <button type="submit" name="tinh" value="mod">Mod</button>
</form></h3>

</body>
</html>
