<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>郵便番号検索結果2</title>
</head>

<body>
	<h1>郵便番号検索API利用結果2</h1>
	<?php
	if (!isset($_GET['zip'])) {
		echo '入力フォームから送信してください';
		exit;
	}

	$rtn = preg_match('/\A\d{7}\z/u', $_GET['zip']);
	if (!$rtn) {
		echo '郵便番号は数字7桁で入力してください。';
		exit;
	}

	$url = 'https://zipcloud.ibsnet.co.jp/api/search?zipcode=' . (int)$_GET['zip'];

	$response = file_get_contents($url);
	$response = json_decode($response, true);

	// var_dump($response);
	echo '検索された郵便番号は';
	echo $response['results'][0]['address1'] . ' ';
	echo $response['results'][0]['address2'] . ' ';
	echo $response['results'][0]['address3'] . ' ';
	echo 'の郵便番号です';
	?>

</body>

</html>