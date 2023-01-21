<?php
require_once '../../config/default.php';
include '../connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
    header('location:index.php');
};

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);

    if(!empty($name)){
        $update_name = $conn->prepare("UPDATE `users` SET name = ? WHERE id = ?");
        $update_name->execute([$name, $user_id]);
    }

    if(!empty($email)){
        $select_email = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
        $select_email->execute([$email]);
        if($select_email->rowCount() > 0){
            $message[] = 'email already taken!';
        }else{
            $update_email = $conn->prepare("UPDATE `users` SET email = ? WHERE id = ?");
            $update_email->execute([$email, $user_id]);
        }
    }

    $empty_pass = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
    $select_prev_pass = $conn->prepare("SELECT password FROM `users` WHERE id = ?");
    $select_prev_pass->execute([$user_id]);
    $fetch_prev_pass = $select_prev_pass->fetch(PDO::FETCH_ASSOC);
    $prev_pass = $fetch_prev_pass['password'];
    $old_pass = sha1($_POST['old_pass']);
    $old_pass = filter_var($old_pass, FILTER_SANITIZE_STRING);
    $new_pass = sha1($_POST['new_pass']);
    $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
    $confirm_pass = sha1($_POST['confirm_pass']);
    $confirm_pass = filter_var($confirm_pass, FILTER_SANITIZE_STRING);

    if($old_pass != $empty_pass){
        if($old_pass != $prev_pass){
            $message[] = 'old password not matched!';
        }elseif($new_pass != $confirm_pass){
            $message[] = 'confirm password not matched!';
        }else{
            if($new_pass != $empty_pass){
                $update_pass = $conn->prepare("UPDATE `users` SET password = ? WHERE id = ?");
                $update_pass->execute([$confirm_pass, $user_id]);
                $message[] = 'password updated successfully!';
            }else{
                $message[] = 'please enter a new password!';
            }
        }
    }

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

<title> Profil Güncelle </title>
</head>

<!-- Header -->
<body>

<!-- header section starts  -->
<?php include '../site/navbar.php'; ?>
<!-- header section ends -->




<br>





<link rel="stylesheet" href="<?=CSS_PATH;?>/blog.css">


<!--=============== MAIN ===============-->
<div class="row container" style="margin: auto;">
    <main class="main" style="margin:auto;">

        <div class="work__container container grid"></div>

        <!-- Ana Kutu Start-->
        <div class="row container " style="margin:auto;">

            <!-- Posts Start-->
            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">

                        <section class="skills section" id="skills" >
                            <h3 align="center" class="card-header text-warning">Profil Güncelle</h3>
                            <form  action="" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="text" name="name" placeholder="<?= $fetch_profile['name']; ?>" class="form-control" maxlength="50">

                                </div>
                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" name="email" placeholder="<?= $fetch_profile['email']; ?>" class="form-control" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">

                                </div>

                                <!-- Eski Şifre-->
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Eski Şifre</label>
                                    <input type="password" name="old_pass" placeholder="enter your old password" class="form-control" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                                </div>

                                <!-- Yeni Şifre-->
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Eski Şifre</label>
                                    <input type="password" name="new_pass" placeholder="enter your new password" class="form-control" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                                </div>

                                <!-- Şifre Onay-->
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Eski Şifre</label>
                                    <input type="password" name="confirm_pass" placeholder="confirm your new password" class="form-control" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                                </div>



                                <button style="float: right;" type="submit" name="submit" class="btn btn-warning">Güncelle</button>
                            </form>
                        </section>

                    </div>
                </div>
            </div>
            <!--  Posts Finish --->

        </div>
        <!-- Ana Kutu Finish-->


        <div class="container"></div>
        <br>



    </main>
</div>





<?php include '../site/footer.php';?>






