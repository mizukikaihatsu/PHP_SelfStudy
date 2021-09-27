<?php
function str2html(string $string) :string {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

// データベースに接続する関数の定義
function db_open() :PDO {
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
    // PDOオブジェクトを呼び出し元に返す
    return $dbh ;
}