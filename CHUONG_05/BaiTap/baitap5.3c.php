<?php
do{
    $x = rand(1,100);
    $y = rand(1,100);
}while ($x <= $y);
    echo "Giá trị: x = $x <br>";
    echo "Giá trị: y = $y <br>";
    echo "Tổng: " . ($x + $y) . "<br>";
    echo "Hiệu: " . ($x - $y) . "<br>";
    echo "Tích: " . ($x * $y) . "<br>";
    echo "Thương: " . ($x / $y) . "<br>";
    echo "Chia lấy dư: " . ($x % $y);
?>
