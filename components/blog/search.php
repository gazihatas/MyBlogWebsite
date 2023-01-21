<?php
include '../../config/default.php';
include '../connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
};

include '../like_post.php';

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
        <div class="row container " style="margin:auto;">


            <?php
            if(isset($_POST['search_box']) OR isset($_POST['search_btn'])){
                ?>
            <!-- Posts Start-->
            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">

                        <div class="container2" >
                            <h2>Post</h2>
                            <?php
                            $search_box = $_POST['search_box'];
                            $select_posts = $conn->prepare("SELECT * FROM `posts` WHERE title LIKE '%{$search_box}%' OR category LIKE '%{$search_box}%' AND status = ?");
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
                                        <input type="hidden" name="post_id" value="<?= $post_id; ?>">
                                        <input type="hidden" name="admin_id" value="<?= $fetch_posts['admin_id']; ?>">


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

                                                    <span class="badge text-bg-success"> <i class="fas fa-user"></i> &nbsp;<a href="author_posts.php?author=<?= $fetch_posts['name']; ?>"><?= $fetch_posts['name']; ?></a></span>
                                                    <span class="badge text-bg-light"><?= $fetch_posts['date']; ?></span>
                                                </div>


                                                <div class="icons">


                                                </div>
                                                <hr>
                                                <h1 class="card-title text-warning"><?= $fetch_posts['title']; ?></h1>
                                                <p class="blog-post_text"><?= substr(html_entity_decode($fetch_posts['content']),0,250   ); ?>...</p>
                                                <hr>
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
                                echo '<div class="alert alert-warning" role="alert">
                      Henüz blog paylaşılmadı!
                    </div>';
                            }
                            ?>

                        </div>

                    </div>
                </div>
            </div>
            <!--  Posts Finish --->
            <?php
            }else{
                echo '<div class="alert alert-warning" role="alert">
                      bir şey arayın!
                    </div>';
            }
            ?>

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

