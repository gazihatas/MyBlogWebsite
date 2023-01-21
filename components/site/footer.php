
<!--=============== FOOTER ===============-->

<footer class="footer">
    <div class="footer__container container">
        <h1 class="footer__title">Onur, &copy; copyright @ <?= date('Y'); ?></h1>
        <ul class="footer__list">
            <li>
                <a href="#about" class="footer__link">Hakkımda</a>
            </li>
            <li>
                <a href="#work" class="footer__link">Projelerim</a>
            </li>
            <li>
                <a href="#testimonial" class="footer__link">Referanslarım</a>
            </li>
        </ul>

        <!-- <ul class="footer__social">
            <a href="#" target="_blank" class="footer__social-link"><i class='bx bxl-facebook-circle'></i></a>
            <a href="#" target="_blank" class="footer__social-link"><i class='bx bxl-instagram' ></i></a>
            <a href="#" target="_blank" class="footer__social-link"><i class='bx bxl-twitter' ></i></a>

        </ul>
         -->
        <section>
            <ul class="icon-list">
                <li class="icon-item">
                    <a href="#" class="icon-link"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="icon-item">
                    <a href="#" class="icon-link"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="icon-item">
                    <a href="#" class="icon-link"><i class="fab fa-dribbble"></i></a>
                </li>
                <li class="icon-item">
                    <a href="#" class="icon-link"><i class="fab fa-youtube"></i></a>
                </li>
                <li class="icon-item">
                    <a href="#" class="icon-link"><i class="fab fa-linkedin-in"></i></a>
                </li>
            </ul>
        </section>



    </div>
</footer>
<?php
require_once '../../config/default.php';
?>





<!--=============== SCROLLREVEAL ===============-->
<script src="<?=JS_PATH;?>/scrollreveal.min.js"></script>

<!--=============== SWIPER JS ===============-->
<script src="<?=JS_PATH;?>/swiper-bundle.min.js"></script>

<!--=============== MIXITUP FILTER ===============-->
<script src="<?=JS_PATH;?>/mixitup.min.js"></script>

<!--=============== MAIN JS ===============-->
<script>
    let switch_button = document.getElementById('switch-button');
    switch_button.addEventListener('click',function()
        {
            this.classList.toggle('switch-active');
        }
    )
</script>

<script src="<?=JS_PATH;?>/script.js">

    <?=$arow->analytics_kodu;?>
</script>
</body>
</html>