<?php
    // ファイルの読み込み
    require_once('../inc/config.php');
    require_once('../inc/functions.php');

    // GETパラメータのチェック
    if ( empty($_GET['id']) ) 
    {
        // $_GET['id'] が 空 の場合
        header('Location: index.php');
        exit();
    }

    try 
    {
        // データベースへ接続
        $dbh = new PDO(DSN, DB_USER, DB_PASSWORD);

        // エラー発生時に「PDOException」という例外を投げる設定に変更
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // SQL文の作成
        $sql = 'SELECT * FROM posts WHERE id = ?';

        // ステートメント用意
        $stmt = $dbh->prepare($sql);

        // プレースホルダーに値を埋め込む
        $stmt->bindValue(1, (int)$_GET['id'] , PDO::PARAM_INT);

        // ステートメントを実行
        $stmt->execute();

        // 実行結果を連想配列として取得
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
?>

        <pre><?php print_r($result); ?></pre>

<?php
        // データベースとの接続を終了
        $dbh = null;

    }
    catch (PDOException $e)
    {
        //　例外発生時の処理
        echo 'エラー' . h($e->getMessage());
        exit();
    }
?>