<?php
// ①の部分
$height = (float) $_POST['height'];
$weight = (float) $_POST['weight'];
// ②の部分
if (!(( 0 < $height ) && ( $height < 3 ))) {
    echo "身長を正しく入力してください。";
    exit;
}
if (( $weight < 30 ) || (200 < $weight )) {
    echo "体重を正しく入力してください。";
    exit;
}
// ③の部分
// 適正体重の算出
$goal_weight = $height * $height * 22;
// 適正体重との差
$difference = abs($goal_weight - $weight);
// ④の部分
echo '体重' . $weight . 'kg<br>';
echo '理想' . $goal_weight . 'kg<br>';
echo '後' . $difference . 'kgで適正体重です。<br>';