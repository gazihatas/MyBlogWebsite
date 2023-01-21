<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php' ?>

<!-- admin dashboard section starts  -->

<section class="dashboard">

   <h1 class="heading">Yönetim Paneli</h1>

   <div class="box-container">

   <div class="box">
      <h3>Hoşgeldin!</h3>
      <p><?= $fetch_profile['name']; ?></p>
      <a href="update_profile.php" class="btn">Profil Güncelle</a>
   </div>

   <div class="box">
      <?php
         $select_posts = $conn->prepare("SELECT * FROM `posts` WHERE admin_id = ?");
         $select_posts->execute([$admin_id]);
         $numbers_of_posts = $select_posts->rowCount();
      ?>
      <h3><?= $numbers_of_posts; ?></h3>
      <p>Eklenen Gönderiler</p>
      <a href="add_posts.php" class="btn">Yeni Gönderi Ekle</a>
   </div>

   <div class="box">
      <?php
         $select_active_posts = $conn->prepare("SELECT * FROM `posts` WHERE admin_id = ? AND status = ?");
         $select_active_posts->execute([$admin_id, 'active']);
         $numbers_of_active_posts = $select_active_posts->rowCount();
      ?>
      <h3><?= $numbers_of_active_posts; ?></h3>
      <p>Aktif Gönderiler</p>
      <a href="view_posts.php" class="btn">Gönderileri Görüntüle</a>
   </div>

   <div class="box">
      <?php
         $select_deactive_posts = $conn->prepare("SELECT * FROM `posts` WHERE admin_id = ? AND status = ?");
         $select_deactive_posts->execute([$admin_id, 'deactive']);
         $numbers_of_deactive_posts = $select_deactive_posts->rowCount();
      ?>
      <h3><?= $numbers_of_deactive_posts; ?></h3>
      <p>Pasif Gönderiler</p>
      <a href="view_posts.php" class="btn">Gönderileri Görüntüle</a>
   </div>

   <div class="box">
      <?php
         $select_users = $conn->prepare("SELECT * FROM `users`");
         $select_users->execute();
         $numbers_of_users = $select_users->rowCount();
      ?>
      <h3><?= $numbers_of_users; ?></h3>
      <p>Kullanıcı Hesapları</p>
      <a href="users_accounts.php" class="btn">Kullanıcıları Görüntüle</a>
   </div>

   <div class="box">
      <?php
         $select_admins = $conn->prepare("SELECT * FROM `admin`");
         $select_admins->execute();
         $numbers_of_admins = $select_admins->rowCount();
      ?>
      <h3><?= $numbers_of_admins; ?></h3>
      <p>Admin Hesapları</p>
      <a href="admin_accounts.php" class="btn">Adminleri Görüntüle</a>
   </div>
   
   <div class="box">
      <?php
         $select_comments = $conn->prepare("SELECT * FROM `comments` WHERE admin_id = ?");
         $select_comments->execute([$admin_id]);
         $select_comments->execute();
         $numbers_of_comments = $select_comments->rowCount();
      ?>
      <h3><?= $numbers_of_comments; ?></h3>
      <p>Eklenen Yorumlar</p>
      <a href="comments.php" class="btn">Yorumları Görüntüle</a>
   </div>

   <div class="box">
      <?php
         $select_likes = $conn->prepare("SELECT * FROM `likes` WHERE admin_id = ?");
         $select_likes->execute([$admin_id]);
         $select_likes->execute();
         $numbers_of_likes = $select_likes->rowCount();
      ?>
      <h3><?= $numbers_of_likes; ?></h3>
      <p>Toplam Beğeni</p>
      <a href="view_posts.php" class="btn">Gönderileri Görüntüle</a>
   </div>

   </div>

</section>

<!-- admin dashboard section ends -->










<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

</body>
</html>