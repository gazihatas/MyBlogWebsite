<?php
    require_once('../layouts/header.php'); 
    require_once('../layouts/navbar.php'); 
    ?>
    
    <!--=============== MAIN ===============-->
    <main class="main">

       
                 <!--=============== WORK ===============-->
            <section class="work section" id="work">
                <!-- <span class="section__subtitle"></span> -->
                <!-- <h2 class="section__title">Projelerim</h2> -->

                <!-- <div class="work__filters">
                    <span class="work__item active-work"  data-filter='all' >All</span>
                    <span class="work__item" data-filter='.web'>Web</span>
                    <span class="work__item" data-filter='.mobil'>Mobil</span>
                    <span class="work__item" data-filter='.design'>WEB API</span>
                </div> -->

                <!-- <div class="work__container container grid"> -->
                    <!-- <div class="work__card mix web">
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
                    </div> -->
                <!-- </div> -->

                
            <div class="projcard-container container">
		
        <div class="projcard projcard-blue">
            <div class="projcard-innerbox">
                <img class="projcard-img" src="https://picsum.photos/800/600?image=1041" />
                <div class="projcard-textbox">
                    <div class="projcard-title">Card Title</div>
                    <div class="projcard-subtitle">This explains the card in more detail</div>
                    <div class="projcard-bar"></div>
                    <div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    <div class="projcard-tagbox">
                        <span class="projcard-tag">HTML</span>
                        <span class="projcard-tag">CSS</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="projcard projcard-red">
            <div class="projcard-innerbox">
                <img class="projcard-img" src="https://picsum.photos/800/600?image=1080" />
                <div class="projcard-textbox">
                    <div class="projcard-title">That's Another Card</div>
                    <div class="projcard-subtitle">I don't really think that I need to explain anything here</div>
                    <div class="projcard-bar"></div>
                    <div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    <div class="projcard-tagbox">
                        <span class="projcard-tag">PHP</span>
                        <span class="projcard-tag">SQL</span>
                        <span class="projcard-tag">Database</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="projcard projcard-green">
            <div class="projcard-innerbox">
                <img class="projcard-img" src="https://picsum.photos/800/600?image=1039" />
                <div class="projcard-textbox">
                    <div class="projcard-title">And a Third Card</div>
                    <div class="projcard-subtitle">You know what this is by now</div>
                    <div class="projcard-bar"></div>
                    <div class="projcard-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</div>
                    <div class="projcard-tagbox">
                        <span class="projcard-tag">Excel</span>
                        <span class="projcard-tag">VBA</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="projcard projcard-customcolor" style="--projcard-color: #F5AF41;">
            <div class="projcard-innerbox">
                <img class="projcard-img" src="https://picsum.photos/800/600?image=943" />
                <div class="projcard-textbox">
                    <div class="projcard-title">Last Card</div>
                    <div class="projcard-subtitle">That's the last one. Have a nice day!</div>
                    <div class="projcard-bar"></div>
                    <div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                    <div class="projcard-tagbox">
                        <span class="projcard-tag">iOS</span>
                        <span class="projcard-tag">Android</span>
                        <span class="projcard-tag">Cordova</span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
            </section>

       
            
    
      

 </main>

    <?php require_once('../layouts/footer.php');  ?>