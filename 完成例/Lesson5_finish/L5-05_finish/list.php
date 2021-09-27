<?php
require_once 'functions.php';
try {
	// データベース接続の関数を呼び出して、返り値（PDOオブジェクト）を$dbhに代入
	$dbh = db_open();

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
