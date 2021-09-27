<?php
require_once 'functions.php';
try {
	$user = "phpuser";		//booksにアクセスするユーザ名
	$password = "pass"; 	//phpuserに対応するパスワード

	// データベースに接続する際のオプションを設定して変数に置き換える
	$opt = [
		//↓SQLエラー時の対処法→Exceptionを発生させ、通知する
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		//SQLが正しく実行されなかった際のエラーの発生のさせ方
		PDO::ATTR_EMULATE_PREPARES => false,
		//実行のさせ方のON/OFF切り替え
		PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
	];

	// PDOオブジェクトを利用してデータベースに接続する
	$dbh = new PDO('mysql:host=localhost;dbname=sample_db', $user, $password, $opt);

	// SQL文を変数に準備（値はプレースホルダで場所を確保）
	$sql = 'INSERT INTO books (id, title, isbn, price, publish, author) 
		VALUES (NULL, :title, :isbn, :price, :publish, :author)' ;
	
	// PDOオブジェクトのprepare()メソッドでPDOStatementオブジェクトを生成し、
	// $stmtに代入（SQLの準備完了）
	$stmt = $dbh->prepare($sql);

	// テキストボックスの「price」を整数型に変換して「$price」に代入
	$price = (int) $_POST['price'];

	// 各プレースホルダにテキストボックスからの値をbindParam()メソッドを利用して置き換える
    $stmt->bindParam(":title", $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(":isbn", $_POST['isbn'], PDO::PARAM_STR);
    $stmt->bindParam(":price", $price, PDO::PARAM_INT);
    $stmt->bindParam(":publish", $_POST['publish'], PDO::PARAM_STR);
    $stmt->bindParam(":author", $_POST['author'], PDO::PARAM_STR);

	// SQL文の実行
    $stmt->execute();

    echo "データが追加されました。<br>";
    echo "<a href='list.php'>リストへ戻る</a>";

} catch (PDOException $e) {
    echo "エラー!: " . str2html($e->getMessage()) . "<br>";
    exit;
}