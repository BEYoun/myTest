<link rel="stylesheet" type="text/css" href="<?= $this->request->base?>/styles/bootstrap-4.1.3/bootstrap.css">
<link href="<?= $this->request->base?>/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= $this->request->base?>/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= $this->request->base?>/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?= $this->request->base?>/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?= $this->request->base?>/styles/product.css">
<link rel="stylesheet" type="text/css" href="<?= $this->request->base?>/styles/product_responsive.css">



    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?=$this->request->base?>/images/product_background.jpg" data-speed="0.8"></div>
        <div class="home_container">
            <div class="home_content">
                <div class="home_title">Shop</div>
                <div class="breadcrumbs">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="categories.html">Woman</a></li>
                        <li><a href="categories.html">Accessories</a></li>
                        <li>Shoulder Bag</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->

    <div class="product">

        <!-- Sorting & Filtering -->
        <div class="products_bar">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="products_bar_content d-flex flex-row align-items-center justify-content-start">
                                <div class="product_categories">
                                    <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                        <li class="active"><a href="#">All</a></li>
                                        <li><a href="#">Hot Products</a></li>
                                        <li><a href="#">New Products</a></li>
                                        <li><a href="#">Sale Products</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Content -->
        <div class="section_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="product_content_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
                            <div class="product_content order-lg-1 order-2">
                                <div class="product_content_inner">
                                    <div class="product_image_row d-flex flex-md-row flex-column align-items-md-end align-items-start justify-content-start">
                                        <div class="product_image_1 product_image">
                                            <img src="<?= $this->request->base?>/<?=$piece['picture']?>" alt="">
                                        </div>
                                        <div class="product_image_2 product_image"><img src="<?= $this->request->base?>/<?=$piece['picture']?>" alt=""></div>
                                    </div>
                                    <div class="product_image_row">
                                        <div class="product_image_3 product_image"><img src="<?= $this->request->base?>/<?=$piece['picture']?>" alt=""></div>
                                    </div>
                                    <div class="product_image_row d-flex flex-md-row flex-column align-items-start justify-content-start">
                                        <div class="product_image_4 product_image"><img src="<?= $this->request->base?>/<?=$piece['picture']?>" alt=""></div>
                                        <div class="product_image_5 product_image"><img src="<?= $this->request->base?>/<?=$piece['picture']?>" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product_sidebar order-lg-2 order-1">
                                <form action="#" id="product_form" class="product_form">
                                    <div class="product_name"><?=$piece['nom']?></div>
                                    <div class="product_price">$<?=$piece['price']?></div>
                                    <div class="product_color">Color: <span><?=$piece['color']?></span></div>
                                    <div class="product_size">
                                        <div class="product_size_title">Select Size</div>
                                        <div class="product_size_list">
                                            <ul>
                                                <li class="size_available">
                                                    <input type="radio" id="radio_1" name="product_radio" class="regular_radio radio_1">
                                                    <label for="radio_1">35</label>
                                                </li>
                                                <li class="size_available">
                                                    <input type="radio" id="radio_2" name="product_radio" class="regular_radio radio_2">
                                                    <label for="radio_2">36</label>
                                                </li>
                                                <li class="size_available">
                                                    <input type="radio" id="radio_3" name="product_radio" class="regular_radio radio_3">
                                                    <label for="radio_3">37</label>
                                                </li>
                                                <li class="size_available">
                                                    <input type="radio" id="radio_4" name="product_radio" class="regular_radio radio_4">
                                                    <label for="radio_4">38</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="radio_5" name="product_radio" class="regular_radio radio_5" disabled>
                                                    <label for="radio_5">39</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="radio_6" name="product_radio" class="regular_radio radio_6" disabled>
                                                    <label for="radio_6">40</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button class="cart_button trans_200">add to cart</button>
                                    <div class="similar_products_button trans_200"><a href="categories.html">see similar products</a></div>
                                </form>
                                <div class="product_links">
                                    <ul class="text-center">
                                        <li><a href="#">See guide</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="<?= $this->request->base?>/">Returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Newsletter -->

    <div class="newsletter">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?=$this->request->base?>/images/newsletter.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter_content text-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_title">subscribe to our newsletter</div>
                            <div class="newsletter_subtitle">we won't spam, we promise!</div>
                        </div>
                        <div class="newsletter_form_container">
                            <form action="#" id="newsletter_form" class="newsletter_form">
                                <input type="email" class="newsletter_input" placeholder="your e-mail here" required="required">
                                <button class="newsletter_button">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->


<script src="<?=$this->request->base?>/js/jquery-3.2.1.min.js"></script>
<script src="<?=$this->request->base?>/styles/bootstrap-4.1.3/popper.js"></script>
<script src="<?=$this->request->base?>/styles/bootstrap-4.1.3/bootstrap.min.js"></script>
<script src="<?=$this->request->base?>/plugins/greensock/TweenMax.min.js"></script>
<script src="<?=$this->request->base?>/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?=$this->request->base?>/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?=$this->request->base?>/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?=$this->request->base?>/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?=$this->request->base?>/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?=$this->request->base?>/plugins/easing/easing.js"></script>
<script src="<?=$this->request->base?>/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?=$this->request->base?>/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?=$this->request->base?>/plugins/Isotope/fitcolumns.js"></script>
<script src="<?=$this->request->base?>/js/product.js"></script>