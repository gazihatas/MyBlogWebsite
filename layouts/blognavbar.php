   
        



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


                <div class="pricing-table-container1">
                <div class="pricing-header1" style="display: flex;">

                    <div class="plans-switch-container1" >  
                        <a href="../layouts/index.php"> <span class="monthly1" style="color:white;">PORTFOLİO &nbsp;</span> </a>
                    </div>
                     <div class="plans-switch-container1">  
                       <a href="../blog/index.php"> <span class="monthly1"  style="color:white;">BLOG</span></a>
                    </div>
                </div>


                </div>
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
                            <a href="#" class="nav__link active-link">   <i class='bx bx-home'></i>     
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link ">   <i class='bx bx-user' ></i>    
                            </a>
                        </li>



                         <li class="nav__item">
                            <a href="#skills" class="nav__link"> <i class='bx bx-book'></i> </a>
                        </li>
                        
                        <li class="nav__item">
                            <a href="#work" class="nav__link">
                                
                            <div class="search-btn"> 
                                <span class="fas fa-search"></span>
                            </div>
                            </a>
                        </li>
                       

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
        </header>


      
       <script>
         $(".search-btn").click(function(){
           $(".wrapper").addClass("active");
           $(this).css("display", "none");
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
   