<?php

include '../connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
};

include '../like_post.php';
include '../site/header.php';
include '../site/navbar.php';
?>


<br>





<link rel="stylesheet" href="<?=CSS_PATH;?>/blog.css">


<!--=============== MAIN ===============-->
<div class="row container" style="margin: auto;">
    <main class="main" style="margin:auto;">

        <div class="work__container container grid"></div>

        <!-- Ana Kutu Start-->
        <div class="row container " style="margin:auto;">

            <!-- Kategori Bolumu Start-->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <section class="skills section" id="skills" >

                            <div class="grid">
                                <?php
                                $select_author = $conn->prepare("SELECT * FROM `admin`");
                                $select_author->execute();
                                if($select_author->rowCount() > 0){
                                while($fetch_authors = $select_author->fetch(PDO::FETCH_ASSOC)){

                                $count_admin_posts = $conn->prepare("SELECT * FROM `posts` WHERE admin_id = ? AND status = ?");
                                $count_admin_posts->execute([$fetch_authors['id'], 'active']);
                                $total_admin_posts = $count_admin_posts->rowCount();

                                $count_admin_likes = $conn->prepare("SELECT * FROM `likes` WHERE admin_id = ?");
                                $count_admin_likes->execute([$fetch_authors['id']]);
                                $total_admin_likes = $count_admin_likes->rowCount();

                                $count_admin_comments = $conn->prepare("SELECT * FROM `comments` WHERE admin_id = ?");
                                $count_admin_comments->execute([$fetch_authors['id']]);
                                $total_admin_comments = $count_admin_comments->rowCount();

                                ?>


                                <div class="card">
                                    <h1 class="card-header" style="color: #C7FFD8;background: #676FA3;" align="center">Yazarlar</h1>
                                    <div class="card-body" style="color: greenyellow; background: #676FA3;">
                                        <h5 class="card-title" style="color: greenyellow;">author : <span class="badge text-bg-warning"><?= $fetch_authors['name']; ?></span></h5>
                                        <h5 class="card-title">total posts : <span class="badge text-bg-warning"><?= $total_admin_posts; ?></span></h5>
                                        <h5 class="card-title">posts likes : <span class="badge text-bg-warning"><?= $total_admin_likes; ?></span></h5>
                                        <h5 class="card-title">posts comments : <span class="badge text-bg-warning"><?= $total_admin_comments; ?></span></h5>
                                        <hr>
                                        <a style="float: right" href="author_posts.php?author=<?= $fetch_authors['name']; ?>"   class="btn btn-md btn-primary">Gönderiler</a>


                                    </div>
                                </div>
                                    <?php
                                }
                                }else{
                                    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                                          <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                          <div>
                                           yazar bulunamadı
                                          </div>
                                        </div>';
                                }
                                ?>
                            </div>

                        </section>

                    </div>
                </div>
            </div>
            <!-- Kategori Bolumu Finish-->


        </div>
        <!-- Ana Kutu Finish-->


        <div class="container"></div>
    <br>



    </main>
</div>



<?php include '../site/footer.php'; ?>
