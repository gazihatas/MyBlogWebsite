<?php
require_once('../site/header.php');
require_once('../site/navbar.php');
?>



    <link rel="stylesheet" href="<?=CSS_PATH;?>/blog.css">
    <style>
        .container2 h2
        {
        letter-spacing: 1px;
        font-size: 50px;
        color:#6968aa;
        padding: 10px;
        border: 2px dashed #0181a0;
        text-transform: uppercase;
        display: inline-block;
        cursor: pointer;
        text-align: center;
        margin:auto;
        text-align:center;
        justify-content:center;
        margin-left:350px;
        }

        .logoutButton {
  --figure-duration: 100ms;
  --transform-figure: none;
  --walking-duration: 100ms;
  --transform-arm1: none;
  --transform-wrist1: none;
  --transform-arm2: none;
  --transform-wrist2: none;
  --transform-leg1: none;
  --transform-calf1: none;
  --transform-leg2: none;
  --transform-calf2: none;
  background: none;
  border: 0;
  color: #f4f7ff;
  cursor: pointer;
  display: block;
  font-family: 'Quicksand', sans-serif;
  font-size: 14px;
  font-weight: 500;
  height: 40px;
  outline: none;
  padding: 0 0 0 20px;
  perspective: 100px;
  position: relative;
  text-align: left;
  width: 130px;
  -webkit-tap-highlight-color: transparent;
}

.logoutButton::before {
  background-color: #1f2335;
  border-radius: 5px;
  content: '';
  display: block;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  transform: none;
  transition: transform 50ms ease;
  width: 100%;
  z-index: 2;
}
.logoutButton:hover .door {
  transform: rotateY(20deg);
}
.logoutButton:active::before {
  transform: scale(0.96);
}

.logoutButton:active .door {
  transform: rotateY(28deg);
}
.logoutButton.clicked::before {
  transform: none;
}
.logoutButton.clicked .door {
  transform: rotateY(35deg);
}
.logoutButton.door-slammed .door {
  transform: none;
  transition: transform 100ms ease-in 250ms;
}
.logoutButton.falling {
  animation: shake 200ms linear;
}
.logoutButton.falling .bang {
  animation: flash 300ms linear;
}

.logoutButton.falling .figure {
  animation: spin 1000ms infinite linear;
  bottom: -1080px;
  opacity: 0;
  right: 1px;
  transition: transform calc(var(--figure-duration) * 1ms) linear, bottom calc(var(--figure-duration) * 1ms) cubic-bezier(0.7, 0.1, 1, 1) 100ms, opacity calc(var(--figure-duration) * 0.25ms) linear calc(var(--figure-duration) * 0.75ms);
  z-index: 1;
}
.logoutButton--light::before {
  background-color: #f4f7ff;
}
.logoutButton--light .button-text {
  color: #1f2335;
}

.logoutButton--light .door, .logoutButton--light .doorway {
  fill: #1f2335;
}
.button-text {
  color: #f4f7ff;
  font-weight: 500;
  position: relative;
  z-index: 10;
}
svg {
  display: block;
  position: absolute;
}

.figure {
  bottom: 5px;
  fill: #4371f7;
  right: 18px;
  transform: var(--transform-figure);
  transition: transform calc(var(--figure-duration) * 1ms) cubic-bezier(0.2, 0.1, 0.8, 0.9);
  width: 30px;
  z-index: 4;
}
.door, .doorway {
  bottom: 4px;
  fill: #f4f7ff;
  right: 12px;
  width: 32px;
}
.door {
  transform: rotateY(20deg);
  transform-origin: 100% 50%;
  transform-style: preserve-3d;
  transition: transform 200ms ease;
  z-index: 5;
}
.door path {
  fill: #4371f7;
  stroke: #4371f7;
  stroke-width: 4;
}
.doorway {
  z-index: 3;
}
.bang {
  opacity: 0;
}
.arm1, .wrist1, .arm2, .wrist2, .leg1, .calf1, .leg2, .calf2 {
  transition: transform calc(var(--walking-duration) * 1ms) ease-in-out;
}
.arm1 {
  transform: var(--transform-arm1);
  transform-origin: 52% 45%;
}
.wrist1 {
  transform: var(--transform-wrist1);
  transform-origin: 59% 55%;
}
.arm2 {
  transform: var(--transform-arm2);
  transform-origin: 47% 43%;
}
.wrist2 {
  transform: var(--transform-wrist2);
  transform-origin: 35% 47%;
}
.leg1 {
  transform: var(--transform-leg1);
  transform-origin: 47% 64.5%;
}
.calf1 {
  transform: var(--transform-calf1);
  transform-origin: 55.5% 71.5%;
}
.leg2 {
  transform: var(--transform-leg2);
  transform-origin: 43% 63%;
}
.calf2 {
  transform: var(--transform-calf2);
  transform-origin: 41.5% 73%;
}
@keyframes spin {
  from {
    transform: rotate(0deg) scale(0.94);
  }
  to {
    transform: rotate(359deg) scale(0.94);
  }
}
@keyframes shake {
  0% {
    transform: rotate(-1deg);
  }
  50% {
    transform: rotate(2deg);
  }
  100% {
    transform: rotate(-1deg);
  }
}
@keyframes flash {
  0% {
    opacity: 0.4;
  }
  100% {
    opacity: 0;
  }
}

        .light-theme .container .text-center
            {
            box-shadow: 0 2px 16px hsla(var(--second-hue), 48%, 8%, .8);
            }
            .light-theme .text-center
            {
                background: #77bef8;
            }

    .blog-post_info
    {
        width:550px;
    }
        @media screen and (max-width:820px)
    {
       .container2 h2
       {
            margin-left:250px;
       }
    }

    @media screen and (max-width:710px)
    {
        .container2 h2
       {
            margin-left:220px;
       }
    }
     @media screen and (max-width:700px)
    {
        .container2 h2
       {
            margin-left:200px;
       }

       .blog-post_info
       {
        width: 430px;
       }
    }
      @media screen and (max-width:550px)
    {
        .container2 h2
       {
            margin-left:150px;
       }

       .blog-post_info
       {
        width: 400px;
       }
    }
     @media screen and (max-width:460px)
    {
        .container2 h2
       {
            margin-left:120px;
       }
       .blog-post_info
       {
        width: 330px;
       }
    }
    </style>


            <!--=============== MAIN ===============-->
            <div class="row container" style="margin: auto;">
                <main class="main" style="margin:auto;">

                    <div class="work__container container grid"></div>

                    <!-- Ana Kutu Start-->
                    <div class="row container " style="margin:auto;">
                        <!-- Bilgi Kart & Login/Register Start-->
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="row" style="margin:auto;">
                                <div class="col-lg-12 col-md-12 col-sm-12 ">



                                    <!-- Bilgi Kart & Login/Register Alanı--->
                                    <section class="skills section" id="skills" style="top: 0;" >

                                        <!-- Bilgi Kart & Login/Register--->
                                        <div class=" grid">

                                            <div style="text-align: center; align-items: center; justify-content: flex; width: 100%; " class="skills__content">

                                                <?php
                                                $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
                                                $select_profile->execute([$user_id]);
                                                if($select_profile->rowCount() > 0){
                                                    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                                                    $count_user_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
                                                    $count_user_comments->execute([$user_id]);
                                                    $total_user_comments = $count_user_comments->rowCount();
                                                    $count_user_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
                                                    $count_user_likes->execute([$user_id]);
                                                    $total_user_likes = $count_user_likes->rowCount();
                                                    ?>
                                                    <p> Hoşgeldin <span class="badge text-success"><?= $fetch_profile['name']; ?></span></p>
                                                    <p>Yorum sayın : <span><?= $total_user_comments; ?></span></p>
                                                    <p>Beğenilmiş blog sayısı : <span><?= $total_user_likes; ?></span></p>
                                                    <a href="update.php" class="button" style="display:block;">Profili güncelle</a>
                                                    <div class="flex-btn">
                                                        <a href="user_likes.php" class="button" style="margin-top: 10px; display:block;">Beğeniler</a>
                                                        <a href="user_comments.php" class="button"  style="margin-top: 10px; display: block;">Yorumlar</a>
                                                        <div class="background background--light " style="margin: auto; display: flex; justify-content: center; margin-top: 10px;" >
                    <button class="logoutButton logoutButton--dark"  id="myButton">
                      <svg class="doorway" viewBox="0 0 100 100">
                        <path d="M93.4 86.3H58.6c-1.9 0-3.4-1.5-3.4-3.4V17.1c0-1.9 1.5-3.4 3.4-3.4h34.8c1.9 0 3.4 1.5 3.4 3.4v65.8c0 1.9-1.5 3.4-3.4 3.4z" />
                        <path class="bang" d="M40.5 43.7L26.6 31.4l-2.5 6.7zM41.9 50.4l-19.5-4-1.4 6.3zM40 57.4l-17.7 3.9 3.9 5.7z" />
                      </svg>
                      <svg class="figure" viewBox="0 0 100 100">
                        <circle cx="52.1" cy="32.4" r="6.4" />
                        <path d="M50.7 62.8c-1.2 2.5-3.6 5-7.2 4-3.2-.9-4.9-3.5-4-7.8.7-3.4 3.1-13.8 4.1-15.8 1.7-3.4 1.6-4.6 7-3.7 4.3.7 4.6 2.5 4.3 5.4-.4 3.7-2.8 15.1-4.2 17.9z" />
                        <g class="arm1">
                          <path d="M55.5 56.5l-6-9.5c-1-1.5-.6-3.5.9-4.4 1.5-1 3.7-1.1 4.6.4l6.1 10c1 1.5.3 3.5-1.1 4.4-1.5.9-3.5.5-4.5-.9z" />
                          <path class="wrist1" d="M69.4 59.9L58.1 58c-1.7-.3-2.9-1.9-2.6-3.7.3-1.7 1.9-2.9 3.7-2.6l11.4 1.9c1.7.3 2.9 1.9 2.6 3.7-.4 1.7-2 2.9-3.8 2.6z" />
                        </g>
                        <g class="arm2">
                          <path d="M34.2 43.6L45 40.3c1.7-.6 3.5.3 4 2 .6 1.7-.3 4-2 4.5l-10.8 2.8c-1.7.6-3.5-.3-4-2-.6-1.6.3-3.4 2-4z" />
                          <path class="wrist2" d="M27.1 56.2L32 45.7c.7-1.6 2.6-2.3 4.2-1.6 1.6.7 2.3 2.6 1.6 4.2L33 58.8c-.7 1.6-2.6 2.3-4.2 1.6-1.7-.7-2.4-2.6-1.7-4.2z" />
                        </g>
                        <g class="leg1">
                          <path d="M52.1 73.2s-7-5.7-7.9-6.5c-.9-.9-1.2-3.5-.1-4.9 1.1-1.4 3.8-1.9 5.2-.9l7.9 7c1.4 1.1 1.7 3.5.7 4.9-1.1 1.4-4.4 1.5-5.8.4z" />
                          <path class="calf1" d="M52.6 84.4l-1-12.8c-.1-1.9 1.5-3.6 3.5-3.7 2-.1 3.7 1.4 3.8 3.4l1 12.8c.1 1.9-1.5 3.6-3.5 3.7-2 0-3.7-1.5-3.8-3.4z" />
                        </g>
                        <g class="leg2">
                          <path d="M37.8 72.7s1.3-10.2 1.6-11.4 2.4-2.8 4.1-2.6c1.7.2 3.6 2.3 3.4 4l-1.8 11.1c-.2 1.7-1.7 3.3-3.4 3.1-1.8-.2-4.1-2.4-3.9-4.2z" />
                          <path class="calf2" d="M29.5 82.3l9.6-10.9c1.3-1.4 3.6-1.5 5.1-.1 1.5 1.4.4 4.9-.9 6.3l-8.5 9.6c-1.3 1.4-3.6 1.5-5.1.1-1.4-1.3-1.5-3.5-.2-5z" />
                        </g>
                      </svg>
                      <svg class="door" viewBox="0 0 100 100">
                        <path d="M93.4 86.3H58.6c-1.9 0-3.4-1.5-3.4-3.4V17.1c0-1.9 1.5-3.4 3.4-3.4h34.8c1.9 0 3.4 1.5 3.4 3.4v65.8c0 1.9-1.5 3.4-3.4 3.4z" />
                        <circle cx="66" cy="50" r="3.7" />
                      </svg>
                      <span class="button-text" > <a>  Log Out</a></span>
                    </button>
                  </div>
                    
                                                    </div>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <h3 class="skills__title">Giriş Yap yada Kaydol!</h3>
                                                    <a href="../auth/login.php" class="button">Giriş Yap</a>
                                                    <a href="../auth/login.php"  class="button" style="margin-top: 10px; ">Kayıt Ol</a>

                                                    <?php
                                                }
                                                ?>

                                            </div>

                                        </div>
                                        <!-- Kart Finish -->

                                    </section>
                                </div>
                            </div>
                        </div>
                        <!-- Bilgi Kart & Login/Register Finish-->

                        <!-- Yazar Bolumu Start-->
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <section class="skills section" id="skills" >

                                        <!-- Yazar Start-->
                                        <div class=" grid container"    >
                                            <div style="text-align: center; align-items: center; justify-content: flex; width: 100%;  " class="skills__content">
                                                <h3 class="skills__title">Yazarlar</h3>

                                                <?php
                                                $select_authors = $conn->prepare("SELECT DISTINCT name FROM `admin` LIMIT 10");
                                                $select_authors->execute();
                                                if($select_authors->rowCount() > 0){
                                                    while($fetch_authors = $select_authors->fetch(PDO::FETCH_ASSOC)){
                                                        ?>
                                                        <a href="author_posts.php?author=<?= $fetch_authors['name']; ?>" class="button"><?= $fetch_authors['name']; ?></a>
                                                        <?php
                                                    }
                                                }else{
                                                    echo '<p class="empty">Henüz blog paylaşılmadı!</p>';
                                                }
                                                ?>

                                            </div>
                                        </div>
                                        <!-- Yazar Finish -->
                                    </section>


                                </div>
                            </div>
                        </div>
                        <!-- Yazar Bolumu Finish-->

                        <!-- Kategori Bolumu Start-->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <section class="skills section" id="skills" >

                                        <!--Kategori Card Start-->
                                        <div class=" grid"  >

                                            <div style="text-align: center; align-items: center; justify-content: flex; width: 100%;  " class="skills__content">
                                                <h3 class="skills__title">Kategoriler</h3>
                                                <a href="category.php?category=nature"  class="button" style="margin-top: 10px; ">C#(Console)</a>
                                                <a href="category.php?category=education"  class="button" style="margin-top: 10px; "> C#(.NET)</a>
                                                <a href="category.php?category=business"  class="button" style="margin-top: 10px; ">HTML</a>
                                                <a href="category.php?category=travel"  class="button" style="margin-top: 10px; ">CSS</a>
                                                <a href="category.php?category=news"  class="button" style="margin-top: 10px; ">Javascript</a>
                                                <a href="category.php?category=gaming"  class="button" style="margin-top: 10px; ">Angular</a>
                                                <a href="category.php?category=sports"  class="button" style="margin-top: 10px; ">Laravel</a>
                                                <a href="category.php?category=design"  class="button" style="margin-top: 10px; ">Flutter</a>
                                                <a href="category.php?category=fashion"  class="button" style="margin-top: 10px; ">Donanım</a>
                                                <a href="all_category.php"  class="button" style="margin-top: 10px; ">Hepsini gör</a>
                                            </div>

                                        </div>
                                        <!-- Kategori Card Finish -->

                                    </section>

                                </div>
                            </div>
                        </div>
                        <!-- Kategori Bolumu Finish-->

                        <!-- Posts Start-->
                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ">




                                    <div class="container2" >
                                       <div> <h2
                                       >POST</h2> </div>

                                        <?php
                                        $select_posts = $conn->prepare("SELECT * FROM `posts` WHERE status = ?");
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
                                                                <img src="<?=SITE_URL;?>/uploaded_img/<?= $fetch_posts['image']; ?>"  alt="" >
                                                                <?php
                                                            } ?>
                                                        </div>


                                                        <div class="blog-post_info" >

                                                            <!-- <div class="blog-post_date" >

                                                                <span class="badge "> <i class="fas fa-user"></i> &nbsp;<a style="color:#77bef8; " href="author_posts.php?author=<?= $fetch_posts['name']; ?>"><?= $fetch_posts['name']; ?></a></span>
                                                                <span class="badge "><?= $fetch_posts['date']; ?></span>
                                                            </div> -->


                                                            <div class="icons">


                                                            </div>

                                                            <h1 class="card-title text-warning"><?= $fetch_posts['title']; ?></h1>
                                                            <p class="blog-post_text"><?= substr(html_entity_decode($fetch_posts['content']),0,250   ); ?>...</p>

                                                            <div style="display: flex; justify-content: space-between;">
                                                                <div  style="align-items: end;" >
                                                                    <a href="view_post.php?post_id=<?= $post_id; ?>"class="blog-post_cta">Daha Fazla Oku</a>
                                                                </div>
                                                                <div style=" margin: 15px; display: flex;">
                                                                    <!--  Kategori -->
                                                                    <!-- <a href="category.php?category=" class="post-cat"> <i class="fas fa-tag"></i> <span><?= $fetch_posts['category']; ?></span></a> -->
                                                                    <!-- <?= $fetch_posts['category']; ?> -->
                                                                    <!-- Yorum -->
                                                                    <div> <a href="view_post.php?post_id=<?= $post_id; ?>"><i class='bx bx-message-square-dots' style="font-size: 30px; color:#77bef8;"></i><span  style="color:#77bef8;">(<?= $total_post_comments; ?>)</span></a> </div>
                                                                    <!-- Beğeni -->
                                                                 <div> <i  class='bx bx-heart' style="font-size: 30px;  margin-left:15px; color:#77bef8; "></i><span  style="color: #77bef8;">(<?= $total_post_likes; ?>)</span> </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- Post Finish -->

                                                </form>
                                                <?php
                                            }
                                        }else{
                                            echo '<p class="empty">Henüz blog paylaşılmadı!</p>';
                                        }
                                        ?>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--  Posts Finish --->
                    </div>
                    <!-- Ana Kutu Finish-->


                    <div class="container"></div>

                    <!-- <div class="more-btn" style="text-align: center; margin-top:1rem;">
                        <a href="posts.php" class="blog-post_cta">Tüm blogları gör</a>
                    </div> -->

                </main>
            </div>


            <br><br>




<?php require_once('../site/footer.php');  ?>

 <script>  

document.querySelectorAll('.logoutButton').forEach(button => {
  button.state = 'default'

  // function to transition a button from one state to the next
  let updateButtonState = (button, state) => {
    if (logoutButtonStates[state]) {
      button.state = state
      for (let key in logoutButtonStates[state]) {
        button.style.setProperty(key, logoutButtonStates[state][key])
      }
    }
  }

  // mouse hover listeners on button
  button.addEventListener('mouseenter', () => {
    if (button.state === 'default') {
      updateButtonState(button, 'hover')
    }
  })
  button.addEventListener('mouseleave', () => {
    if (button.state === 'hover') {
      updateButtonState(button, 'default')
    }
  })

  // click listener on button
  button.addEventListener('click', () => {
    if (button.state === 'default' || button.state === 'hover') {
      button.classList.add('clicked')
      updateButtonState(button, 'walking1')
      setTimeout(() => {
        button.classList.add('door-slammed')
        updateButtonState(button, 'walking2')
        setTimeout(() => {
          button.classList.add('falling')
          updateButtonState(button, 'falling1')
          setTimeout(() => {
            updateButtonState(button, 'falling2')
            setTimeout(() => {
              updateButtonState(button, 'falling3')
              setTimeout(() => {
                button.classList.remove('clicked')
                button.classList.remove('door-slammed')
                button.classList.remove('falling')
                updateButtonState(button, 'default')
              }, 1000)
            }, logoutButtonStates['falling2']['--walking-duration'])
          }, logoutButtonStates['falling1']['--walking-duration'])
        }, logoutButtonStates['walking2']['--figure-duration'])
      }, logoutButtonStates['walking1']['--figure-duration'])
    }
    var event = new Event('animationend');
    this.dispatchEvent(event);


  })
})

const logoutButtonStates = {
  'default': {
    '--figure-duration': '100',
    '--transform-figure': 'none',
    '--walking-duration': '100',
    '--transform-arm1': 'none',
    '--transform-wrist1': 'none',
    '--transform-arm2': 'none',
    '--transform-wrist2': 'none',
    '--transform-leg1': 'none',
    '--transform-calf1': 'none',
    '--transform-leg2': 'none',
    '--transform-calf2': 'none'
  },
  'hover': {
    '--figure-duration': '100',
    '--transform-figure': 'translateX(1.5px)',
    '--walking-duration': '100',
    '--transform-arm1': 'rotate(-5deg)',
    '--transform-wrist1': 'rotate(-15deg)',
    '--transform-arm2': 'rotate(5deg)',
    '--transform-wrist2': 'rotate(6deg)',
    '--transform-leg1': 'rotate(-10deg)',
    '--transform-calf1': 'rotate(5deg)',
    '--transform-leg2': 'rotate(20deg)',
    '--transform-calf2': 'rotate(-20deg)'
  },
  'walking1': {
    '--figure-duration': '300',
    '--transform-figure': 'translateX(11px)',
    '--walking-duration': '300',
    '--transform-arm1': 'translateX(-4px) translateY(-2px) rotate(120deg)',
    '--transform-wrist1': 'rotate(-5deg)',
    '--transform-arm2': 'translateX(4px) rotate(-110deg)',
    '--transform-wrist2': 'rotate(-5deg)',
    '--transform-leg1': 'translateX(-3px) rotate(80deg)',
    '--transform-calf1': 'rotate(-30deg)',
    '--transform-leg2': 'translateX(4px) rotate(-60deg)',
    '--transform-calf2': 'rotate(20deg)'
  },
  'walking2': {
    '--figure-duration': '400',
    '--transform-figure': 'translateX(17px)',
    '--walking-duration': '300',
    '--transform-arm1': 'rotate(60deg)',
    '--transform-wrist1': 'rotate(-15deg)',
    '--transform-arm2': 'rotate(-45deg)',
    '--transform-wrist2': 'rotate(6deg)',
    '--transform-leg1': 'rotate(-5deg)',
    '--transform-calf1': 'rotate(10deg)',
    '--transform-leg2': 'rotate(10deg)',
    '--transform-calf2': 'rotate(-20deg)'
  },
  'falling1': {
    '--figure-duration': '1600',
    '--walking-duration': '400',
    '--transform-arm1': 'rotate(-60deg)',
    '--transform-wrist1': 'none',
    '--transform-arm2': 'rotate(30deg)',
    '--transform-wrist2': 'rotate(120deg)',
    '--transform-leg1': 'rotate(-30deg)',
    '--transform-calf1': 'rotate(-20deg)',
    '--transform-leg2': 'rotate(20deg)'
  },
  'falling2': {
    '--walking-duration': '300',
    '--transform-arm1': 'rotate(-100deg)',
    '--transform-arm2': 'rotate(-60deg)',
    '--transform-wrist2': 'rotate(60deg)',
    '--transform-leg1': 'rotate(80deg)',
    '--transform-calf1': 'rotate(20deg)',
    '--transform-leg2': 'rotate(-60deg)'
  },
  'falling3': {
    '--walking-duration': '500',
    '--transform-arm1': 'rotate(-30deg)',
    '--transform-wrist1': 'rotate(40deg)',
    '--transform-arm2': 'rotate(50deg)',
    '--transform-wrist2': 'none',
    '--transform-leg1': 'rotate(-30deg)',
    '--transform-leg2': 'rotate(20deg)',
    '--transform-calf2': 'none'
  }



}

let timeout;

document.getElementById('myButton').addEventListener('animationend', function() {
 
    window.location.href = 'user_logout.php';
  });

  // document.getElementById('myButton').addEventListener('onclick', function() {
  //   window.location.href = 'href="user_logout.php" ';
  // });

</script>