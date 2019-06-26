<?php

//==============================
//ログイン認証
//==============================

// ログイン認証
// session_id =サーバーから与えられたもの
// $_SESSION['user_id'] = DBに保存されてるID
// $_SESSION['login_limit'] = 有効期限
// $_SESSION['login_date'] = ログインしたときの時間（量）

// ログインしている場合
if (!empty($_SESSION['login_date'])) {
    debug('ログイン済ユーザーです');

    //ログインしたときの時間＋有効期限が現在時刻をオーバーしていた場合
    if (($_SESSION['login_date'] + $_SESSION['login_limit']) < time()) {
        debug('セッションの有効期限がオーバーしてます');

        // セッションを壊す(ログアウトする)
        session_destroy();
        // トップページヘ遷移させる
        header("Location:top.php");

    //ログインしたときの時間＋有効期限が現在時刻時刻をオーバーしていない場合
    debug('セッションの有効期限が期限以内です');
    } elseif (($_SESSION['login_date'] + $_SESSION['login_limit']) > time()) {
        // セッションを最新に更新
        $_SESSION['login_date'] = time();

        // myMemoに遷移させる
        header("Location:myMemo.php");
    }

}else{
  // ログインしていない場合($_SESSION['login_date']がない場合)
  debug('ログイン未ユーザーです');
  // 特に何もせずマイメモページヘ遷移させる

  // topに遷移させる
  header("Location:top.php");

} 

?>