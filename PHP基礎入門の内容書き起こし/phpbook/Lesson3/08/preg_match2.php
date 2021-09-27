<?php
$str = "〒1010051 東京都千代田区神田神保町111-1111";
preg_match('/\d{3}-\d{4}/u', $str, $match);
var_dump($match);