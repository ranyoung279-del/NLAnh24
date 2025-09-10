<pre>
<?php
function hinhChuNhatRong($d, $r) {
    for ($i = 1; $i <= $d; $i++) {
        for ($j = 1; $j <= $r; $j++) {
            if ($i == 1 || $i == $d || $j == 1 || $j == $r) {
                echo "* ";
            } else {
                echo "  ";
            }
        }
        echo "\n";
    }
}
hinhChuNhatRong(5, 7);
?>
</pre>