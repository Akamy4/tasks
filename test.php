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
      if(strlen($string) < 10){
        return "Строка для поиска слишком короткая!";
      } else {
        $pos1 = strpos($string, $search_elem);
        $pos2 = strrpos($string, $search_elem);
        if(!$pos1 && !$pos2){
          $search_elem = $string;
          return $search_elem;
        }elseif(strlen($string) >= 10){
          if($pos1 && $pos2){
            return "True";
          }else{
            return "False";
          }
        }
      }

    }
    $string = 'Hello world';
    $search_elem = 'd';
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
        $str = mb_strtolower(str_replace(" ", "", $string));
        $rev_str = mb_strtolower(str_replace(" ", "", $string));
        $rev_str = strrev($rev_str);
        if($str == $rev_str){
          return "True";
        }else{
          return "False";
        }
      }


      $string = "123321";
      echo check_palindrome($string);
       ?>
       <br>
       <br>Задание4<br>
       <?php
       for($y = 1; $y <2019; $y++){
         if(getDigitsSum($y) == 13){
           echo $y . " ";
         }
       }
       ?>
       <br>Задание7<br>
       <?php
       function getDigitsSum($y){
         $sum = 0;
         for ($i=0; $i <= abs($y); $i++) {
           $sum += $i;
         }
         return $sum;
       }
       for($y = 1; $y <2019; $y++){
         if(getDigitsSum($sum) == 13){
           echo $y . " ";
         }
       }
       ?>
         <br>
         <br>Задание9<br>
         <?php
         function check_user($login, $password){
           if($login === check_login($login) && $password === check_password($password)){
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
