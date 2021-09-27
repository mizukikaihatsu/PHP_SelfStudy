<?php
session_start();
require_once __DIR__ . '/inc/functions.php';
include __DIR__ . '/inc/header.php';
?>
<form method='post' action='login.php' class='loginform'>
    <p>
        <label for="username">ユーザ名:</label>
        <input type='text' name='username'>
    </p>
    <p>
        <label for="password">パスワード:</label>
        <input type='password' name='password'>
    </p>
    <input type='submit' value='送信する'>
</form>
<?php
// セッション「login」の値を確認して、もし何かが入っていればエラー表示
if(!empty($_SESSION['login'])) {
    echo "ログイン済です<br>";
    echo "<a href=index.php>リストに戻る</a>";
    exit;
}
// 入力フォームにユーザ名が入っていない または パスワードに何も入っていなければ表示
if((empty($_POST['username'])) || (empty($_POST['password']))) {
    echo "ユーザ名、パスワードを入力してください。";
    exit;
}

try {
	// データベース接続の関数を呼び出して、返り値（PDOオブジェクト）を$dbhに代入
	$dbh = db_open();

	// SQL文を変数に準備（値はプレースホルダで場所を確保）
	$sql = 'SELECT password FROM users WHERE username = :username' ;
	
	// PDOオブジェクトのprepare()メソッドでPDOStatementオブジェクトを生成し、
	// $stmtに代入（SQLの準備完了）
	$stmt = $dbh->prepare($sql);

	// 各プレースホルダにテキストボックスからの値をbindParam()メソッドを利用して置き換える
    $stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);

	// SQL文の実行
    $stmt->execute();

	$result = $stmt ->fetch(PDO::FETCH_ASSOC);

    if(!$result) {
        echo "ログインに失敗しました。";
        exit;
    }
	// password_verify()関数で、入力されたパスワードと
	// ハッシュ化されたパスワード（DBから取得した値）が一致するかどうかをチェック
    if(password_verify($_POST['password'], $result['password'])){

		// session_regenerate_id()関数で、古いセッションを破棄
        session_regenerate_id(true);

		// セッションにログインしていることを残す
        $_SESSION['login'] = true;

		// header()関数でページの自動遷移
        header("Location: index.php");
    }else{
        echo 'ログインに失敗しました。(2)';
    }




} catch (PDOException $e) {
    echo "エラー!: " . str2html($e->getMessage()) . "<br>";
    exit;
}
