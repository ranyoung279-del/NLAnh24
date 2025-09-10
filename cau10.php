<?php
function tinhTBC($arr) {
    if (count($arr) == 0) return 0;
    $tong = array_sum($arr);
    return $tong / count($arr);
}
echo tinhTBC([2, 7, 9, 2, 5]); // Kết quả sẽ là: 5
?>
