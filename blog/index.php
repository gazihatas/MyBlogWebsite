<?php
    require_once('../layouts/header.php'); 
    require_once('../layouts/navbar.php'); 
    ?>
    
    <!--=============== MAIN ===============-->
    <main class="main">

        <div class="row">

            <div class="col-md-8">
                 <!--=============== WORK ===============-->
            <section class="work section" id="work">
                <span class="section__subtitle"></span>
                <h2 class="section__title">Projelerim</h2>

                <div class="work__filters">
                    <span class="work__item active-work"  data-filter='all' >All</span>
                    <span class="work__item" data-filter='.web'>Web</span>
                    <span class="work__item" data-filter='.mobil'>Mobil</span>
                    <span class="work__item" data-filter='.design'>WEB API</span>
                </div>

                <div class="work__container container grid">
                    <div class="work__card mix web">
                        <img src="img/work1.jpg" alt="" class="work__img">
                        <h3 class="work__title"></h3>
                        <a href="" class="work__button">
                            Demo <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div> 
                    <div class="work__card mix mobil">
                        <img src="img/work1.jpg" alt="" class="work__img">
                        <h3 class="work__title">Web Design</h3>
                        <a href="" class="work__button">
                            Demo <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div> 
                    <div class="work__card mix design">
                        <img src="img/work2.jpg" alt="" class="work__img">
                        <h3 class="work__title">App mobil</h3>
                        <a href="" class="work__button">
                            Demo <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div> 
                    <div class="work__card mix web">
                        <img src="img/work3.jpg" alt="" class="work__img">
                        <h3 class="work__title">Brand Design</h3>
                        <a href="https://github.com/onurzencrl/3301456_203301069" class="work__button">
                            Demo <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>
                     <div class="work__card mix design">
                        <img src="img/work4.jpg" alt="" class="work__img">
                        <h3 class="work__title"> Web Design</h3>
                        <a href="" class="work__button">
                            Demo <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div> 
                       <div class="work__card mix mobil">
                        <img src="img/work5.jpg" alt="" class="work__img">
                        <h3 class="work__title"> App Mobil</h3>
                        <a href="" class="work__button">
                            Demo <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>
                </div>
            </section>

            </div>
       
            <div class="col-md-4">
            <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>

    </main>

    <?php require_once('../layouts/footer.php');  ?>