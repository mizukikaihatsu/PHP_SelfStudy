<?php
$a = 20; //$a に20 を代入
function test() {
    $a = 10; // 関数内では$a に10 を代入
    return $a;
}
$b = test(); // 返り値を代入する変数を$b に変更
echo '$aは' . $a . 'です。$bは' . $b . 'です。';