<?php

require_once '../config/default.php';

include '../components/connect.php';

session_start();

function dataready($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:admin_login.php');
}

if(isset($_POST['publish'])){

    $name = $_POST['name'];
    //$name = filter_var($name, FILTER_SANITIZE_STRING);
    $title = $_POST['title'];
    //$title = filter_var($title, FILTER_SANITIZE_STRING);
    $content =  dataready($_POST['content']);
    //$content = filter_var($content, FILTER_SANITIZE_STRING);
    $category = $_POST['category'];
    //$category = filter_var($category, FILTER_SANITIZE_STRING);
    $status = 'active';

    $image = $_FILES['image']['name'];
    //$image = filter_var($image, FILTER_SANITIZE_STRING);
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../uploaded_img/'.$image;

    $select_image = $conn->prepare("SELECT * FROM `posts` WHERE image = ? AND admin_id = ?");
    $select_image->execute([$image, $admin_id]);



    if(isset($image)){
        if($select_image->rowCount() > 0 AND $image != ''){
            $message[] = 'image name repeated!';
        }elseif($image_size > 2000000){
            $message[] = 'images size is too large!';
        }else{
            move_uploaded_file($image_tmp_name, $image_folder);
        }
    }else{
        $image = '';
    }

    if($select_image->rowCount() > 0 AND $image != ''){
        $message[] = 'please rename your image!';
    }else{
        $insert_post = $conn->prepare("INSERT INTO `posts`(admin_id, name, title, content, category, image, status) VALUES(?,?,?,?,?,?,?)");
        $insert_post->execute([$admin_id, $name, $title, $content, $category, $image, $status]);
        $message[] = 'post published!';
    }

}

if(isset($_POST['draft'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $title = $_POST['title'];
    $title = filter_var($title, FILTER_SANITIZE_STRING);
    $content =  dataready($_POST['content']);
    $content = filter_var($content, FILTER_SANITIZE_STRING);
    $category = $_POST['category'];
    $category = filter_var($category, FILTER_SANITIZE_STRING);
    $status = 'deactive';

    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../uploaded_img/'.$image;

    $select_image = $conn->prepare("SELECT * FROM `posts` WHERE image = ? AND admin_id = ?");
    $select_image->execute([$image, $admin_id]);

    if(isset($image)){
        if($select_image->rowCount() > 0 AND $image != ''){
            $message[] = 'image name repeated!';
        }elseif($image_size > 2000000){
            $message[] = 'images size is too large!';
        }else{
            move_uploaded_file($image_tmp_name, $image_folder);
        }
    }else{
        $image = '';
    }

    if($select_image->rowCount() > 0 AND $image != ''){
        $message[] = 'please rename your image!';
    }else{
        $insert_post = $conn->prepare("INSERT INTO `posts`(admin_id, name, title, content, category, image, status) VALUES(?,?,?,?,?,?,?)");
        $insert_post->execute([$admin_id, $name, $title, $content, $category, $image, $status]);
        $message[] = 'Taslak Kayıt Edildi!';
    }

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Gönderiler</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">


   <!-- <script src="//cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script> -->
   
</head>
<body>


<?php include '../components/admin_header.php' ?>

<section class="post-editor">

   <h1 class="heading">add new post</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="name" value="<?= $fetch_profile['name']; ?>">
      <p>Gönderi Başlığı <span>*</span></p>
      <input type="text" name="title" maxlength="100" required placeholder="add post title" class="box">
      <!-- Content--->
      <p>Göndeir İçeriği <span>*</span></p>
      <textarea id="editor" name="content" class="box" ></textarea> 
       
      <p>Gönderi Kategorisi <span>*</span></p>
      <select name="category" class="box" required>
         <option value="" selected disabled>-- Kategori Seç * </option>
         <option value="nature">C#(Console)</option>
         <option value="education">C#(.NET)</option>
         <option value="business">HTML</option>
         <option value="travel">CSS</option>
         <option value="news">Javascript</option>
         <option value="gaming">Angular</option>
         <option value="sports">Laravel</option>
         <option value="design">Flutter</option>
         <option value="fashion">Donanım</option>
      </select>
      <p>Gönderi Resmi</p>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png, image/webp">
      <div class="flex-btn">
         <input type="submit" value="publish post" name="publish" class="btn">
         <input type="submit" value="save draft" name="draft" class="option-btn">
      </div>
   </form>

</section>



<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>
<script src="<?=CK_EDITOR_PATH;?>/ckeditor.js"></script>
<script src="<?=CK_FINDER_PATH;?>/ckfinder.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<script>
var editor = CKEDITOR.replace('editor')
CKFinder.setupCKEditor(editor);


</script>




</body>
</html>