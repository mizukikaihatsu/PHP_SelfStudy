<?php
require_once 'functions.php';

//「title」で送られてきた中身が入っている（未入力）かどうか
if(empty($_POST['title'])){
	echo 'タイトルの入力は必須です';
	exit ;
}

// 「正規表現で入力文字列が1～200文字で制御文字を含まない」ことができていなければ
if(!preg_match('/\A[[:^cntrl:]]{1,200}\z/u',$_POST['title'])){
	echo 'タイトルの入力は200文字までです';
	exit ;
}

// ISBNの入力が0～13桁の数値でない場合
if(!preg_match('/\A\d{0,13}\z/', $_POST['isbn'])) {
    echo "ISBN は数字13桁までです。";
    exit;
}

// 価格の入力が0～6桁の数値でない場合
if(!preg_match('/\A\d{0,6}\z/u', $_POST['price'])) {
    echo "価格は数字6桁までです。";
    exit;
}

// 日付の入力がない場合
if(empty($_POST['publish'])) {
    echo "日付は必須です。";
    exit;
}

// 日付が「4桁の数値 - 1～2桁の数値 - 1～2桁の数値」でない場合
if(!preg_match('/\A\d{4}-\d{1,2}-\d{1,2}\z/u', $_POST['publish'])) {
    echo "日付のフォーマットが違います。";
    exit;
}

// 日付が日付として存在していない場合
$date = explode('-', $_POST['publish']);
if(!checkdate($date[1], $date[2], $date[0])) {
    echo "正しい日付を入力してください。";
    exit;
}

// 著者名が制御文字を含まない0～80文字で入力されていない場合
if(!preg_match('/\A[[:^cntrl:]]{0,80}\z/u', $_POST['author'])) {
    echo " 著者名は80文字以内で入力してください。";
    exit;
}

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