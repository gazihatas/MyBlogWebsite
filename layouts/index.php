   <?php
    require_once('header.php'); 
    require_once('navbar.php'); 
    ?>
    
    <!--=============== MAIN ===============-->
    <main class="main">
            <!--=============== HOME ===============-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__data">
                        <span class="home__greeting">Merhabalar , Ben</span>
                        <h1 class="home__name">Onur Zencirli</h1>
                        <h3 class="home__education">Full-Stack Web Developer</h3>
                        <div class="home__buttons">
                            <a href="../assets/pdf/Ansel-Cv.pdf" class="button button--ghost">
                                Download CV
                            </a>
                            <a href="#about" class="button">Hakkımda</a>
                        </div>
                    </div>
                    <div class="home__handle">
                        <img src="img/onprofil.png" alt="" class="home__img">
                    </div>

                    <div class="home__social">
                        <a href="#" class="home__social-link"><i class='bx bxl-linkedin-square'></i></a>
                        <a href="#" class="home__social-link"><i class='bx bxl-github' ></i></a>
                        <a href="#" class="home__social-link"><i class='bx bxl-dribbble' ></i></a>
                    </div>

                    <a href="" class="home__scroll"> 
                        <i class='bx bx-mouse home__scroll-icon'></i>
                        <span class="home__scroll-name">Aşağı Kaydır.</span>
                    </a>

                </div>
            </section>
            
            <!--=============== ABOUT ===============-->
            <section class="about section" id="about">
                <span class="section__subtitle">Ben Kimim?</span>
                <h2 class="section__title">Hakkımda</h2>
                <div class="about__container container grid">
                    <img src="img/myabout.png" alt="" class="about__img">
                    <div class="about__data">
                        <div class="about__info">
                            <div class="about__box">
                                <i class='bx bx-briefcase' ></i>
                                <h3 class="about__title">Tecrübe</h3>
                                <span class="about__subtitle">6 + Proje</span>
                            </div>
                             <div class="about__box">
                                <i class='bx bx-award' ></i>
                                <h3 class="about__title">İş Deneyimi</h3>
                                <span class="about__subtitle">1 Yıllık Deneyim</span>
                            </div> 
                            <div class="about__box">
                                <i class='bx bx-support' ></i>
                                <h3 class="about__title">İletişim</h3>
                                <span class="about__subtitle">Online 24/7 </span>
                            </div>

                        </div>
                        <p class="about__description">Merhabalar ben Onur Zencirli.
                            14 Temmuz 2001 Doğumluyum.Ankara'da yaşıyorum. Selçuk Üniversitesi Bilgisayar Mühendisliği 
                            3. Sınıf öğrencisiyim.Yazılımda ağırlıklı olarak Web üzerinde çalışıyorum. 
                        </p>
                        <a href="#contact" class="button">İletişime Geç.</a>
                    </div>
                </div>
            </section>

            <!--=============== SKILLS ===============-->
            <section class="skills section" id="skills">
                <span class="section__subtitle">Yeteneklerim</span>
                <h2 class="section__title">Neler Yapabilirim?</h2>

                <div class="skills__container container grid">
                    <div class="skills__content">
                        <h3 class="skills__title">FrontEnd Developer</h3>
                        <div class="skills__box">
                            <div class="skills__group">
                                <div class="skills_data">
                                    <i class='bx bx-badge-check'></i>
                                    <div>
                                        <h3 class="skills__Name"> HTML</h3>
                                        <span class="skills__level">Basic</span>
                                       
                                    </div>
                                </div>

                                 <div class="skills_data">
                                    <i class='bx bx-badge-check'></i>
                                    <div>
                                        <h3 class="skills__Name">CSS </h3>
                                        <span class="skills__level">Advanced</span>
                                       
                                    </div>
                                </div> 
                                
                                <div class="skills_data">
                                    <i class='bx bx-badge-check'></i>
                                    <div>
                                        <h3 class="skills__Name">JavaScript</h3>
                                        <span class="skills__level">Indermediate</span>
                                        
                                    </div>
                                </div>

                            </div>

                            <div class="skills__group">
                               

                            

                                <div class="skills_data">
                                    <i class='bx bx-badge-check'></i>
                                    <div>
                                        <h3 class="skills__Name">Angular</h3>
                                        <span class="skills__level">Intermediate</span>
                                        
                                    </div>
                                </div>  
                                
                                <div class="skills_data">
                                    <i class='bx bx-badge-check'></i>
                                    <div>
                                        <h3 class="skills__Name">Flutter</h3>
                                        <span class="skills__level">Intermediate</span>
                                        
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                    </div> 
                    <div class="skills__content">
                        <h3 class="skills__title">Backend Developer</h3>
                        <div class="skills__box">
                            <div class="skills__group">
                                <div class="skills_data">
                                    <i class='bx bx-badge-check'></i>
                                    <div>
                                        <h3 class="skills__Name"> PHP</h3>
                                        <span class="skills__level">Basic</span>
                                       
                                    </div>
                                </div>

                                 <div class="skills_data">
                                    <i class='bx bx-badge-check'></i>
                                    <div>
                                        <h3 class="skills__Name">.NET </h3>
                                        <span class="skills__level">Advanced</span>
                                       
                                    </div>
                                </div> 
                                
                                <div class="skills_data">
                                    <i class='bx bx-badge-check'></i>
                                    <div>
                                        <h3 class="skills__Name">Dart</h3>
                                        <span class="skills__level">Indermediate</span>
                                        
                                    </div>
                                </div>

                            </div>

                            <div class="skills__group">
                                <div class="skills_data">
                                    <i class='bx bx-badge-check'></i>
                                    <div>
                                        <h3 class="skills__Name">MySQL</h3>
                                        <span class="skills__level">Intermediate</span>
                                        
                                    </div>
                                </div>

                                 <div class="skills_data">
                                    <i class='bx bx-badge-check'></i>
                                    <div>
                                        <h3 class="skills__Name">PostgreSQL</h3>
                                        <span class="skills__level">Intermediate</span>
                                        
                                    </div>
                                </div> 

                             

                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <!--=============== SERVICES ===============-->
            <section class="services section">
                <span class="section__subtitle">Hizmetlerim</span>
                <h2 class="section__title">Neler Yapabilirim?</h2>

                <div class="services__container container grid">
                    <div class="services__card">
                        <h3 class="services__title">Web <br> Sitesi</h3>
                        <span class="services__button">Detaylar <i class='bx bx-right-arrow-alt .services__icon' ></i></span>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close' ></i>
                                <h3 class="services__modal-title">Web Designer</h3>
                                <p class="services__modal-description">İstediğiniz türde web siteyi istekleriniz doğrultusunda kurabilirim.
                                </p>
                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info"> Blog , E-ticaret , portfolio , Kurumsal...</p>
                                    </li> 
                                    
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info"> Script satışı yapılmaktadır.</p>
                                    </li>

                                     <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">Bana mail atarak iletişime geçebilirsiniz.</p>
                                    </li>


                                 
                                </ul>
                            </div>
                        </div>
                    </div>  

                    <div class="services__card">
                        <h3 class="services__title">WEB <br> API</h3>
                       <span class="services__button">Detaylar <i class='bx bx-right-arrow-alt .services__icon'  ></i></span>
                       <div class="services__modal">
                        <div class="services__modal-content">
                            <i class='bx bx-x services__modal-close' ></i>
                            <h3 class="services__modal-title">Web Designer</h3>
                            <p class="services__modal-description">.NET ile clean code kurallarına uygun katmanlı mimari ile Web API projeleri yapabilirim.
                            </p>
                            <ul class="services__modal-list">
                                <li class="services__modal-item">
                                    <i class='bx bx-check services__modal-icon' ></i>
                                    <p class="services__modal-info"> .NET Web API</p>
                                </li>

                                 <li class="services__modal-item">
                                    <i class='bx bx-check services__modal-icon' ></i>
                                    <p class="services__modal-info">Bana mail atarak iletişime geçebilirsiniz.</p>
                                </li>


                          
                            </ul>
                        </div>
                       </div>
                    </div>  

                    <div class="services__card">
                        <h3 class="services__title">Mobil Programlama</h3>
                        <span class="services__button">Detaylar <i class='bx bx-right-arrow-alt .services__icon' ></i></span>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close' ></i>
                                <h3 class="services__modal-title">Mobil Uygulama</h3>
                                <p class="services__modal-description">Flutter ile istediğiniz mobil uygulamayı istediğiniz biçimde yapabilirim.
                                </p>
                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">Bana mail atarak iletişime geçebilirsiniz.</p>
                                    </li>
    
                                  
                                   
                                   
                                </ul>
                            </div>
                           </div>
                    </div>
                    
                </div>
            </section>

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

            <!--=============== TESTIMONIALS ===============-->
            <!-- <section class="testimonial section">
                <span class="section__subtitle">Referanslarım</span>
                <h2 class="section__title">Testimonal</h2>
                <div class="testimonial__container container swiper">
                    <div class="swiper-wrapper">
                        <div class="testimonial__card swiper-slide">
                            <img src="img/testimonial1.png" alt="" class="testimonial__img">
                            <h3 class="testimonial__name">Pablo</h3>

                            <p class="testimonial__description">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                 Voluptates esse ipsum debitis quam alias saepe commodi
                                  a distinctio.
                            </p>
                        </div>   

                         <div class="testimonial__card swiper-slide">
                            <img src="img/testimonial2.png" alt="" class="testimonial__img">
                            <h3 class="testimonial__name">Onur Zencirli</h3>

                            <p class="testimonial__description">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                 Voluptates esse ipsum debitis quam alias saepe commodi
                                  a distinctio.
                            </p>
                        </div>   

                          <div class="testimonial__card swiper-slide">
                            <img src="img/testimonial3.png" alt="" class="testimonial__img">
                            <h3 class="testimonial__name">Paul Vusy</h3>

                            <p class="testimonial__description">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                 Voluptates esse ipsum debitis quam alias saepe commodi
                                  a distinctio.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </section> -->

            <!--=============== CONTACT ===============-->
            <section class="contact section" id="contact">
                <span class="section__subtitle">İletişim</span>
                <h2 class="section__title">İletişim kur</h2>

                <div class="contact__container container grid">
                    <div class="contact__content">
                        <h3 class="contact__title">Benimle iletişime geç</h3>
                        <div class="contact__info">
                            <div class="contact__card">
                                <i class='bx bx-mail-send contact__card-icon'></i>
                                <h3 class="contact__card-title">Email</h3>
                                <span class="contact__card-data">onurzencirli@gmail.com</span>
                                <a href="" class="contact__button">Mail at <i class='bx bx-right-arrow-alt contact__button-icon' ></i></a>
                            </div>  

                           
                        </div>
                    </div>
                    <div class="contact__content">
                        <h3 class="contact__title">Beraber çalışmak için..</h3>
                        <form action="" class="contact__form">
                            <div class="contact__form-div"> 
                                <label for="" class="contact__form-tag">İsim</label>
                                <input type="text" placeholder="İsminiz.." class="contact__form-input">
                            </div> 

                            <div class="contact__form-div"> 
                                <label for="" class="contact__form-tag">Mail</label>
                                <input type="email" placeholder="Mail adresin.."  class="contact__form-input">
                            </div> 

                            <div class="contact__form-div contact__form-area"> 
                                <label for="" class="contact__form-tag">Projeyi Tanıt</label>
                                <textarea name="" id="" cols="30" placeholder="Ne istediğinden bahset.." rows="10" class="contact__form-input"></textarea>
                            </div>

                            <button class="button">Mail at</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <?php
    require_once('footer.php'); 
    ?>