<?php

include '../connect.php';
require_once '../../config/default.php';
session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
};




if(isset($_POST['edit_comment'])){
    $edit_comment_id = $_POST['edit_comment_id'];
    $edit_comment_id = filter_var($edit_comment_id, FILTER_SANITIZE_STRING);
    $comment_edit_box = $_POST['comment_edit_box'];
    $comment_edit_box = filter_var($comment_edit_box, FILTER_SANITIZE_STRING);

    $verify_comment = $conn->prepare("SELECT * FROM `comments` WHERE comment = ? AND id = ?");
    $verify_comment->execute([$comment_edit_box, $edit_comment_id]);

    if($verify_comment->rowCount() > 0){
        $message[] = 'yorum zaten eklendi!';
    }else{
        $update_comment = $conn->prepare("UPDATE `comments` SET comment = ? WHERE id = ?");
        $update_comment->execute([$comment_edit_box, $edit_comment_id]);
        $message[] = 'yorumunuz başarıyla düzenlendi!';
    }
}

if(isset($_POST['delete_comment'])){
    $delete_comment_id = $_POST['comment_id'];
    $delete_comment_id = filter_var($delete_comment_id, FILTER_SANITIZE_STRING);
    $delete_comment = $conn->prepare("DELETE FROM `comments` WHERE id = ?");
    $delete_comment->execute([$delete_comment_id]);
    $message[] = 'yorum başarıyla silindi!';
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



    </style>

    <title> Yorumlar </title>
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
            <div class="row container " style="margin:auto;">





                <!-- Yorum Bolumu Start-->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                            <div class="skills section" id="skills" >
                                <div style="align-items: center; justify-content: flex; width: 100%;  " class="skills__content">
                                    <!--Yorum Card Start-->
                                    <div class=" grid"  >


                                        <h2 align="center" style="color: #F8F4EA;">YORUMLAR</h2>



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
                                                    <button onclick="window.location.href = 'view_post.php?post_id=<?= $get_id; ?>';" style="background: red;" type="button" class="button  btn-sm btn-danger">Sil</button>
                                                </div>
                                                </form>
                                                <p> </p>
                                            </div>
                                            <?php
                                        }
                                        ?>





                                        <div class="testimonial__card" style="background: #363062;">



                                            <h2 class="comment-title">senin yorumların</h2>
                                            <div class="user-comments-container">
                                                <?php
                                                $select_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
                                                $select_comments->execute([$user_id]);
                                                if($select_comments->rowCount() > 0){
                                                    while($fetch_comments = $select_comments->fetch(PDO::FETCH_ASSOC)){
                                                        ?>
                                                        <div class="show-comments">
                                                            <?php
                                                            $select_posts = $conn->prepare("SELECT * FROM `posts` WHERE id = ?");
                                                            $select_posts->execute([$fetch_comments['post_id']]);
                                                            while($fetch_posts = $select_posts->fetch(PDO::FETCH_ASSOC)){
                                                                ?>
                                                                <div class="post-title"> from : <span><?= $fetch_posts['title']; ?></span> <a href="view_post.php?post_id=<?= $fetch_posts['id']; ?>" >view post</a></div>
                                                                <?php
                                                            }
                                                            ?>
                                                            <div class="contact__form-div contact__form-area">
                                                                    <textarea name="comment_edit_box"  cols="30" placeholder="yorumunuzu yazın..." rows="10" class="contact__form-input"><?= $fetch_comments['comment']; ?></textarea>
                                                            </div>


                                                            <form action="" method="POST">
                                                                <input type="hidden" name="comment_id" value="<?= $fetch_comments['id']; ?>">
                                                                <div style="float: right;" class="btn-group" role="group" aria-label="Basic mixed styles example">

                                                                    <button name="open_edit_box" style="background: greenyellow;" type="submit" class="button btn-sm btn-warning">Güncelle</button>
                                                                    &nbsp;
                                                                    <button name="delete_comment"onclick="return confirm('delete this comment?');" style="background: red;" type="submit" class="button  btn-sm btn-danger">Sil</button>
                                                                </div>

                                                            </form>
                                                        </div>
                                                        <?php
                                                    }
                                                }else{
                                                    echo '<div class="alert alert-warning d-flex align-items-center" role="alert">
                                                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                                            <div>
                                                            henüz yorum eklenmemiş!
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

            <div class="more-btn" style="text-align: center; margin-top:1rem;">
                <a href="posts.php" class="blog-post_cta">Tüm blogları gör</a>
            </div>

        </main>
    </div>





    <br><br>








<?php include '../site/footer.php'; ?>