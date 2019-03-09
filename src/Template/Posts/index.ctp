    
     <?php 
        /*foreach ($posts as $key => $value) {
            # code...
            debug($value);
        }*/

       /* debug($posts);
        die();*/
    ?>
    <style>
            body {font-family: Arial, Helvetica, sans-serif;}

            /* Full-width input fields */
            input[type=text], input[type=password] {
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button {
              background-color: #4CAF50;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              cursor: pointer;
              width: 100%;
            }

            button:hover {
              opacity: 0.8;
            }

            /* Extra styles for the cancel button */
            .cancelbtn {
              width: auto;
              padding: 10px 18px;
              background-color: #f44336;
            }

            /* Center the image and position the close button */
            .imgcontainer {
              text-align: center;
              margin: 24px 0 12px 0;
              position: relative;
            }

            img.avatar {
              width: 40%;
              border-radius: 50%;
            }

            .container {
              padding: 16px;
            }

            span.psw {
              float: right;
              padding-top: 16px;
            }

            /* The Modal (background) */
            .modal {
              display: none; /* Hidden by default */
              position: fixed; /* Stay in place */
              z-index: 1; /* Sit on top */
              left: 0;
              top: 0;
              width: 100%; /* Full width */
              height: 100%; /* Full height */
              overflow: auto; /* Enable scroll if needed */
              background-color: rgb(0,0,0); /* Fallback color */
              background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
              padding-top: 60px;
            }

            /* Modal Content/Box */
            .modal-content {
              background-color: #fefefe;
              margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
              border: 1px solid #888;
              width: 80%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button (x) */
            .close {
              position: absolute;
              right: 25px;
              top: 0;
              color: #000;
              font-size: 35px;
              font-weight: bold;
            }

            .close:hover,
            .close:focus {
              color: red;
              cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate {
              -webkit-animation: animatezoom 0.6s;
              animation: animatezoom 0.6s
            }

            @-webkit-keyframes animatezoom {
              from {-webkit-transform: scale(0)} 
              to {-webkit-transform: scale(1)}
            }
              
            @keyframes animatezoom {
              from {transform: scale(0)} 
              to {transform: scale(1)}
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
              span.psw {
                 display: block;
                 float: none;
              }
              .cancelbtn {
                 width: 100%;
              }
            }
    </style>






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
                        <?php 
                            foreach ($posts as $key => $value) {
                        ?>
                        <!-- Blog Posts -->
                        <div class="blog_bosts">
                            
                            <!-- Blog Post -->
                            <div class="blog_post">
                                <div class="blog_post_image"><img src="<?= $this->request->base ?>/images/blog_<?= $key+1 ?>.jpg" alt="https://unsplash.com/@saskiafairfull"></div>
                                <div class="blog_post_content">
                                    <div class="blog_post_date"><a href="#">June 18, 2018</a></div>
                                    <?php 
                                      if($this->request->session()->read('Auth.User.role')=='admin'){


                                    ?>
                                    <div class="blog_post_date" style="background: red;margin-left: 180px;margin-top: -38px;"><a href="#">Delete</a></div>
                                    <?php


                                      } 


                                      ?>
                                    <div class="blog_post_title"><!-- <a href="#"><?= $value['title'] ?></a> --><?= $this->Html->link($value['title'],['action'=>'view',$value['id']]) ?>
                                    </div>
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
                                        <p><?= $value['body'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                             }
        
                        ?>

                        

                    </div>
                </div>
                
                <div class="row load_more_row">
                    <div class="col">
                        <div class="load_more_button trans_200 ml-auto mr-auto"><a rel="prev" href="<?= $this->request->base ?>/posts">previous</a></div>
                    </div>
                    <div class="col">
                         <div class="load_more_button trans_200 ml-auto mr-auto" style="margin-left: -30px"><a rel="next" href="<?= $this->request->base ?>/posts?page=2">Next »</a></div>
                    </div>
                    <div class="col">
                      <?php 
                                      if($this->request->session()->read('Auth.User.role')=='admin'){


                                    ?>
                        <div class="load_more_button trans_200 ml-auto mr-auto" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href="#">Add article</a></div>

                        <?php
                          }
                        ?>
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







    <div id="id01" class="modal">
        <?= $this->Form->create(Null,[
            'class'=>'modal-content animate',
            'style'=>'width: 400px',
            'url'=>[
                'action'=>'add'
            ]
        ])?>
        
            

            <div class="container">
                <label for="uname"><b>Title</b></label>
                <input type="text" placeholder="Enter Tilte" name="title" required>
            
                <label for="psw"><b>contenue</b></label>
                <textarea name="body" rows="4" cols="50" placeholder="    Article contenue"></textarea>
                      
                <button type="submit">Add</button>
                <!-- <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </label> -->
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
            </div>
        </form>
  
    </div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
