<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
};

include 'components/like_post.php';
include 'components/site/header.php';
include 'components/site/navbar.php';
?>


<link rel="stylesheet" href="/assets/site/css/blog.css">


<!--=============== MAIN ===============-->
<div class="row container" style="margin: auto;">
    <main class="main" style="margin:auto;">

        <div class="work__container container grid"></div>

        <!-- Ana Kutu Start-->
        <div class="row container " style="margin:auto;">
            <!-- Bilgi Kart & Login/Register Start-->
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="row" style="margin:auto;">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">

                        <!-- Bilgi Kart & Login/Register Alanı--->
                        <section class="skills section" id="skills" style="top: 0;" >

                            <!-- Bilgi Kart & Login/Register--->
                            <div class=" grid">

                                <div style="text-align: center; align-items: center; justify-content: flex; width: 100%; " class="skills__content">

                                    <?php
                                    $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
                                    $select_profile->execute([$user_id]);
                                    if($select_profile->rowCount() > 0){
                                        $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                                        $count_user_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
                                        $count_user_comments->execute([$user_id]);
                                        $total_user_comments = $count_user_comments->rowCount();
                                        $count_user_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
                                        $count_user_likes->execute([$user_id]);
                                        $total_user_likes = $count_user_likes->rowCount();
                                        ?>
                                        <p> Hoşgeldin <span><?= $fetch_profile['name']; ?></span></p>
                                        <p>Yorum sayın : <span><?= $total_user_comments; ?></span></p>
                                        <p>Beğenilmiş blog sayısı : <span><?= $total_user_likes; ?></span></p>
                                         <a href="update.php" class="button" >Profili güncelle</a> 

                                       
                                            <a href="user_likes.php" class="button" style="margin-top:10px;">Beğeniler</a>
                                            <a href="user_comments.php" class="button"  style="margin-top:10px;" >Yorumlar</a>
                                        
                                        <?php
                                    }else{
                                        ?>
                                        <h3 class="skills__title">Giriş Yap yada Kaydol!</h3>
                                        <a href="../auth/login.php" class="button">Giriş Yap</a>
                                        <a href="register.php"  class="button" style="margin-top: 10px; ">Kayıt Ol</a>

                                        <?php
                                    }
                                    ?>

                                </div>

                            </div>
                            <!-- Kart Finish -->

                        </section>
                    </div>
                </div>
            </div>
            <!-- Bilgi Kart & Login/Register Finish-->

            <!-- Yazar Bolumu Start-->
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <section class="skills section" id="skills" >

                            <!-- Yazar Start-->
                            <div class=" grid container"    >
                                <div style="text-align: center; align-items: center; justify-content: flex; width: 100%;  " class="skills__content">
                                    <h3 class="skills__title">Yazarlar</h3>

                                    <?php
                                    $select_authors = $conn->prepare("SELECT DISTINCT name FROM `admin` LIMIT 10");
                                    $select_authors->execute();
                                    if($select_authors->rowCount() > 0){
                                        while($fetch_authors = $select_authors->fetch(PDO::FETCH_ASSOC)){
                                            ?>
                                            <a href="author_posts.php?author=<?= $fetch_authors['name']; ?>" class="button"><?= $fetch_authors['name']; ?></a>
                                            <?php
                                        }
                                    }else{
                                        echo '<p class="empty">Henüz blog paylaşılmadı!</p>';
                                    }
                                    ?>

                                </div>
                            </div>
                            <!-- Yazar Finish -->
                        </section>


                    </div>
                </div>
            </div>
            <!-- Yazar Bolumu Finish-->

            <!-- Kategori Bolumu Start-->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <section class="skills section" id="skills" >

                            <!--Kategori Card Start-->
                            <div class=" grid"  >

                                <div style="text-align: center; align-items: center; justify-content: flex; width: 100%;  " class="skills__content">
                                    <h3 class="skills__title">Kategoriler</h3>
                                    <a href="login.php" class="button" style="" >Giriş Yap</a>
                                    <a href="category.php?category=nature"  class="button" style="margin-top: 10px; ">Doğa</a>
                                    <a href="category.php?category=education"  class="button" style="margin-top: 10px; ">Eğitim</a>
                                    <a href="category.php?category=business"  class="button" style="margin-top: 10px; ">İş</a>
                                    <a href="category.php?category=travel"  class="button" style="margin-top: 10px; ">Seyehat</a>
                                    <a href="category.php?category=news"  class="button" style="margin-top: 10px; ">News</a>
                                    <a href="category.php?category=gaming"  class="button" style="margin-top: 10px; ">Gaming</a>
                                    <a href="category.php?category=sports"  class="button" style="margin-top: 10px; ">Sports</a>
                                    <a href="category.php?category=design"  class="button" style="margin-top: 10px; ">Design</a>
                                    <a href="category.php?category=fashion"  class="button" style="margin-top: 10px; ">Donanım</a>
                                    <a href="category.php?category=persional" class="button" style="margin-top: 10px; ">Persional</a>
                                    <a href="all_category.php"  class="button" style="margin-top: 10px; ">Hepsini gör</a>
                                </div>

                            </div>
                            <!-- Kategori Card Finish -->

                        </section>

                    </div>
                </div>
            </div>
            <!-- Kategori Bolumu Finish-->

            <!-- Posts Start-->
            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">

                        <div class="container2" >
                            <h2>Post</h2>
                            <?php
                            $select_posts = $conn->prepare("SELECT * FROM `posts` WHERE status = ?");
                            $select_posts->execute(['active']);
                            if($select_posts->rowCount() > 0){
                                while($fetch_posts = $select_posts->fetch(PDO::FETCH_ASSOC)){

                                    $post_id = $fetch_posts['id'];

                                    $count_post_comments = $conn->prepare("SELECT * FROM `comments` WHERE post_id = ?");
                                    $count_post_comments->execute([$post_id]);
                                    $total_post_comments = $count_post_comments->rowCount();

                                    $count_post_likes = $conn->prepare("SELECT * FROM `likes` WHERE post_id = ?");
                                    $count_post_likes->execute([$post_id]);
                                    $total_post_likes = $count_post_likes->rowCount();

                                    $confirm_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ? AND post_id = ?");
                                    $confirm_likes->execute([$user_id, $post_id]);
                                    ?>


                                    <!--  Post Start  -->
                                    <form method="post">


                                        <div class="blog-post">
                                            <!-- Post Image-->
                                            <div class="blog-post_img">
                                                <?php
                                                if($fetch_posts['image'] != ''){ ?>
                                                    <img src="../admin/uploaded_img/<?= $fetch_posts['image']; ?>"  alt="" >
                                                    <?php
                                                } ?>
                                            </div>


                                            <div class="blog-post_info">

                                                <div class="blog-post_date">
                                                    <i class="fas fa-user"></i>
                                                    <span><a href="author_posts.php?author=<?= $fetch_posts['name']; ?>"><?= $fetch_posts['name']; ?></a></span>
                                                    <span><?= $fetch_posts['date']; ?></span>
                                                </div>


                                                <div class="icons">


                                                </div>
                                                <h1 class="blog-post_title"><?= $fetch_posts['title']; ?></h1>
                                                <p class="blog-post_text"><?= substr(html_entity_decode($fetch_posts['content']),0,250   ); ?>...</p>

                                                <div style="display: flex; justify-content: space-between;">
                                                    <div  style="align-items: end;" >
                                                        <a href="view_post.php?post_id=<?= $post_id; ?>" class="blog-post_cta">Daha Fazla Oku</a>
                                                    </div>
                                                    <div style="margin-bottom:20px; margin: 15px;">
                                                        <!--  Kategori -->
                                                        <a href="category.php?category=<?= $fetch_posts['category']; ?>" class="post-cat"> <i class="fas fa-tag"></i> <span><?= $fetch_posts['category']; ?></span></a>
                                                        <br>
                                                        <!-- Yorum -->
                                                        <a href="view_post.php?post_id=<?= $post_id; ?>"><i class='bx bx-message-square-dots' style="font-size: 30px;"></i><span>(<?= $total_post_comments; ?>)</span></a>
                                                        <!-- Beğeni -->
                                                        <button type="submit" name="like_post"><i  class='bx bx-heart' style="font-size: 30px; margin-left:15px; "></i><span>(<?= $total_post_likes; ?>)</span></button>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <!-- Post Finish -->

                                    </form>
                                    <?php
                                }
                            }else{
                                echo '<p class="empty">Henüz blog paylaşılmadı!</p>';
                            }
                            ?>

                        </div>

                    </div>
                </div>
            </div>
            <!--  Posts Finish --->
        </div>
        <!-- Ana Kutu Finish-->


        <div class="container"></div>

        <!-- <div class="more-btn" style="text-align: center; margin-top:1rem;">
            <a href="posts.php" class="blog-post_cta">Tüm blogları gör</a>
        </div> -->

    </main>
</div>

<?php include 'components/site/footer.php'; ?>