<?php
require_once './dbconnect.php';

class UserLogic
{
  /***
   * ユーザを登録する
   * @param(引数) array $userDate
   * return(戻り値) bool $result
   */
  public static function createUser($userData)
  {
    $result = false;
    $sql = 'INSERT INT users (name,email,password)VALUES(?,?,?)';

    //ユーザデータを配列に入れる
    $arr = [];
    $arr[] = $userData['username'];  //name
    $arr[] = $userData['email']; //email
    $arr[] = password_hash($userData['password'], PASSWORD_DEFAULT); //password

    try {
      $stmt =  connect()->prepare($sql);
      $result = $stmt->execute($arr);
      return $result;
    } catch (\Exception $e) {

      return $result;
    }
  }
}
