
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xep loai hoc luc</title>
</head>
<body>
    <h2> nhap diem</h2>
    <form method= "post">
        diem giua ky: <input type= "number"
        step= "0.1" name ="giuaky" required><br><br>
         diem cuoi ky: <input type= "number"
        step= "0.1" name ="cuoiky" required><br><br>
    <input type= "submit" value ="xeploai">
</form>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $giuaky = $_POST["giuaky"];
    $cuoiky = $_POST["cuoiky"];
}
    $dtb= ($giuaky * 0.3)+ ( $cuoiky * 0.7);
    echo "Điểm trung bình: " . round($dtb, 1) . "<br>"; 
    //xeploai
    if ($dtb >= 9.0) {
        echo "Xếp loại: Xuất sắc";
    } elseif ($dtb >= 7.0) {
        echo "Xếp loại: Giỏi";
    } elseif ($dtb >= 5.0) {
        echo "Xếp loại: Khá";
    } else {
        echo "Xếp loại: Trung bình - Yếu";
    }
    ?>
</body>
</html>