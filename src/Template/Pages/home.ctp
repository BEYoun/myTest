<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>aStar</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="aStar Fashion Template Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            
            <!-- Hamburger -->
            <div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

            <!-- Logo -->
            <div class="header_logo">
            <!-- <a href="#"><div>a<span>star</span></div></a> -->
            <?php
            echo $this->Html->image("logo2.png", [
                "alt" => "Fashion Shifter",
                'url' => ['controller' => 'Pages', 'action' => 'index'],
                "width" => "50"
            ]);
            ?>
        </div>

            <!-- Navigation -->
            <nav class="header_nav">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <li><a href="index.html">home</a></li>
                    <?php 
                            if($this->request->session()->read('Auth')==false){
                        ?>
                        <li><a href="<?=$this->request->base?>/users/login">login<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <?php
                            }else{
                        ?>
                            <li><a href="<?=$this->request->base?>/users/logout">logout<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <?php
                            }
                        ?>
                    <li><a href="#">WOMAN</a></li>
                    <li><a href="#">lookbook</a></li>
                    <li><?php $this->Html->link("BLOG", ['controller'=>'posts','action'=>'index']) ?></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </nav>

            <!-- Header Extra -->
            <div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

                <!-- Language -->
                <div class="info_languages has_children">
                    <div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                    <div class="dropdown_text">english</div>
                    <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                    
                    <!-- Language Dropdown Menu -->
                     <ul>
                        <li><a href="#">
                            <div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">french</div>
                        </a></li>
                        <li><a href="#">
                            <div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">japanese</div>
                        </a></li>
                        <li><a href="#">
                            <div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">russian</div>
                        </a></li>
                        <li><a href="#">
                            <div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">spanish</div>
                        </a></li>
                     </ul>

                </div>

                <!-- Currency -->
                <div class="info_currencies has_children">
                    <div class="dropdown_text">usd</div>
                    <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                    <!-- Currencies Dropdown Menu -->
                     <ul>
                        <li><a href="#"><div class="dropdown_text">EUR</div></a></li>
                        <li><a href="#"><div class="dropdown_text">YEN</div></a></li>
                        <li><a href="#"><div class="dropdown_text">GBP</div></a></li>
                        <li><a href="#"><div class="dropdown_text">CAD</div></a></li>
                     </ul>

                </div>

                

                    <!-- Cart -->
                <!-- 
                <div class="cart d-flex flex-row align-items-center justify-content-start">
                    <div class="cart_icon"><a href="cart.html">
                        <img src="images/bag.png" alt="">
                        <div class="cart_num">2</div>
                    </a></div>
                </div> -->

            </div>

        </div>
    </header>

    <!-- Menu -->

    <div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
        <div class="menu_top d-flex flex-row align-items-center justify-content-start">

            <!-- Language -->
            <div class="info_languages has_children">
                <div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                <div class="dropdown_text">english</div>
                <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                
                <!-- Language Dropdown Menu -->
                 <ul>
                    <li><a href="#">
                        <div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="dropdown_text">french</div>
                    </a></li>
                    <li><a href="#">
                        <div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="dropdown_text">japanese</div>
                    </a></li>
                    <li><a href="#">
                        <div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="dropdown_text">russian</div>
                    </a></li>
                    <li><a href="#">
                        <div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="dropdown_text">spanish</div>
                    </a></li>
                 </ul>

            </div>

            <!-- Currency -->
            <div class="info_currencies has_children">
                <div class="dropdown_text">usd</div>
                <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                <!-- Currencies Dropdown Menu -->
                 <ul>
                    <li><a href="#"><div class="dropdown_text">EUR</div></a></li>
                    <li><a href="#"><div class="dropdown_text">YEN</div></a></li>
                    <li><a href="#"><div class="dropdown_text">GBP</div></a></li>
                    <li><a href="#"><div class="dropdown_text">CAD</div></a></li>
                 </ul>

            </div>

        </div>
        <div class="menu_search">
            <form action="#" class="header_search_form menu_mm">
                <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                    <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="index.html">home</a></li>
                <?php 
                            if($this->request->session()->read('Auth')==false){
                        ?>
                        <li><a href="<?=$this->request->base?>/users/login">login<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <?php
                            }else{
                        ?>
                            <li><a href="<?=$this->request->base?>/users/logout">logout<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <?php
                            }
                        ?>
                <li class="menu_mm"><a href="#">woman</a></li>
                <li class="menu_mm"><a href="<?= $this->request->base?>/posts/">blog</a></li>
                <li class="menu_mm"><a href="contact.html">contact</a></li>
            </ul>
        </nav>
        <div class="menu_extra">
            <div class="menu_social">
                <ul>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Sidebar -->

    <div class="sidebar">
        
        <!-- Info -->
        <div class="info">
            <div class="info_content d-flex flex-row align-items-center justify-content-start">
                
                <!-- Language -->
                <div class="info_languages has_children">
                    <div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                    <div class="dropdown_text">english</div>
                    <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                    
                    <!-- Language Dropdown Menu -->
                     <ul>
                        <li><a href="#">
                            <div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">french</div>
                        </a></li>
                        <li><a href="#">
                            <div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">japanese</div>
                        </a></li>
                        <li><a href="#">
                            <div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">russian</div>
                        </a></li>
                        <li><a href="#">
                            <div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">spanish</div>
                        </a></li>
                     </ul>

                </div>

                <!-- Currency -->
                <div class="info_currencies has_children">
                    <div class="dropdown_text">usd</div>
                    <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                    <!-- Currencies Dropdown Menu -->
                     <ul>
                        <li><a href="#"><div class="dropdown_text">EUR</div></a></li>
                        <li><a href="#"><div class="dropdown_text">YEN</div></a></li>
                        <li><a href="#"><div class="dropdown_text">GBP</div></a></li>
                        <li><a href="#"><div class="dropdown_text">CAD</div></a></li>
                     </ul>

                </div>

            </div>
        </div>

        <!-- Logo -->
        <div class="sidebar_logo">
            <!-- <a href="#"><div>a<span>star</span></div></a> -->
            <?php
            echo $this->Html->image("logo2.png", [
                "alt" => "Fashion Shifter",
                'url' => ['controller' => 'Pages', 'action' => 'index'],
                "width" => "220"
            ]);
            ?>
        </div>

        <!-- Sidebar Navigation -->
        <nav class="sidebar_nav">
            <ul>
                <li><a href="<?=$this->request->base?>">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <?php 
                            if($this->request->session()->read('Auth')==false){
                        ?>
                        <li><a href="<?=$this->request->base?>/users/login">login<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <?php
                            }else{
                        ?>
                            <li><a href="<?=$this->request->base?>/users/logout">logout<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <?php
                            }
                        ?>
                <li><a href="#">woman<i class="fa fa-angle-right" aria-hidden="true"></i></a></li><!-- 
                <li><a href="#">lookbook<i class="fa fa-angle-right" aria-hidden="true"></i></a></li> -->
                <li><a href="<?= $this->request->base?>/posts/">blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="#">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            </ul>
        </nav>

        <!-- Search -->
        <div class="search">
            <form action="#" class="search_form" id="sidebar_search_form">
                <input type="text" class="search_input" placeholder="Search" required="required">
                <button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>

        <!-- Cart -->
        <?php 
            if($this->request->session()->read('Auth')==true){
        ?>
        <div class="cart d-flex flex-row align-items-center justify-content-start">
            <div class="cart_icon"><a href="<?= $this->request->base ?>/clients/bag">
                <img src="<?= $this->request->base ?>/images/bag.png" alt="">
                <div class="cart_num">0</div>
            </a></div>
            <div class="cart_text">bag</div>
            <div class="cart_price">$0 (0)</div>
        </div>
        <?php
            }
        ?>
    </div>

    <!-- Home -->

    <div class="home">
        
        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">
                
                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(<?= $this->request->base ?>/images/home_slider_1.jpg)"></div>
                    <div class="home_content_container">
                        <div class="home_content">
                            <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                                <div class="home_discount_num">20</div>
                                <div class="home_discount_text">Discount on the</div>
                            </div>
                            <div class="home_title">New Collection</div>
                            <div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/home_slider_1.jpg)"></div>
                    <div class="home_content_container">
                        <div class="home_content">
                            <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                                <div class="home_discount_num">20</div>
                                <div class="home_discount_text">Discount on the</div>
                            </div>
                            <div class="home_title">New Collection</div>
                            <div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/home_slider_1.jpg)"></div>
                    <div class="home_content_container">
                        <div class="home_content">
                            <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                                <div class="home_discount_num">20</div>
                                <div class="home_discount_text">Discount on the</div>
                            </div>
                            <div class="home_title">New Collection</div>
                            <div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>
                        </div>
                    </div>
                </div>

            </div>
                
            <!-- Home Slider Navigation -->
            <div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/prev.png" alt=""></div></div>
            <div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/next.png" alt=""></div></div>

        </div>
    </div>

    <!-- Boxes -->
    
    <div class="boxes">
        <div class="section_container">
            <div class="container">
                <div class="row">
                    
                    <!-- Box -->
                    <div class="col-lg-4 box_col">
                        <div class="box">
                            <div class="box_image"><img src="<?= $this->request->base ?>/images/box_1.jpg" alt=""></div>
                            <div class="box_title trans_200"><a href="categories.html">summer collection</a></div>
                        </div>
                    </div>

                    <!-- Box -->
                    <div class="col-lg-4 box_col">
                        <div class="box">
                            <div class="box_image"><img src="<?= $this->request->base ?>/images/box_2.jpg" alt=""></div>
                            <div class="box_title trans_200"><a href="categories.html">eyewear collection</a></div>
                        </div>
                    </div>

                    <!-- Box -->
                    <div class="col-lg-4 box_col">
                        <div class="box">
                            <div class="box_image"><img src="<?= $this->request->base ?>/images/box_3.jpg" alt=""></div>
                            <div class="box_title trans_200"><a href="categories.html">basic pieces</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Categories -->

    <div class="categories">
        <div class="section_container">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="categories_list_container">
                            <ul class="categories_list d-flex flex-row align-items-center justify-content-start">
                                <li><a href="categories.html">new arrivals</a></li>
                                <li><a href="categories.html">recommended</a></li>
                                <li><a href="categories.html">best sellers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->

    <div class="products">
        <div class="section_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="products_container grid">
                            
                            <!-- Product -->
                            <!-- <div class="product grid-item hot">
                                <div class="product_inner">
                                    <div class="product_image">
                                        <img src="images/product_1.jpg" alt="">
                                        <div class="product_tag">hot</div>
                                    </div>
                                    <div class="product_content text-center">
                                        <div class="product_title"><a href="product.html">long red shirt</a></div>
                                        <div class="product_price">$39.90</div>
                                        <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                    </div>
                                </div>  
                            </div> -->

                            <!-- Product -->
                            <!-- <div class="product grid-item">
                                <div class="product_inner">
                                    <div class="product_image"><img src="images/product_2.jpg" alt=""></div>
                                    <div class="product_content text-center">
                                        <div class="product_title"><a href="product.html">hype grey shirt</a></div>
                                        <div class="product_price">$19.50</div>
                                        <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                    </div>
                                </div>  
                            </div> -->

                            <!-- Product -->
                            <!-- <div class="product grid-item sale">
                                <div class="product_inner">
                                    <div class="product_image">
                                        <img src="images/product_3.jpg" alt="">
                                        <div class="product_tag">sale</div>
                                    </div>
                                    <div class="product_content text-center">
                                        <div class="product_title"><a href="product.html">long sleeve jacket</a></div>
                                        <div class="product_price">$32.20<span>RRP 64.40</span></div>
                                        <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                    </div>
                                </div>  
                            </div> -->

                            <!-- Product -->
                            <!-- <div class="product grid-item">
                                <div class="product_inner">
                                    <div class="product_image">
                                        <img src="images/product_4.jpg" alt="">
                                    </div>
                                    <div class="product_content text-center">
                                        <div class="product_title"><a href="product.html">denim men shirt</a></div>
                                        <div class="product_price">$59.90</div>
                                        <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                    </div>
                                </div>  
                            </div> -->

                            <!-- Product -->
                            <!-- <div class="product grid-item">
                                <div class="product_inner">
                                    <div class="product_image">
                                        <img src="images/product_5.jpg" alt="">
                                    </div>
                                    <div class="product_content text-center">
                                        <div class="product_title"><a href="product.html">long red shirt</a></div>
                                        <div class="product_price">$79.90</div>
                                        <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                    </div>
                                </div>  
                            </div>
 -->
                            <!-- Product -->
                            <!-- <div class="product grid-item new">
                                <div class="product_inner">
                                    <div class="product_image">
                                        <img src="images/product_6.jpg" alt="">
                                        <div class="product_tag">new</div>
                                    </div>
                                    <div class="product_content text-center">
                                        <div class="product_title"><a href="product.html">hype grey shirt</a></div>
                                        <div class="product_price">$59.90</div>
                                        <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                    </div>
                                </div>  
                            </div> -->

                            <!-- Product -->
                            <!-- <div class="product grid-item">
                                <div class="product_inner">
                                    <div class="product_image">
                                        <img src="images/product_7.jpg" alt="">
                                    </div>
                                    <div class="product_content text-center">
                                        <div class="product_title"><a href="product.html">long sleeve jacket</a></div>
                                        <div class="product_price">$15.90</div>
                                        <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                    </div>
                                </div>  
                            </div> -->

                            <!-- Product -->
                            <!-- <div class="product grid-item sale">
                                <div class="product_inner">
                                    <div class="product_image">
                                        <img src="images/product_8.jpg" alt="">
                                        <div class="product_tag">sale</div>
                                    </div>
                                    <div class="product_content text-center">
                                        <div class="product_title"><a href="product.html">denim men shirt</a></div>
                                        <div class="product_price">$43.99<span>RRP 64.40</span></div>
                                        <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                    </div>
                                </div>  
                            </div> -->
                            <?php
                                foreach ($mesPieces as $key => $value) {
                            ?>
                                <div class="product grid-item">
                                    <div class="product_inner">
                                        <div class="product_image">
                                            <img src="<?= $this->request->base?>/<?= $value['picture']?>" alt="">
                                        </div>
                                        <div class="product_content text-center">
                                            <div class="product_title"><a href="<?= $this->request->base?>/pieces/view/<?= $value['id']?>"><?= $value['nom']?></a></div>
                                            <div class="product_price">$<?= $value['price']?></div>
                                            <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                                        </div>
                                    </div>  
                                </div>  
                            <?php
                                }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
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

    <footer class="footer">
        <div class="footer_content">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <p>
                            Made by : <br>
                            <em><b>BEAILA Younes</b></em><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Social -->
        <div class="footer_social">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_social_container d-flex flex-row align-items-center justify-content-between">
                                <!-- Instagram -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">instagram</div>
                                    </div>
                                </a>
                                <!-- Google + -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">google +</div>
                                    </div>
                                </a>
                                <!-- Pinterest -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-pinterest" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">pinterest</div>
                                    </div>
                                </a>
                                <!-- Facebook -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">facebook</div>
                                    </div>
                                </a>
                                <!-- Twitter -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">twitter</div>
                                    </div>
                                </a>
                                <!-- YouTube -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">youtube</div>
                                    </div>
                                </a>
                                <!-- Tumblr -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-tumblr-square" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">tumblr</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>              
        </div>

        <!-- Credits -->
        <div class="credits">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="credits_content d-flex flex-row align-items-center justify-content-end">
                                <div class="credits_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.3/popper.js"></script>
<script src="styles/bootstrap-4.1.3/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/Isotope/fitcolumns.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
