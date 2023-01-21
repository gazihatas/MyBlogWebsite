<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <a href="index.php" class="logo">Yönetici<span>Paneli</span></a>

   <div class="profile">
      <?php
         $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
         $select_profile->execute([$admin_id]);
         $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
      ?>
      <p><?= $fetch_profile['name']; ?></p>
      <a href="update_profile.php" class="btn">Profil Güncelle</a>
   </div>

   <nav class="navbar">
       <a href="<?=SITE_URL;?>" target="_blank"><i class="fas fa-search"></i> <span>Siteyi Görüntüle</span></a>
       <a href="<?=SITE_URL;?>/components/blog/" target="_blank"><i class="fas fa-book"></i> <span>Bloglar Site</span></a>
      <a href="index.php"><i class="fas fa-home"></i> <span>Ana Sayfa</span></a>
      <a href="add_posts.php"><i class="fas fa-pen"></i> <span>İçerik Ekle</span></a>
      <a href="view_posts.php"><i class="fas fa-eye"></i> <span>İçerik Görüntüle</span></a>
      <a href="admin_accounts.php"><i class="fas fa-user"></i> <span>Hesaplar</span></a>
      <a href="../components/admin_logout.php" style="color:var(--red);" onclick="return confirm('web sitesinden çıkmak istediğine emin misin?');"><i class="fas fa-right-from-bracket"></i><span>logout</span></a>
   </nav>

   <div class="flex-btn">
      <a href="admin_login.php" class="option-btn">Giriş Yap</a>
      <a href="register_admin.php" class="option-btn">Kayıt Ol</a>
   </div>

</header>

<div id="menu-btn" class="fas fa-bars"></div>