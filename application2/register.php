<?php

//エラーメッセージ
$err = [];

//バリデーション機能
if (!$username = filter_input(INPUT_POST, 'username')) {
  $err[] = 'ユーザ名を記入してください';
}
if (!$username = filter_input(INPUT_POST, 'email')) {
  $err[] = 'メールアドレスを記入してください';
}

$password = filter_input(INPUT_POST, 'password');
//正規表現→"/\A[a-z\d]{8,100}+\z/i"
if(preg_match("/\A[a-z\d]{8,100}+\z/i",$password))
$password_conf = filter_input(INPUT_POST, 'password_conf');


?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザ登録完了画面</title>
</head>

<body>
  <p>ユーザ登録が完了しました</p>
  <a href="./signup_form.php">戻る</a>
</body>

</html>