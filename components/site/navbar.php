


<link rel="stylesheet" href="<?=CSS_PATH?>/style.css">

<style>
    
.navden ul li
{
  margin: 10px;
  
  margin:0px;
  
}

.dropdown-menu
{
    --bs-dropdown-link-hover-bg:none !important;
    margin-bottom:15px !important;
    margin-right:30px !important;
}

</style>
<!--=============== HEADER ===============-->
<header class="header" id="header">
    <nav class="nav container">
        <a href="" class="nav__logo">Onur</a>
        <!-- <div class="home__buttons">
            <a href="#home" class="button portfoliobutton">
                PORTFOLIO
            </a>
            <a href="../home.php" class="button button--ghost">BLOG</a>
        </div> -->


        <!-- <div class="pricing-table-container1"> -->
            <!-- <div class="pricing-header1" style="display: flex;"> -->

                <!-- <div class="plans-switch-container1" >
                    <a href="<?=SITE_URL;?>"> <span class="monthly1" style="color:white;">PORTFOLİO &nbsp;</span> </a>
                </div>
                <div class="plans-switch-container1">
                    <a href="../blog/index.php"> <span class="monthly1"  style="color:white;">BLOG</span></a>
                </div> -->

                <div class="navden" >
            <ul >
                <li  class="blogio" >  <a class="pasif" href="<?=SITE_URL;?>"> <i class='bx bx-user' ></i>  PORTFOLİO</a> </li>
                <li  class="portfolio"> <a class="aktif" href="<?=SITE_URL?>/components/blog/">   <i class='bx bx-book-bookmark'></i> BLOG </a></li>



            </ul>
        </div>
            <!-- </div> -->


        <!-- </div> -->
        <div class="close-btn">
            <span class="fas fa-times"></span>
        </div>

        <div class="wrapper">
            <div class="search-data">
                <input type="text" required>
                <div class="line"></div>
                <label >Type to search...</label>
                <span class="fas fa-search"></span>
            </div>

        </div>

        <div class="nav__menu">
            <ul class="nav__list">


                <li class="nav__item">
                    <a href="index.php" class="nav__link active-link">   <i class='bx bx-home'></i>
                    </a>
                </li>

                <!-- Kullanıcı -->
                <li class="nav__item dropdown" >
                    <a class="nav__link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bx-user' ></i>
                    </a>
                    <ul class="dropdown-menu" style="background:#1c2536; " aria-labelledby="navbarDropdown">
                        <?php
                        $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
                        $select_profile->execute([$user_id]);

                        if($select_profile->rowCount() > 0){
                            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <p class="name" style="color:white;"><i class="fas fa-user"></i> <?= $fetch_profile['name']; ?></p>
                            <li><a class="dropdown-item" href="update.php"  style="color:white;">Profili Güncelle</a></li>
                            <li>
                                <a  style="color:white;" class="dropdown-item" href="user_logout.php" onclick="return confirm('logout from this website?');" >Çıkış Yap</a>
                            </li>
                            <?php
                        }else{
                            ?>
                            <!--<li><hr class="dropdown-divider"></li>-->
                            <li><a  style="color:white;" class="dropdown-item" href="<?=USER_LOGIN;?>">Giriş Yap</a></li>
                            <?php
                        }
                        ?>

                    </ul>
                </li>




              
                <!-- <form action="search.php" method="POST" class="search-form">
                    <input type="text" name="search_box" class="box" maxlength="100" placeholder="search for blogs" required>
                    <button type="submit" class="fas fa-search" name="search_btn"></button>
                </form>
                  

           
                <form action="search.php" method="POST" class="search-form">
                    <input type="text" name="search_box" class="box" maxlength="100" placeholder="search for blogs" required>
                    <button type="submit" class="fas fa-search" name="search_btn"></button>
                </form> -->

                <!-- <div class="icons">
                    <div id="menu-btn" class="fas fa-bars"></div>
                    <div id="search-btn" class="fas fa-search"></div>
                    <div id="user-btn" class="fas fa-user"></div>
                </div>
                    -->
              <li class="nav__item">
                    <a href="#work" class="nav__link">

                        <div class="search-btn">
                            <span class="fas fa-search"></span>
                        </div>
                    </a>
              </li> 
             

               
                <!-- <li class="nav__item dropdown">
                    <a class="nav__link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='fas fa-search'></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <form action="../blog/search.php" method="POST" class="search-form">
                            <input type="text" name="search_box" class="box" maxlength="100" placeholder="search for blogs" required>
                            <button type="submit" class="dropdown-item"  name="search_btn">Ara</button>
                        </form>
                    </ul>
                </li> -->



                <!-- Kategoriler -->
                <li class="nav__item dropdown">
                    <a class="nav__link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bx-menu'></i>
                    </a>
                    <ul class="dropdown-menu" style="background: #1c2536;" aria-labelledby="navbarDropdown">
                        <a style="color:white;" class="dropdown-item" href="index.php">Ana Sayfa</a>
                        <a  style="color:white;"class="dropdown-item" href="all_category.php"> Kategoriler</a> 
                        <a style="color:white;" class="dropdown-item" href="posts.php">Gönderiler</a>
                        <a style="color:white;" class="dropdown-item" href="authors.php">Yazarlar</a>

                        <!--<li><hr class="dropdown-divider"></li>-->
                        <li><a style="color:white;"  class="dropdown-item" href="<?=USER_LOGIN;?>">Giriş Yap & Kayıt Ol</a></li>
                    </ul>
                </li>

                <!-- Çıkış -->
                <li class="nav__item">
                    <a href="#contact" class="nav__link">
                        <i class='bx bx-log-in'></i>
                    </a>
                </li>

            </ul>
        </div>

        <!-- theme changing button  -->
        <i class='bx bx-moon change-theme' id="theme-button" ></i>


    </nav>

    <?php
    if(isset($message)){
        foreach($message as $message){
            echo '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h1 align="center">'.$message.'</h1>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';

        }
    }
    ?>


</header>




<script>
    $(".search-btn").click(function(){
        $(".wrapper").addClass("active");
        // $(this).css("display", "none");
        $(".search-data").fadeIn(500);
        $(".close-btn").fadeIn(500);
        $(".search-data .line").addClass("active");
        setTimeout(function(){
            $("input").focus();
            $(".search-data label").fadeIn(500);
            $(".search-data span").fadeIn(500);
        }, 800);
    });
    $(".close-btn").click(function(){
        $(".wrapper").removeClass("active");
        $(".search-btn").fadeIn(800);
        $(".search-data").fadeOut(500);
        $(".close-btn").fadeOut(500);
        $(".search-data .line").removeClass("active");
        $("input").val("");
        $(".search-data label").fadeOut(500);
        $(".search-data span").fadeOut(500);
    });
</script>
   