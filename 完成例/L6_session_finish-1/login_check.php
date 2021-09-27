<?php
// セッションの開始
if(!isset($_SESSION)) {
    session_start();
}

// セッションの「login」の値が空だったら表示（未ログイン状態）
if(empty($_SESSION['login'])) {
    echo " このページにアクセスするには<a href='login.php'> ログイン</a> が必要です。";
    exit;
}
// HTMLソースに表示
echo "<!-- ログイン中-->";