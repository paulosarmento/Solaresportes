<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="footer-top-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-about-us">
                    <h2>Solar Esportes</h2>
                    <p> Loja de materiais esportivos, fundada em 2010, trabalhamos com as principais marcas do mercado, trazendoo que há de melhor em materias esportivos visando a qualidade e bem estar de nossos clientes.</p>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/SolarEsportes" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/solaresportes/?hl=pt-br" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UC75u9Xb9A1yAFN-tEkecVOw/featured" target="_blank"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Navegação </h2>
                    <ul>
                        <li><a href="/login">Minha Conta</a></li>
                        <li><a href="/profile/orders">Meus Pedidos</a></li>
                    </ul>                        
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Categorias</h2>
                    <ul>
                        <?php require $this->checkTemplate("categories-menu");?> 
                    </ul>                        
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="footer-newsletter">
                    <h2 class="footer-wid-title">Notícias</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus!</p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input type="email" placeholder="Escreva seu email">
                            <input type="submit" value="Inscrever">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer top area -->

<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright">
                    <p>&copy; 2020 Solar Esportes. <a href="#" target="_blank">solaresportes.com.br</a></p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="footer-card-icon">
                    <i class="fa fa-cc-discover"></i>
                    <i class="fa fa-cc-mastercard"></i>
                    <i class="fa fa-cc-paypal"></i>
                    <i class="fa fa-cc-visa"></i>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer bottom area -->

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="/res/site/js/owl.carousel.min.js"></script>
<script src="/res/site/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="/res/site/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="/res/site/js/main.js"></script>

<!-- Slider -->
<script type="text/javascript" src="/res/site/js/bxslider.min.js"></script>
<script type="text/javascript" src="/res/site/js/script.slider.js"></script>
</body>
</html>