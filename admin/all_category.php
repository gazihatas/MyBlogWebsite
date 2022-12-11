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

   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->




<section class="categories">

   <h1 class="heading">Kategoriler</h1>

   <div class="box-container">
      <div class="box"><span>01</span><a href="category.php?category=nature">HTML</a></div>
      <div class="box"><span>02</span><a href="category.php?category=eduction">CSS</a></div>
      <div class="box"><span>03</span><a href="category.php?category=pets and animals">Javascript</a></div>
      <div class="box"><span>04</span><a href="category.php?category=technology">PHP</a></div>
      <div class="box"><span>05</span><a href="category.php?category=fashion">.NET</a></div>
      <div class="box"><span>06</span><a href="category.php?category=entertainment">GIT</a></div>
      <div class="box"><span>07</span><a href="category.php?category=movies">Python</a></div>
      <div class="box"><span>08</span><a href="category.php?category=gaming">Java</a></div>
      <div class="box"><span>09</span><a href="category.php?category=music">Design Patterns</a></div>
      <div class="box"><span>10</span><a href="category.php?category=sports">Donanım</a></div>
      <div class="box"><span>11</span><a href="category.php?category=news">SQL</a></div>
      <div class="box"><span>12</span><a href="category.php?category=travel">Oracle</a></div>
      <div class="box"><span>13</span><a href="category.php?category=comedy">Entity Framework Core(ORM)</a></div>
      <div class="box"><span>14</span><a href="category.php?category=design and development">C#(Console)</a></div>
      <div class="box"><span>15</span><a href="category.php?category=food and drinks">food and drinks</a></div>
      <div class="box"><span>16</span><a href="category.php?category=lifestyle">lifestyle</a></div>
      <div class="box"><span>17</span><a href="category.php?category=health and fitness">health and fitness</a></div>
      <div class="box"><span>18</span><a href="category.php?category=business">business</a></div>
      <div class="box"><span>19</span><a href="category.php?category=shopping">shopping</a></div>
      <div class="box"><span>20</span><a href="category.php?category=animations">animations</a></div>
   </div>

</section>










<?php include 'components/footer.php'; ?>







<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>