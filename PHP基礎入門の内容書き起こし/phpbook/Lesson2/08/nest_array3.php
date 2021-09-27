<?php
$people[] = ['name' => '佐藤' , 'blood' => 'A'];
$people[] = ['name' => '田中' , 'blood' => 'B'];
$people[] = ['name' => '加藤' , 'blood' => 'O'];
foreach($people as $key => $value) {
    echo 'キーは' . $key . '、値は' . $value . '<br>';
}