<?php

include '../connect.php';
require_once '../../config/default.php';
session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
};



include '../like_post.php';


$get_id = $_GET['post_id'];

if(isset($_POST['add_comment'])){

    $admin_id = $_POST['admin_id'];
    $admin_id = filter_var($admin_id, FILTER_SANITIZE_STRING);
    $user_name = $_POST['user_name'];
    $user_name = @filter_var($user_name, FILTER_SANITIZE_STRING);
    $comment = $_POST['comment'];
    $comment = @filter_var($comment, FILTER_SANITIZE_STRING);

    $verify_comment = $conn->prepare("SELECT * FROM `comments` WHERE post_id = ? AND admin_id = ? AND user_id = ? AND user_name = ? AND comment = ?");
    $verify_comment->execute([$get_id, $admin_id, $user_id, $user_name, $comment]);

    if($verify_comment->rowCount() > 0){
        $message[] = 'comment already added!';
    }else{
        $insert_comment = $conn->prepare("INSERT INTO `comments`(post_id, admin_id, user_id, user_name, comment) VALUES(?,?,?,?,?)");
        $insert_comment->execute([$get_id, $admin_id, $user_id, $user_name, $comment]);
        $message[] = 'new comment added!';
    }

}

if(isset($_POST['edit_comment'])){
    $edit_comment_id = $_POST['edit_comment_id'];
    $edit_comment_id = filter_var($edit_comment_id, FILTER_SANITIZE_STRING);
    $comment_edit_box = $_POST['comment_edit_box'];
    $comment_edit_box = filter_var($comment_edit_box, FILTER_SANITIZE_STRING);

    $verify_comment = $conn->prepare("SELECT * FROM `comments` WHERE comment = ? AND id = ?");
    $verify_comment->execute([$comment_edit_box, $edit_comment_id]);

    if($verify_comment->rowCount() > 0){
        $message[] = 'comment already added!';
    }else{
        $update_comment = $conn->prepare("UPDATE `comments` SET comment = ? WHERE id = ?");
        $update_comment->execute([$comment_edit_box, $edit_comment_id]);
        $message[] = 'your comment edited successfully!';
    }
}

if(isset($_POST['delete_comment'])){
    $delete_comment_id = $_POST['comment_id'];
    $delete_comment_id = filter_var($delete_comment_id, FILTER_SANITIZE_STRING);
    $delete_comment = $conn->prepare("DELETE FROM `comments` WHERE id = ?");
    $delete_comment->execute([$delete_comment_id]);
    $message[] = 'comment deleted successfully!';
}


?>

<!DOCTYPE html>
<html lang="tr">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--=============== FAVICON ===============-->
<link rel="shortcut icon" href="<?=IMG_PATH;?>img/favicon.png" type="image/x-icon">

<!--=============== BOXICONS ===============-->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<script src="https://kit.fontawesome.com/1c71e95d0d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


<!--=============== SWIPER CSS ===============-->
<link rel="stylesheet" href="<?=CSS_PATH?>/swiper-bundle.min.css">

<!--=============== CSS ===============-->
<!-- <link rel="stylesheet" href="../assets/css/style2.scss"> -->
<link rel="stylesheet" href="<?=CSS_PATH?>/style.css">


<!-- Custom Css -->
<style>

    .switch-button {
        position: relative;
        height: 3rem;
        background:#ececec;
        overflow: hidden;
        dispLay: flex;
        align-items : center;
        border-radius : 4rem;
        cursor: pointer;
    }

    .switch-button:before {
        content: "";
        position: absolute;
        Left:-50%;
        top:-100%;
        height: 300%;
        width: 100%;
        background:linear-gradient(to top right,#702F4E,#164373);
        border-radius: 50%;
        transition: 0.25s;
    }

    .switch-item
    {
        position: relative;
        padding:3rem;
        color:#555;
        font-weight: 600;
        transition: 0.3s;


    }
    .switch-item:first-child
    {
        color:#FFF;

    }

    .switch-button.switch-active .switch-item:first-child
    {
        color: #555;
    }

    .switch-button.switch-active .switch-item:last-child
    {
        color: #FFF;
    }

    .switch-button.switch-active:before
    {
        left: 50%;
        background:linear-gradient(to top right,#F64373,#164373);

    }


    .editdiv
    {
    width: 650px; height:100px;  
    padding:10px;  
    border-top: 1px solid white;
    margin:auto;
    }

    @media screen and (max-width:820px)
    {
        .editdiv
        {
            width: 550px;
        }
    }

    @media screen and (max-width:710px)
    {
        .editdiv
        {
            width: 500px;
        }
    }   
     @media screen and (max-width:700px)
    {
        .editdiv
        {
            width: 400px;
        }
    } 
      @media screen and (max-width:550px)
    {
        .editdiv
        {
            width: 350px;
        }
    }
     @media screen and (max-width:460px)
    {
        .editdiv
        {
            width: 300px;
        }
    }





</style>

<title> Blog </title>
</head>

<!-- Header -->
<body>
<?php
include '../site/navbar.php';
?>


<br>

<link rel="stylesheet" href="<?=CSS_PATH;?>/blog.css">



    <!--=============== MAIN ===============-->
    <div class="row container" style="margin: auto;">
        <main class="main" style="margin:auto;">

            <div class="work__container container grid"></div>

            <!-- Ana Kutu Start-->
            <div class="row container " style="margin:auto; margin-top: 120px;">

             

                <!-- Posts Start-->
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 ">

                            <div class="container2">
                                <?php
                                $select_posts = $conn->prepare("SELECT * FROM `posts` WHERE status = ? AND id = ?");
                                $select_posts->execute(['active', $get_id]);
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
                                        <form action="" method="post">
                                            <input type="hidden" name="post_id" value="<?= $post_id; ?>">
                                            <input type="hidden" name="admin_id" value="<?= $fetch_posts['admin_id']; ?>">


                                            <div class="card text-center skills__content" >

                                                <div class="card-header">

                                                    <span style="float: left;">
                                                        <span class="badge" style="background-color: #0d6efd;"> <i class="fas fa-user"></i> &nbsp;<a style="color:white;" href="author_posts.php?author=<?= $fetch_posts['name']; ?>"><?= $fetch_posts['name']; ?></a></span>
                                                        <span class="badge text-bg-light"><?= $fetch_posts['date']; ?></span>
                                                    </span>
                                                    <br>




                                                    <h1 align="center">
                                                        <?= $fetch_posts['title']; ?>
                                                    </h1>


                                                </div>

                                                <div class="card-body">
                                                    <h5 class="card-title"></h5>
                                                    <p class="card-text">
                                                        <?php
                                                        if($fetch_posts['image'] != ''){ ?>
                                                            <img src="<?=SITE_URL;?>/uploaded_img/<?= $fetch_posts['image']; ?>" class="card-img-top" alt="" >
                                                            <?php
                                                        } ?>
                                                        <?= html_entity_decode($fetch_posts['content']); ?>
                                                    </p>
                                                </div>

                                                <div class="card-footer text-muted" style="display: flex; justify-content: space-between;">

                                                        <!--  Kategori -->
                                                        <div>       <a href="category.php?category=<?= $fetch_posts['category']; ?>" class="post-cat"> <i class="fas fa-tag"></i> <span><?= $fetch_posts['category']; ?></span></a>
  </div>
                                                        <div>        <a href="view_post.php?post_id=<?= $post_id; ?>"><i class='bx bx-message-square-dots' style="font-size: 30px;"></i><span>(<?= $total_post_comments; ?>)</span></a>

                                                        <!-- Yorum -->
                                                        <!-- Beğeni -->
                                                       
                                                        <button type="submit" name="like_post" style="background:transparent;"><i  class='bx bx-heart' style="font-size: 30px; margin-left:15px; color: #0d6efd;" ></i><span style="color: #0d6efd;">(<?= $total_post_likes; ?>)</span></button>
                                                     </div>
                                                </div>
                                            </div>



                                        </form>


                                        <?php
                                    }
                                }else{
                                    echo '<p class="empty" >Henüz blog paylaşılmadı!</p>';
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                </div>
                <!--  Posts Finish --->

                <!-- Yorum Bolumu Start-->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                            <section class="skills section" id="skills" >
                                <div style="align-items: center; justify-content: flex; width: 100%;  " class="skills__content">
                                <!--Yorum Card Start-->
                                <div class=" grid"  >


                                    <h2 align="center" style="color: #F8F4EA;">YORUMLAR</h2>


                                    <!-- Yorum Ekle -->
                                    <?php
                                    if($user_id != ''){
                                        $select_admin_id = $conn->prepare("SELECT * FROM `posts` WHERE id = ?");
                                        $select_admin_id->execute([$get_id]);
                                        $fetch_admin_id = $select_admin_id->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                    <div class="testimonial__card" >
                                        <h3 style="color: #CBEDD5;">Yorum Ekle</h3>

                                        <br>
                                        <div class="contact__form-div contact__form-area">
                                            <form action="" method="post">
                                                <input type="hidden" name="admin_id" value="<?= $fetch_admin_id['admin_id']; ?>">
                                                <input type="hidden" name="user_name" value="<?= $fetch_profile['name']; ?>">
                                            <label for="" class="contact__form-tag text-success" style="background: #151c28;"><h6><i class="fas fa-user" style="color: #77bef8;"></i> <a href="update.php" style="color:#77bef8;"><?= $fetch_profile['name']; ?> </a></h6></label>
                                            <textarea name="comment" id="" cols="30" placeholder="yorumunuzu yazın..." rows="10" class="contact__form-input" required></textarea>

                                        </div>
                                        &nbsp;
                                        <div style="float: right;" class="btn-group" role="group" aria-label="Basic mixed styles example">

                                            <button type="submit" value="add comment"  name="add_comment" style="background: #77bef8;" class="button" >Ekle</button>
                                            &nbsp;
                                        </div>
                                        </form>
                                        <?php
                                        }else{
                                            ?>
                                            <div class="alert alert-warning d-flex align-items-center" role="alert" style="background: #77bef8;">
                                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                                <div>
                                                    <p style="color: #0b111e;">yorumunuzu eklemek veya düzenlemek için lütfen giriş yapın</p>
                                                    <a href="../auth/login.php" class="btn btn-sm btn-danger">Giriş Yap</a>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <p> </p>
                                    </div>

                                    <!-- Yorum Güncelle-->
                                    <?php
                                    if(isset($_POST['open_edit_box'])){
                                        $comment_id = $_POST['comment_id'];
                                        $comment_id = filter_var($comment_id, FILTER_SANITIZE_STRING);
                                        ?>
                                    <div class="testimonial__card" style="background: #363062;">
                                        <h3 style="color: #CBEDD5;">Yorum Düzenle</h3>

                                        <br>
                                        <?php
                                        $select_edit_comment = $conn->prepare("SELECT * FROM `comments` WHERE id = ?");
                                        $select_edit_comment->execute([$comment_id]);
                                        $fetch_edit_comment = $select_edit_comment->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <div class="contact__form-div contact__form-area">
                                            <form action="" method="POST">
                                                <input type="hidden" name="edit_comment_id" value="<?= $comment_id; ?>">
                                            <label for="" class="contact__form-tag text-success" style="background: #363062;"><h6><i class="fas fa-user"></i> <a href="update.php">Gazi </a></h6></label>
                                            <textarea name="comment_edit_box"  cols="30" placeholder="yorumunuzu yazın..." rows="10" class="contact__form-input"><?= $fetch_edit_comment['comment']; ?></textarea>

                                        </div>
                                        &nbsp;
                                        <div style="float: right;" class="btn-group" role="group" aria-label="Basic mixed styles example">

                                            <button name="edit_comment" style="background: greenyellow;" type="submit" class="button btn-sm btn-warning">Güncelle</button>
                                            &nbsp;
                                            <button onclick="window.location.href = 'view_post.php?post_id=<?= $get_id; ?>';" style="background: red;" type="submit" class="button  btn-sm btn-danger">Sil</button>
                                        </div>
                                        </form>
                                        <p> </p>
                                    </div>
                                        <?php
                                    }
                                    ?>



                                    <h2>Gönderi Yorumları</h2>


                                 <?php
                                    $select_comments = $conn->prepare("SELECT * FROM `comments` WHERE post_id = ?");
                                    $select_comments->execute([$get_id]);
                                    if($select_comments->rowCount() > 0){
                                        while($fetch_comments = $select_comments->fetch(PDO::FETCH_ASSOC)){
                                            ?>

                                    <div style="display: flex; margin: auto;" >
                                        <div>
                                        
                                            <i class='bx bx-user' ></i> <span class="text-success"><?= $fetch_comments['user_name']; ?></span> , <span  class="text-warning"><?= $fetch_comments['date']; ?></span> <br>
                                            <div class="editdiv"  >
                                                <?= $fetch_comments['comment']; ?>
                                            </div>
                                            <br>
                                            <?php
                                                if($fetch_comments['user_id'] == $user_id){
                                            ?>

                                             <form action="" method="POST">
                                                <input type="hidden" name="comment_id" value="<?= $fetch_comments['id']; ?>">
                                                 <div style="float: right;" class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button style="background: red;" type="submit" name="open_edit_box" class="button  btn-sm btn-warning">Güncelle</button>
                                                &nbsp;
                                                <button style="background: greenyellow;" type="submit" name="delete_comment" onclick="return confirm('delete this comment?');" class="button btn-sm btn-danger">Sil</button>
                                            </div>

                                                 <br><br>
                                                 <hr>
                                            </form>


                                            <?php
                                                    }
                                            ?>

                                            <?php
                                            }?>

                                            <?php
                                            }else{
                                                echo ' <div class="alert alert-warning d-flex align-items-center" role="alert" style="color:#0b111e; background: #77bef8;">
                                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                                <div>
                                                    <p>henüz yorum eklenmedi!</p>
                                                </div>
                                            </div>';
                                            }
                                            ?>

                                        </div>


                                    







                                </div>

                                </div>
                                <!-- Yorum Card Finish -->




                            </section>





                        </div>
                    </div>
                </div>
                <!-- Kategori Bolumu Finish-->



            </div>
            <!-- Ana Kutu Finish-->


            <div class="container"></div>

            <!-- <div class="more-btn" style="text-align: center; margin-top:1rem;">
                <a href="posts.php" class="blog-post_cta">Tüm blogları gör</a>
            </div> -->

        </main>
    </div>





    <br><br>








<?php include '../site/footer.php'; ?>