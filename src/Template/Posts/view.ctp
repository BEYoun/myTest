    
     <?php 
        /*foreach ($posts as $key => $value) {
            # code...
            debug($value);
        }*/

       /* debug($posts);
        die();*/
    ?>
    






    <!-- Home --> 
    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?= $this->request->base ?>/images/blog.jpg" data-speed="0.8"></div>
        <div class="home_container">
            <div class="home_content">
                <div class="home_title">The Blog</div>
                <div class="breadcrumbs">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog -->

    <div class="blog">
        <div class="section_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        
                        <!-- Blog Posts -->
                        <div class="blog_bosts">
                            
                            <!-- Blog Post -->
                            <div class="blog_post">
                                <div class="blog_post_image"><img src="<?= $this->request->base ?>/images/blog_3.jpg" alt="https://unsplash.com/@saskiafairfull"></div>
                                <div class="blog_post_content">
                                    <div class="blog_post_date"><a href="#">June 18, 2018</a></div>
                                    <?php 
                                        if($this->request->session()->read('Auth.User.role')=='client'){
                                    ?>
                                    <div class="blog_post_date" style="background: orange;margin-left: 180px;margin-top: -38px;"><a href="#">Add comm</a></div>
                                    <?php
                                        }else{
                                    ?>
                                        <div class="blog_post_date" style="background: red;margin-left: 180px;margin-top: -38px;"><a href="#">Delete</a></div>
                                    <?php
                                        }
                                    ?>
                                    <div class="blog_post_title"><a href="#"><?= $post['title'] ?></a></div>
                                    <div class="blog_post_info d-flex flex-row align-items-start justify-content-start">
                                        <div class="blog_post_author">By<a href="#"> Admin</a></div>
                                        <div class="blog_post_category">
                                            <ul>
                                                <li>in <a href="#">Fashion</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog_post_comments"><a href="#">3 Comments</a></div>
                                    </div>
                                    <div class="blog_post_text">
                                        <p><?= $post['body'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php
                        foreach ($comments as $key => $value) {
                        ?>
                            <p>//<strong>Comment number  </strong>:<?= $key+1?> of <?=$value['pseudo'] ?>// <br>
                        <?=
                            $value['content'];
                        ?>
                            </p>
                        <?php
                            }
                        ?>
                        

                    </div>
                </div>
                
                <div class="row load_more_row">
                    
                    <div class="col">
                        <div class="load_more_button trans_200 ml-auto mr-auto" style="width:auto;"><a href="<?= $this->request->base ?>/posts">Back menu principale</a></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/fashion/images/newsletter.jpg" data-speed="0.8"></div>
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







    
