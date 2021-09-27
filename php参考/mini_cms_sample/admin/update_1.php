<?php
    // ファイルの読み込み
    require_once('../inc/config.php');
    require_once('../inc/functions.php');

    // 変更ボタンが押されたかをチェック
    if ( $_SERVER['REQUEST_METHOD'] !== 'POST') 
    {
        // ダイレクトでアクセスされた時
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
        $sql = 'UPDATE posts SET title=?, category_id=?, content=? WHERE id = ?';

        // ステートメント用意
        $stmt = $dbh->prepare($sql);

        // プレースホルダーに値を埋め込む
        $stmt->bindValue(1, $_POST['title'] , PDO::PARAM_STR);
        $stmt->bindValue(2, (int)$_POST['category_id'] , PDO::PARAM_INT);
        $stmt->bindValue(3, $_POST['content'] , PDO::PARAM_STR);
        $stmt->bindValue(4, (int)$_POST['id'] , PDO::PARAM_INT);

        // ステートメントを実行
        $stmt->execute();

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

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>記事の更新</title>
    </head>

    <body>
        <h1>記事の更新</h1>
        <p>記事を更新しました。</p>

        <p><a href="./">一覧に戻る</a></p>
    </body>
</html>