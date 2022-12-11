<?php

try {
   $db_name = 'mysql:host=localhost;dbname=blog_db';
   $user_name = 'root';
   $user_password = '123456';

   $conn = new PDO($db_name, $user_name, $user_password);


   //echo "Başaralı";
} catch (PDOException $e) {
   echo "Başarısız";
}

  

?>