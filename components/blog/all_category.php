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

                            <!--Kategori Card Start-->
                            <div class=" grid"  >

                                <div style="text-align: center; align-items: center; justify-content: flex; width: 100%;  " class="skills__content">
                                    <h3 class="skills__title">Kategoriler</h3>
                                    <table class="table ">
                                        <thead>
                                        <tr>
                                            
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row" style="color: white;">1</th>
                                            <td><a href="category.php?category=nature">C#(Console)</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="color: white;">2</th>
                                            <td><a href="category.php?category=education">C#(.NET)</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="color: white;">3</th>
                                            <td><a href="category.php?category=pets and animals">HTML</a></td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="color: white;">4</th>
                                            <td><a href="category.php?category=technology">CSS</a></td>
                                        </tr>



                                        <tr>
                                            <th scope="row" style="color: white;">6</th>
                                            <td><a href="category.php?category=fashion">Javascript</a></td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="color: white;">7</th>
                                            <td><a href="category.php?category=entertainment">Angular</a></td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="color: white;">8</th>
                                            <td><a href="category.php?category=movies">Laravel</a></td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="color: white;">10</th>
                                            <td><a href="category.php?category=gaming">Flutter</a></td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="color: white;">11</th>
                                            <td><a href="category.php?category=music">Donanım</a></td>
                                        </tr>


       
                     

                                        </tbody>
                                    </table>

                                </div>

                            </div>
                            <!-- Kategori Card Finish -->

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
        <br>


    </main>
</div>





<?php include '../site/footer.php'; ?>





