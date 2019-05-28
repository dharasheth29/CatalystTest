<?php
$total = 100;
$string_to_display = '';

for ($i = 1; $i <= $total; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        $string_to_display .= 'foobar, ';
    } else if ($i % 3 == 0) {
        $string_to_display .= 'foo, ';
    } else if ($i % 5 == 0) {
        $string_to_display .= 'bar, ';
    } else {
        $string_to_display .= $i . ', ';
    }
}

$string_to_display = substr($string_to_display, 0, -1);
echo $string_to_display;
