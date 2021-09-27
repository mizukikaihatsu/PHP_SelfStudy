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

	// SQL文の準備
	$sql = 'SELECT title , author FROM books';

	// $dbhオブジェクトのquery()メソッドでSQLを実行する
	$statement = $dbh -> query($sql);

	while ($row = $statement->fetch()){
		echo '書籍名：' . str2html($row[0]) . '<br>';
		echo '著者名：' . str2html($row[1]) . '<br><br>';
		
	}

} catch (PDOException $e) {
	echo " エラー!: " . $e->getMessage() . "<br>";
}
