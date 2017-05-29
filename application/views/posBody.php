    <?php
        $this->load->view('posHead');
    ?>
<body class="blog-page" data-spy="scroll" data-target=".navbar navbar-inverse">
        <!--
        Start Preloader
        ==================================== -->
        <div id="loading-mask">
            <div class="loading-img">
                <img alt="Meghna Preloader" src="<?php echo base_url()?>asset/img/preloader.gif"  />
            </div>
        </div>
        <!--
        End Preloader
        ==================================== -->
        
        <!-- 
        Fixed Navigation
        ==================================== -->
        <header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="index.html">
                        <h1 id="logo">
                            <img src="<?php echo base_url()?>asset/img/logo-meghna.png" alt="Meghna" />
                        </h1>
                    </a> -->
                </div>

                <nav class="collapse navbar-collapse navbar-right" >
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('home'); ?>#about">About Us</a></li>
                        <li><a href="<?php echo site_url('home'); ?>#layanan">Services</a></li>
                        <li><a href="<?php echo site_url('home'); ?>#out-team">Team</a></li>
                        <li><a href="<?php echo site_url('home'); ?>#showcase">Portfolio</a></li>
                        <li><a href="<?php echo site_url('home'); ?>#contact-us">Contact</a></li>
                    </ul>

                </nav><!-- /.navbar-collapse -->
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
        
        
        <!-- Start Blog Banner
        ==================================== -->
        <section id="blog-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       
                        <div class="blog-icon">
                            <i class="fa fa-book fa-4x"></i>
                        </div>
                        <div class="blog-title">
                            <h1>Welcome to Our Blog</h1>
                        </div>
                        
                    </div>     <!-- End col-lg-12 -->
                </div>      <!-- End row -->
            </div>       <!-- End container -->
        </section>    <!-- End Section -->
        
        
        <!-- Start Blog Post Section
        ==================================== -->
        <section id="blog-page">
            <div class="container">
                <div class="row">
                   
                    <div id="blog-posts" class="col-md-8 col-sm-8">
                        <div class="post-item">
                           
                           <!-- Single Post -->
                           <?php foreach($berita as $d){ ?>
                            <article class="entry wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="300ms">                               
                                <div class="post-thumb">
                                    <a href="single-post.html">
                                        <img src="<?php echo base_url().$d['imageB']?>" alt="3D Beach Art | Meghna" class="img-responsive">
                                    </a>
                                </div>
                                <div class="post-excerpt">
                                    <h3><a href="single-post.html"><?php echo $d['judul']?></a></h3>
                                    
                                    <p><?php echo $d['isiBerita']?></p>

                                </div>
                                <div class="post-meta">
                                    <span class="post-date">
                                        <i class="fa fa-calendar"></i>30 jun 2014
                                    </span>
                                    <span class="comments">
                                        <i class="fa fa-comments"></i>18 Comments
                                    </span>
                                    <span class="post-view">
                                        <i class="fa fa-eye"></i>265 Views
                                    </span>
                                    <span class="author">
                                        <i class="fa fa-user"></i><a href="#">Admin</a>
                                    </span>
                                    <span class="post-tags">
                                        <i class="fa fa-tags"></i><a href="#">Web Design</a>, <a href="#">Development</a>
                                    </span>
                                </div>
                            </article>
                            <?php } ?>
                            <!-- End Single Post -->
                            
                            <div class="next-prev clearfix">
                                <a href="" class="prev-post">
                                    <i class="fa fa-angle-left fa-2x"></i>Previous Post
                                </a>
                                <a href="" class="next-post pull-right">
                                    Next Post<i class="fa fa-angle-right fa-2x"></i>
                                </a>
                            </div>
                           <!--  <div class="author-about clearfix">
                                <h4>About Jhon Doe</h4>
                                <div class="post-author pull-left">
                                    <img src="img/blog/avatar.png" alt="">
                                </div> -->
                             <!--    <div class="author-bio">
                                    <p class="text1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi quisquam laboriosam, expedita ea natus tempora unde sed sequi velit, quia veniam libero quos sunt.</p>
                                    <h5>Follow The Author</h5>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                 -->
                            </div>
                            
                            <div id="comments" class="comments-section">
                               
                            </div>
                            
                            <div class="comment-reply-form">
                               <h3>Leave a Replay</h3>
                                <form id="comment-form" method="post" action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name *" id="name" name="name" required>
                                    </div>
                                    <!-- End .form-group -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="E-mail *" id="email" name="email" required>
                                    </div>
                                    <!-- End .form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Website" id="website" name="website">
                                    </div>
                                    <!-- End .form-group -->
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Message *" id="message" name="message" rows="5" cols="5" required></textarea>
                                    </div>
                                    <!-- End .form-group -->
                                    <div class="form-group">
                                        <input type="submit" id="post-comment" value="Post Comment" class="btn btn-transparent">
                                    </div>
                                    <!-- End .form-group -->
                                </form>
                            </div>
                            <!-- End Single Post -->

                        </div>
                    </div>
                    
                   
                       
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInDown">
                            <div class="widget-title">
                               <h3>Tag Cloud</h3>
                            </div>
                            <div class="widget-content">
                                <a class="tag" href="#">Mobile</a>
                                <a class="tag" href="#">Web</a>
                                <a class="tag" href="#">Electronics</a>
                                <a class="tag" href="#">SEO</a>
                                <a class="tag" href="#">Business Story</a>
                                <a class="tag" href="#">Post Query</a>
                                <a class="tag" href="#">HTML5</a>
                                <a class="tag" href="#">CSS3</a>
                                <a class="tag" href="#">jQuery</a>
                                <a class="tag" href="#">Javascript</a>
                            </div>
                        </aside>
                        <!-- End Single Widget -->
                        
                    </div>
                    <!-- End Widget Section -->

                </div>      <!-- End row -->
            </div>       <!-- End container -->
        </section>    <!-- End Section -->

    <?php
        $this->load->view('posFooter');
    ?>
        