<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:admin_login.php');
}

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    if(!empty($name)){
        $select_name = $conn->prepare("SELECT * FROM `admin` WHERE name = ?");
        $select_name->execute([$name]);
        if($select_name->rowCount() > 0){
            $message[] = 'username already taken!';
        }else{
            $update_name = $conn->prepare("UPDATE `admin` SET name = ? WHERE id = ?");
            $update_name->execute([$name, $admin_id]);
        }
    }

    $empty_pass = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
    $select_old_pass = $conn->prepare("SELECT password FROM `admin` WHERE id = ?");
    $select_old_pass->execute([$admin_id]);
    $fetch_prev_pass = $select_old_pass->fetch(PDO::FETCH_ASSOC);
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
                $update_pass = $conn->prepare("UPDATE `admin` SET password = ? WHERE id = ?");
                $update_pass->execute([$confirm_pass, $admin_id]);
                $message[] = 'password updated successfully!';
            }else{
                $message[] = 'please enter a new password!';
            }
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile update</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/admin_style.css">
    <link rel="stylesheet" href="sweetalert.css">
</head>
<body>

<?php include '../components/admin_header.php' ?>

<!-- admin profile update section starts  -->

<section class="form-container">



    <form class="col-md-6" id="ayarformu" action="" method="post" onsubmit="return false;">
        <h1>Kurulum Sayfası</h1>

        <div class="mb-3">
            <label for="site_url" class="form-label">site_url</label>
            <input type="text" class="form-control"  value="<?=$arow->site_url;?>" name="site_url" id="site_url">
        </div>


        <div class="mb-3">
            <label for="site_aciklama" class="form-label">site_aciklama</label>
            <input type="text" class="form-control"  value="<?=$arow->site_aciklama;?>" name="site_aciklama" id="site_aciklama">
        </div>

        <div class="mb-3">
            <label for="site_kelimeler" class="form-label">site_kelimeler</label>
            <input type="text" class="form-control"  value="<?=$arow->site_kelimeler;?>" name="site_kelimeler" id="site_kelimeler">
        </div>

        <div class="mb-3">
            <label for="google_dogrulama_kodu" class="form-label">google_dogrulama_kodu</label>
            <input type="text" class="form-control"  value="<?=$arow->google_dogrulama_kodu;?>"  name="google_dogrulama_kodu" id="google_dogrulama_kodu">
        </div>

        <div class="mb-3">
            <label for="yandex_dogrulama_kodu" class="form-label">yandex_dogrulama_kodu</label>
            <input type="text" class="form-control"   value="<?=$arow->yandex_dogrulama_kodu;?>" name="yandex_dogrulama_kodu" id="yandex_dogrulama_kodu">
        </div>

        <div class="mb-3">
            <label for="bing_dogrulama_kodu" class="form-label">bing_dogrulama_kodu</label>
            <input type="text" class="form-control"  value="<?=$arow->bing_dogrulama_kodu;?>" name="bing_dogrulama_kodu" id="bing_dogrulama_kodu">
        </div>

        <div class="mb-3">
            <label for="analytics_kodu" class="form-label">analytics_kodu</label>
            <input type="text" class="form-control"   value="<?=$arow->analytics_kodu;?>" name="analytics_kodu" id="analytics_kodu">
        </div>



        <button type="submit" class="btn btn-primary" onclick="ayar();"  name="gonder">Gönder</button>
    </form>


</section>

<!-- admin profile update section ends -->









<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

<script src="bootstrap.bundle.min.js"></script>
<script src="sweetalert.min.js"></script>
<script src="jquery-3.6.3.min.js"></script>
<script>



    function ayar(){
        let deger = $("#ayarformu").serialize();
        $.ajax({
            type: "POST",
            url: "api.php",
            data: deger,
            success: function (sonuc) {
                if($.trim(sonuc) == "bos"){
                    swal("Hata","Lütfen tüm alanları doldurun!","error");
                }else if ($.trim(sonuc) == "hata"){
                    swal("Hata","Sistem hatası oluştu","error");
                }else if ($.trim(sonuc) == "basarili"){
                    swal("Güncelleme Başarılı","Ayarlar   başarılı bir şekilde günvellendi","success");
                }
            }
        });
    }
</script>
</body>
</html>


