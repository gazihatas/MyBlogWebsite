<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/like_post.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>category</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->




<section class="categories">

   <h1 class="heading">post categories</h1>

   <div class="box-container">
      <div class="box"><span>01</span><a href="category.php?category=nature">C#(Console)</a></div>
      <div class="box"><span>02</span><a href="category.php?category=eduction">C#(.NET)</a></div>
      <div class="box"><span>03</span><a href="category.php?category=bunsiness">HTML</a></div>
      <div class="box"><span>04</span><a href="category.php?category=travel">CSS</a></div>
      <div class="box"><span>05</span><a href="category.php?category=news">Javascript</a></div>
      <div class="box"><span>06</span><a href="category.php?category=gaming">Angular</a></div>
      <div class="box"><span>07</span><a href="category.php?category=sports">Laravel</a></div>
      <div class="box"><span>08</span><a href="category.php?category=design">Flutter</a></div>
      <div class="box"><span>09</span><a href="category.php?category=fashion">Donanım</a></div>
   </div>

</section>










<?php include 'components/footer.php'; ?>







<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>