<?php

try {
   $db_name = 'mysql:host=localhost;dbname=myblog_db';
   $user_name = 'root';
   $user_password = '';

   $conn = new PDO($db_name, $user_name, $user_password);


   // echo "Başarılı";
} catch (PDOException $e) {
   echo $e->e.getMessage();
}

  

?>