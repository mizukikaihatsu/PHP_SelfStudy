<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try01_calcu.php</title>
</head>

<body>
    <h1>プラスα-01</h1>
    <h2>三角形1</h2>
<?php
for($i=0;$i<11;$i++){
	for($j=0;$j<=$i;$j++){
			echo '＊';
	}
	echo '<br>';
}
?>

    <h2>三角形2</h2>
<?php
$mid = 5;
for($i=0; $i<6; $i++) {
	for($j=0; $j<11; $j++) {
		if($j<$mid-$i || $j > $mid +$i) {
			echo '　';
		}else {
			echo '＊';
		}
	}
	echo '<br>';
}
?>

</body>

</html>
