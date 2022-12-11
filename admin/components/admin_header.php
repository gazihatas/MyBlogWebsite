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

   <a href="dashboard.php" class="logo">Yönetici<span>Panel</span></a>

   <div class="profile">
      <?php
         $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
         $select_profile->execute([$admin_id]);
         $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
      ?>
      <p><?= $fetch_profile['name']; ?></p>
      <a href="update_profile.php" class="btn">update profile</a>
   </div>

   <nav class="navbar">

      <a href="../admin/index.php"><i class="fas fa-home"></i> <span>Ana Sayfa</span></a>
      <a href="../../index.php" target="_blank"><i class="fas fa-home"></i> <span>Siteyi Görüntüle</span></a>
      <a href="add_posts.php"><i class="fas fa-pen"></i> <span>add posts</span></a>
      <a href="view_posts.php"><i class="fas fa-eye"></i> <span>view posts</span></a>
      <a href="admin_accounts.php"><i class="fas fa-user"></i> <span>admin accounts</span></a>
      <a href="users_accounts.php"><i class="fas fa-user"></i> <span>user accounts</span></a>
      <a href="../components/admin_logout.php" style="color:var(--red);" onclick="return confirm('logout from the website?');"><i class="fas fa-right-from-bracket"></i><span>logout</span></a>
   </nav>

   <div class="flex-btn">
      <a href="admin_login.php" class="option-btn">login</a>
      <a href="register_admin.php" class="option-btn">register</a>
   </div>

</header>

<div id="menu-btn" class="fas fa-bars"></div>