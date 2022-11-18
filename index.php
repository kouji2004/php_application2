<?php
if (!empty($_POST["submitButton"])) {
  echo $_POST["username"];
  echo $_POST["comment"];
}

//データベース接続
$pdo = $dbh = new PDO('mysql:host=localhost;dbname=bbs-yt', "root1", "root1");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP掲示板</title>
</head>

<body>
  <h1 class="title">掲示板application</h1>
  <hr>
  <div class="boardWrapper">
    <section>
      <article>
        <div class="wrapper">
          <div class="nameArea">
            <span>名前:</span>
            <p class="username">miura</p>
            <time>:2022/11/18</time>
          </div>
          <p class="comment">手書きコメント</p>
        </div>
      </article>
    </section>
    <form class="formWrapper" method="POST">
      <div>
        <input type="submit" value="書き込む" name="submitButton">
        <label for="">名前</label>
        <input type="text" name="username">
      </div>
      <div>
        <textarea class="commentTextArea" name="comment"></textarea>
      </div>
    </form>
  </div>
</body>

</html>