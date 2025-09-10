<?php
function giaiPTB2($a, $b, $c) {
    if ($a == 0) {
        if ($b == 0) {
            return ($c == 0) ? "Vô số nghiệm" : "Vô nghiệm";
        } else {
            return "Phương trình có 1 nghiệm: x = " . (-$c / $b);
        }
    }

    $delta = $b*$b - 4*$a*$c;
    if ($delta < 0) {
        return "Phương trình vô nghiệm";
    } elseif ($delta == 0) {
        $x = -$b / (2*$a);
        return "Phương trình có nghiệm kép: x = $x";
    } else {
        $x1 = (-$b + sqrt($delta)) / (2*$a);
        $x2 = (-$b - sqrt($delta)) / (2*$a);
        return "Phương trình có 2 nghiệm phân biệt: x1 = $x1, x2 = $x2";
    }
}
echo giaiPTB2(1, -7, 9);
?>
