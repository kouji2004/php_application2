<?php
require_once '../dbconnect.php';

class UserLogic
{
  /***
   * ユーザを登録する
   * @param(引数) array $userDate
   * return(戻り値) bool $result
   */
  public static function createUser($userDate)
  {
    $result = false;
    $sql = 'INSERT INT users (name,email,password)VALUES(?,?,?)';

    //ユーザデータを配列に入れる
    $arr = [];
    $arr[] =  //name
      $arr[] = //email
      $arr[] = //password

      try{
        $stmt =  connect()->prepare($sql);
        $result = $stmt->execute($arr);
      }catch(\Exception $e){
        return $result;
      }
  }
}
