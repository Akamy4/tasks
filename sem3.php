<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Задание1<br>
    <?php
    function search_str($string, $search_elem){
      $pos1 = strpos($string, $search_elem);
      $pos2 = strrpos($string, $search_elem);
      if(strlen($string) < 10){
        return "Строка для поиска слишком короткая!";
      } else {
        if($pos1 == false && $pos2 == false){
          $search_elem = strlen ($string) / 2;
          $search_elem = floor($search_elem);
          return $search_elem;
        }elseif($pos1 == $pos2){
          return "True";
          }else{
          return "False";
        }
        }
      }
    $string = '12345678900';
    $search_elem = '7';
    echo search_str($string, $search_elem);
     ?>
     <br>
     <br>Задание2<br>
     <?php
     function check_login($login){
       $logins = array("user", "admin", "moderator");
       if (empty($login)){
         return "Логин пустой. Введите логин еще раз!";
       } elseif(strlen($login) < 4 || strlen($login) > 20) {
         return "Неправильная длина логина.  Введите логин еще раз!";
       } else {
         foreach ($logins as $value) {
           if($value == $login){
             return "Такой логин уже существует. Введите логин еще раз!";
             break;
           }else{
             return $login;
           }
         }
       }
     }
     $login = "Akame";
     echo check_login($login);
      ?>
      <br>
      <br>Задание3<br>
      <?php
      function check_palindrome($string){
        $string = strtolower(str_replace(" ", "", $string));
        $rev_string = strrev($string);
        if($string == $rev_string){
          return "True";
        }else{
          return "False";
        }
      }
      $string = "MaDaM";
      echo check_palindrome($string);
       ?>
       <br>
       <br>Задание4<br>
       <?php
       function check_password($password){
         if($password == ""){
           return "Пароль пустой. Введите логин еще раз!";
         } else {
           if(strlen($password) < 10){
             return "Строка для поиска слишком короткая!";

           } else if(ctype_digit($password[0])){
             return "Пароль не может начинаться с цифры! Повторите попытку";
           } elseif (preg_match("/[\$%^&*~]/", $password)) {
             return "Пароль содержит недопустимые значения! Повторите попытку";
           } else {
             return $password;
             }
           }
         }
       $password ='f0123456789000';

       echo check_password($password);
        ?>
        <br>
        <br>Задание7<br>
       <?php
       function substrr($text, $start, $n){
         $answer = "";
         for($i = $start; $i < $n; $i++){
           $answer = $answer . $text[$i];
         }
         return $answer;
       }

       $text = "abcdef";
       $start = 0;
       $n = 4;
       echo substrr($text, $start, $n);
        ?>
         <br>
         <br>Задание9<br>
         <?php
         function check_user($login, $password){
           if($login == check_login($login) && $password == check_password($password)){
               return $login . " " . $password;
           }else{
               return "Неправильный логин или пароль!";
           }

         }
         $login = "Akame";
         $password = "f0123456789000";
         echo check_user($login, $password);

          ?>
  </body>
</html>
