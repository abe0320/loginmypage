<?php
mb_internal_encoding("utf8");

session_start();

if(empty($_POST['from_mypage'])){
  header("Location:login_error.php");
}

?>

<!DOCTYPE HTML>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
  </head>

  <body>
  <header>
      <img src="4eachblog_logo.jpg">
      <div class="logout"><a href = "log_out.php">ログアウト</a></div>
  </header>

  <main>
    <div class="box">
      <div class="contents">
        <h2>会員情報</h2>
        <div class="hello">
          <?php echo "こんにちは!　".$_SESSION['name']."さん"?>
        </div>
        <div class="profile_pic">
          <img src="<?php echo $_SESSION['picture'];?>">
        </div>
        <form action="mypage_update.php" method="post">
        <div class="basic_info">
          <p>氏名：
            <input type="text" class="formbox" name="name" size="40" value="<?php echo $_SESSION['name'];?>">
          </p>
          <p>メール：
            <input type="text" class="formbox" name="mail" size="40" value="<?php echo $_SESSION['mail'];?>">
          </p>
          <p>パスワード：
            <input type="password" class="formbox" name="password" size="40" value="<?php echo $_SESSION['password']?>">
          </p>
        </div>
        <div class="comments">
          <textarea rows="3" cols="115" class="formbox" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
        </div>
        <div class="hensyu_button">
          <input type="submit" class="submit_button" value="この内容に編集する">
        </div>
        </form>
     </div>
    </div>
  </main>

  <footer>
      © 2018 InterNous.inc All right reserved
  </footer>

  </body>
</html>

