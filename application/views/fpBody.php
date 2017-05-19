<?php 
$this->load->view('fpHead');
?>
<body id="body">


        <!--
        Welcome Slider
        ==================================== -->
        <section id="home">	    

        	<div id="slitSlider" class="sl-slider-wrapper">
        		<div class="sl-slider">

        			<!-- single slide item -->
        			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
        				<div class="sl-slide-inner">
        					<div class="bg-img bg-img-1"></div>
        					<div class="carousel-caption">
        						<div>
        							<h1 data-wow-duration="500ms"  data-wow-delay="500ms" class="heading animated fadeInRight">CV. PRAHA SANDI UTAMA</h1>
        							<h2 data-wow-duration="500ms"  data-wow-delay="500ms" class="heading animated fadeInRight">Welcome To Praha Sandi Utama</h2>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- /single slide item -->

        			<!-- single slide item -->
        			<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
        				<div class="sl-slide-inner">
        					<div class="bg-img bg-img-2"></div>
        					<div class="carousel-caption">
        						<div>
        							<h1 class="heading animated fadeInDown">Desain Arsitektur</h1>
        							<h3 class="animated fadeInUp">Bork Imagination to Work Best</h3>

        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- /single slide item -->

        			<!-- single slide item -->
        			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
        				<div class="sl-slide-inner">
        					<div class="bg-img bg-img-3"></div>
        					<div class="carousel-caption">
        						<div>
        							<h2 class="heading animated fadeInRight">Kontruksi Bangunan</h2>
        							<h3 class="animated fadeInUp">Bork Imagination to Work Best</h3>


        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- /single slide item -->

        			<!-- single slide item -->
        			<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
        				<div class="sl-slide-inner">
        					<div class="bg-img bg-img-4"></div>
        					<div class="carousel-caption">
        						<div>
        							<h2 class="heading animated fadeInDown">Interio Desain</h2>
        							<h3 class="animated fadeInUp">Bork Imagination to Work Best</h3>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- /single slide item -->

        		</div><!-- /sl-slider -->

        		<nav id="nav-arrows" class="nav-arrows">
        			<span class="nav-arrow-prev">Previous</span>
        			<span class="nav-arrow-next">Next</span>
        		</nav>

        		<nav id="nav-dots" class="nav-dots">
        			<span class="nav-dot-current"></span>
        			<span></span>
        			<span></span>
        		</nav>

        	</div><!-- /slider-wrapper -->
        </section>
        <!--/#home section-->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar navbar-inverse">
        	<div class="container">
        		<div class="navbar-header">
        			<!-- responsive nav button -->
        			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        				<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        			</button>
        			<!-- /responsive nav button -->

        			<!-- logo -->
        			<a class="navbar-brand" href="#body">
        				<!-- buka w3school buat cocokin gambar -->
        				<div id="logo">
        					 <img src="<?php echo base_url(); ?>/asset/img/logos/logo.png" style="width: 20%; height:20%; " alt="Meghna" /> 

        				</div>
        			</a>
        			<!-- /logo -->
        		</div>

        		<!-- main nav -->
        		<nav class="collapse navbar-collapse navbar-right" role="Navigation">
        			<ul id="nav" class="nav navbar-nav">
        				<li class="current"><a href="#body">Home</a></li>
        				<li><a href="#about">Tentang Kami</a></li>
        				<li><a href="#layanan">Layanan</a></li>
        				<li><a href="#showcase">Portfolio</a></li>
        				<li><a href="#our-team">Team</a></li>
        				<li><a href="#testimonial">Testimoni</a></li>
        				<li><a href="#blog">Blog</a></li>
        				<li><a href="#contact-us">Contact</a></li>
        			</ul>
        		</nav>
        		<!-- /main nav -->

        	</div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->

	<!--
		Start About Section
		==================================== -->
		<section id="about" class="bg-one">
			<div class="container">
				<div class="row">

					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
						<h2>About <span class="color">Us</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- About item -->
					<div class="col-md-6 text-center wow fadeInUp" data-wow-duration="500ms" >
						<div class="wrap-about">							
							<div class="icon-box">
								<i class="fa fa-lightbulb-o fa-4x"></i>
							</div>					
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3 class="about-color">Visi</h3>								
								<p class="about-text">Menjadi Perusahaan kontraktor dibidang jasa Desain arsitektur, interior, dengan pengerjaan konstruksi yang meliputi dibidang perumhaan, gedung, konstruksi baja, dengan ditunjang Total Qualty Management yang memberikan Total Quality Service bagi para pengguna jasa di seluruh Indonesia</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->
					<div class="col-md-6 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
						<div class="wrap-about">
							<div class="icon-box">
								<i class="fa fa-users fa-4x"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3 class="about-color">Misi</h3>
								<p class="about-text">Memberikan pelayanan, mutu dan kepuasan yang terbaik kepada pelanggan</p>
								<p class="about-text">Membangun serta menciptakan citra terbaik perusahaan</p>
								<p class="about-text">Serta turut berpartisipasi dalam pembangunan Negara</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<!--
		Start Main Features
		==================================== -->
		<section id="main-features">
			<div class="container">
				<div class="row">
					
					<!-- features item -->
					<div id="features">
						<div class="item">
							


							<!-- features media -->
							<div class="col-md-6 feature-media media-wrapper wow fadeInUp" data-wow-duration="500ms">
								<iframe src="http://player.vimeo.com/video/108018156" allowfullscreen></iframe>
							</div>
							<!-- /features media -->


							<!-- features content -->
							<div class="col-md-6 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
								<h3>CV Sandi Utama</h3>
								<p>Adalah perusahaan keluarga yang bergerak dibidang suplier maritim yang mensuplai perusahaan BUMN, PT Pal Indonesia, namun pada tahun berikutnya bergerak cepat mengembangkan sayap dengan merambah bisnis properti yang melayani desain Arsitektur dan Interior serta pembangunan pabrik , rumah tinggal, bahkan kami mengerjakan Instalasi Mechanical Electric dan dipercayai sebagai salah satu anak perusahaan Grup Bakrie yaitu PT Aneka Banusakti untuk mengerjakan pabrik serta instalasi mesinnya </p>
								<p>Kami berharap dapat menjadi bagian pembangunan Republik ini dengan mengutamakan sumber daya anak muda yang berprestasi dan mempunyai komitmen tinggi</p>
								
							</div>
							<!-- /features content -->



						</div>

					</div>
					<!-- /features item -->
					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<!--
		Start Counter Section
		==================================== -->
		
		<section id="counter" class="parallax-section">
			<div class="container">
				<div class="row">

					<!-- first count item -->
					<div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
						<div class="counters-item">
							<div>
								<span data-speed="3000" data-to="320">320</span>
							</div>
							<i class="fa fa-users fa-3x"></i>
							<h3>Klien Puas</h3>
						</div>
					</div>
					<!-- end first count item -->

					<!-- second count item -->
					<div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="counters-item">
							<div>
								<span data-speed="3000" data-to="565">565</span>
							</div>
							<i class="fa fa-check-square fa-3x"></i>
							<h3>Total Projek</h3>
						</div>
					</div>
					<!-- end second count item -->

					<!-- <!-- third count item -->
					<div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="counters-item">
							<div>
								<span data-speed="3000" data-to="95">95</span>
								<span>%</span>
							</div>
							<i class="fa fa-thumbs-up fa-3x"></i>
							<h3>Positive feedback</h3>
							
						</div>
					</div>
					<!-- end third count item --> -->
					
					<!-- fourth count item -->
					<!-- <div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="counters-item kill-margin-bottom">
							<div>
								<span data-speed="3000" data-to="2500">2500</span>
							</div>
							<i class="fa fa-coffee fa-3x"></i>
							<h3>Cups of Coffee</h3>
						</div>
					</div> -->
					<!-- end fourth count item -->
					
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->
		
		
		<!-- Start Layanan Section
			==================================== -->

			<section id="layanan" class="bg-one">
				<div class="container">
					<div class="row">

						<!-- section title -->
						<div class="title text-center wow fadeIn" data-wow-duration="500ms">
							<h2>Our <span class="color">Services</span></h2>
							<div class="border"></div>
						</div>
						<!-- /section title -->

						<!-- Single Service Item -->
						<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
							<div class="layanan-block text-center color-text">
								<h3>Konstruksi</h3>
								<p>Menerima jasa pembangunan konstruksi pabrik baja dan lainnya, dipercaya hapir 3 tahun lamanya untuk mengenmbangkan instruksi dan lainnya</p>
							</div>
						</article>
						<!-- End Single Service Item -->

						<!-- Single Service Item -->
						<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
							<div class="layanan-block text-center color-text">
								<h3>Arsitektur</h3>
								<p>Menyediakan rancang bangun pada hunian anda, berpengalaman dengan berbagai karya dan rancangan yang sudah memasuki pasar Asia</p>
							</div>
						</article>
						<!-- End Single Service Item -->

						<!-- Single Service Item -->
						<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
							<div class="layanan-block text-center color-text">
								<h3>Desain Interior</h3>
								<p>Dipercaya untuk merakit instalasi listrik pada rumah dan mempercantik tampilan hunian anda menjadi elegan</p>
							</div>
						</article>
						<!-- End Single Service Item -->
					</div> 		<!-- End row -->
				</div>   	<!-- End container -->
			</section>   <!-- End section -->


		<!-- Start Portfolio Section kurang konten -  mencari asal .app / .webz
			=========================================== -->

			<section id="showcase">
				<div class="container">
					<div class="row wow fadeInDown" data-wow-duration="500ms">
						<div class="col-lg-12">

							<!-- section title -->
							<div class="title text-center">
								<h2>Our <span class="color">Works</span></h2>
								<div class="border"></div>
							</div>
							<!-- /section title -->

							<!-- portfolio item filtering -->
							<div class="portfolio-filter clearfix">
								<ul class="text-center">
									<li><a href="javascript:void(0)" class="filter" data-filter="all">All</a></li>
									<li><a href="javascript:void(0)" class="filter" data-filter=".app">Konstruksi</a></li>
									<li><a href="javascript:void(0)" class="filter" data-filter=".web">Desain Interior</a></li>
									<li><a href="javascript:void(0)" class="filter" data-filter=".photoshop">Arsitektur</a></li>
								</ul>
							</div>
							<!-- /portfolio item filtering -->

						</div> <!-- /end col-lg-12 -->
					</div> <!-- end row -->
				</div>	<!-- end container -->

				<!-- portfolio items -->
				<div class="portfolio-item-wrapper wow fadeInUp" data-wow-duration="500ms">
					<ul id="og-grid" class="og-grid">

						<!-- single portfolio item -->	
						<li class="mix app">
							<a href="javascript:void(0)" data-largesrc="<?php echo base_url(); ?>/asset/img/portfolio/1.jpg" data-title="" data-description="">
								<img src="<?php echo base_url(); ?>/asset/img/portfolio/1.jpg" alt="Meghna">
								<div class="hover-mask">
									<h3>Azuki bean</h3>
									<span>
										<i class="fa fa-plus fa-2x"></i>
									</span>
								</div>
							</a>
						</li>
						<!-- /single portfolio item -->

						<!-- single portfolio item -->
						<li class="mix web">
							<a href="javascript:void(0)" data-largesrc="<?php echo base_url(); ?>/asset/img/portfolio/11.jpg" data-title="" data-description="">
								<img src="<?php echo base_url(); ?>/asset/img/portfolio/11.jpg" alt="Meghna">
								<div class="hover-mask">
									<h3>Veggies sunt bona vobis</h3>
									<span>
										<i class="fa fa-plus fa-2x"></i>
									</span>
								</div>
							</a>
						</li>
						<!-- /single portfolio item -->

						<!-- single portfolio item -->
						<li class="mix app">
							<a href="javascript:void(0)" data-largesrc="<?php echo base_url(); ?>/asset/img/portfolio/2.jpg" data-title="" data-description="">
								<img src="<?php echo base_url(); ?>/asset/img/portfolio/2.jpg" alt="Meghna">
								<div class="hover-mask">
									<h3>Dandelion horseradish</h3>
									<span>
										<i class="fa fa-plus fa-2x"></i>
									</span>
								</div>
							</a>
						</li>
						<!-- /single portfolio item -->

						<!-- single portfolio item -->
						<li class="mix illustrator">
							<a href="javascript:void(0)" data-largesrc="<?php echo base_url(); ?>/asset/img/portfolio/13.jpg" data-title="" data-description="">
								<img src="<?php echo base_url(); ?>/asset/img/portfolio/13.jpg" alt="Meghna">
								<div class="hover-mask">
									<h3>Dandelion horseradish</h3>
									<span>
										<i class="fa fa-plus fa-2x"></i>
									</span>
								</div>
							</a>
						</li>
						<!-- /single portfolio item -->

						<!-- single portfolio item -->
						<li class="mix web">
							<a href="javascript:void(0)" data-largesrc="<?php echo base_url(); ?>/asset/img/portfolio/11.jpg" data-title="" data-description="">
								<img src="<?php echo base_url(); ?>/asset/img/portfolio/11.jpg" alt="Meghna">
								<div class="hover-mask">
									<h3>Azuki bean</h3>
									<span>
										<i class="fa fa-plus fa-2x"></i>
									</span>
								</div>
							</a>
						</li>
						<!-- /single portfolio item -->

						<!-- single portfolio item -->
						<li class="mix web">
							<a href="javascript:void(0)" data-largesrc="<?php echo base_url(); ?>/asset/img/portfolio/2.jpg" data-title="" data-description="">
								<img src="<?php echo base_url(); ?>/asset/img/portfolio/2.jpg" alt="Meghna">
								<div class="hover-mask">
									<h3>Veggies sunt bona vobis</h3>
									<span>
										<i class="fa fa-plus fa-2x"></i>
									</span>
								</div>	
							</a>
						</li>
						<!-- /single portfolio item -->

						<!-- single portfolio item -->
						<li class="mix app">
							<a href="javascript:void(0)" data-largesrc="<?php echo base_url(); ?>/asset/img/portfolio/13.jpg" data-title="" data-description="">
								<img src="<?php echo base_url(); ?>/asset/img/portfolio/13.jpg" alt="Meghna">
								<div class="hover-mask">
									<h3>Dandelion horseradish</h3>
									<span>
										<i class="fa fa-plus fa-2x"></i>
									</span>
								</div>	
							</a>
						</li>
						<!-- /single portfolio item -->



						<!-- single portfolio item -->
						<li class="mix web">
							<a href="javascript:void(0)" data-largesrc="<?php echo base_url(); ?>/asset/img/portfolio/7.jpg" data-title="" data-description="">
								<img src="<?php echo base_url(); ?>/asset/img/portfolio/7.jpg" alt="Meghna">
								<div class="hover-mask">
									<h3>Dandelion horseradish</h3>
									<span>
										<i class="fa fa-plus fa-2x"></i>
									</span>
								</div>
							</a>
						</li>
						<!-- /single portfolio item -->



					</ul> <!-- end og grid -->
				</div>  <!-- portfolio items wrapper -->

			</section>   <!-- End section -->


		<!-- Start Team Skills emang perlu?
			=========================================== -->

			<section id="team-skills" class="parallax-section">
				<div class="container">
					<div class="row wow fadeInDown" data-wow-duration="500ms">

						<!-- section title -->
						<div class="title text-center">
							<h2>Our <span class="color">Skills</span></h2>
							<div class="border"></div>
						</div>
						<!-- /section title -->

						<!-- skill set -->
						<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
							<div class="skill-chart text-center">
								<span class="chart" data-percent="80">
									<span class="percent"></span>
								</span>
								<h3><i class="fa fa-wordpress"></i> Wordpress</h3>
								<p>Lorem ipsum has erroribus design color vituper bonorum depend you usedcom.bonorum dependan be used.</p>
							</div>
						</div>
						<!-- end skill set -->

						<!-- skill set -->
						<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
							<div class="skill-chart text-center">
								<span class="chart" data-percent="90">
									<span class="percent">86</span>
								</span>
								<h3><i class="fa fa-html5"></i> HTML 5</h3>
								<p>Lorem ipsum has erroribus design color vituper bonorum depend you usedcom.bonorum dependan be used.</p>
							</div>
						</div>
						<!-- end skill set -->

						<!-- skill set -->
						<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
							<div class="skill-chart text-center">
								<span class="chart" data-percent="85">
									<span class="percent"></span>
								</span>
								<h3><i class="fa fa-android"></i> Android</h3>
								<p>Lorem ipsum has erroribus design color vituper bonorum depend you usedcom.bonorum dependan be used.</p>
							</div>
						</div>
						<!-- end skill set -->

						<!-- skill set -->
						<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
							<div class="skill-chart text-center">
								<span class="chart" data-percent="70">
									<span class="percent"></span>
								</span>
								<h3><i class="fa fa-apple"></i> IOS</h3>
								<p>Lorem ipsum has erroribus design color vituper bonorum depend you usedcom.bonorum dependan be used.</p>
							</div>
						</div>
						<!-- end skill set -->

					</div>  		<!-- End row -->
				</div>   	<!-- End container -->
			</section>   <!-- End section -->

		<!-- Start Our Team
			=========================================== -->

			<section id="our-team">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">

						<!-- section title -->
						<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
							<h2>Our <span class="color">Team</span></h2>
							<div class="border"></div>
						</div>
						<!-- /section title -->

						<!-- team member -->
						<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms">
							<article class="team-mate">
								<div class="member-photo">
									<!-- member photo -->
									<img class="img-responsive" src="<?php echo base_url(); ?>/asset/img/team/member-1.jpg" alt="Meghna">
									<!-- /member photo -->

									<!-- member social profile -->
									<div class="mask">
										<ul class="clearfix">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										</ul>
									</div>
									<!-- /member social profile -->
								</div>

								<!-- member name & designation -->
								<div class="member-title">
									<h3>Drs, Machfud.EC</h3>
									<span>Komisaris</span>
								</div>
								<!-- /member name & designation -->

								<!-- about member -->
								<div class="member-info">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
								</div>
								<!-- /about member -->

							</article>
						</div>
						<!-- end team member -->

						<!-- team member -->
						<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
							<article class="team-mate">
								<div class="member-photo">
									<!-- member photo -->
									<img class="img-responsive" src="<?php echo base_url(); ?>/asset/img/team/9.jpg" alt="Meghna">
									<!-- /member photo -->

									<!-- member social profile -->
									<div class="mask">
										<ul class="clearfix">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										</ul>
									</div>
									<!-- /member social profile -->
								</div>

								<!-- member name & designation -->
								<div class="member-title">
									<h3>Asmara Hadi.ST</h3>
									<span>Direktur</span>
								</div>
								<!-- /member name & designation -->

								<!-- about member -->
								<div class="member-info">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
								</div>
								<!-- /about member -->
							</article>
						</div>
						<!-- end team member -->

						<!-- team member -->
						<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
							<article class="team-mate">
								<div class="member-photo">
									<!-- member photo -->
									<img class="img-responsive" src="<?php echo base_url(); ?>/asset/img/team/member-1.jpg" alt="Meghna">
									<!-- /member photo -->

									<!-- member social profile -->
									<div class="mask">
										<ul class="clearfix">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										</ul>
									</div>
									<!-- /member social profile -->
								</div>

								<!-- member name & designation -->
								<div class="member-title">
									<h3>Yastawi</h3>
									<span>Project Manager, Desain Interior</span>
								</div>
								<!-- /member name & designation -->

								<!-- about member -->
								<div class="member-info">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
								</div>
								<!-- /about member -->
							</article>
						</div>
						<!-- end team member -->

						<!-- team member -->
						<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
							<article class="team-mate kill-margin-bottom">
								<div class="member-photo">
									<!-- member photo -->
									<img class="img-responsive" src="<?php echo base_url(); ?>/asset/img/team/member-1.jpg" alt="Meghna">
									<!-- /member photo -->

									<!-- member social profile -->
									<div class="mask">
										<ul class="clearfix">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										</ul>
									</div>
									<!-- /member social profile -->
								</div>

								<!-- member name & designation -->
								<div class="member-title">
									<h3>Dani Prayitna.ST</h3>
									<span>Project Manager</span>
								</div>
								<!-- /member name & designation -->

								<!-- about member -->
								<div class="member-info">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
								</div>
								<!-- /about member -->
							</article>
						</div>
						<!-- end team member -->
					</div>
					</div>  	<!-- End row -->
				</div>   	<!-- End container -->
			</section>   <!-- End section -->





		<!-- Start Testimonial
			=========================================== -->

			<section id="testimonial" class="parallax-section">
				<div class="container">
					<div class="row">				
						<div class="col-lg-12">

							<!-- section title -->
							<div class="sub-title text-center wow fadeInDown" data-wow-duration="500ms">
								<h3>What People Say About Us</h3>
							</div>
							<!-- /section title -->

							<!-- testimonial wrapper -->
							<div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">

								<!-- testimonial single -->
								<div class="item text-center">

									<!-- client photo -->
									<div class="client-thumb">
										<img src="<?php echo base_url(); ?>/asset/img/team/client.jpg" class="img-responsive" alt="Meghna">
									</div>
									<!-- /client photo -->

									<!-- client info -->
									<div class="client-info">
										<div class="client-meta">
											<h3>Abul Mal Muhit</h3>
											<span>Dec 26, 2014</span>
										</div>
										<div class="client-comment">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ex, cupiditate, error, suscipit saepe sed ea consequuntur inventore sequi sit illo.</p>
											<ul class="social-profile">
												<li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- /client info -->
								</div>
								<!-- /testimonial single -->

								<!-- testimonial single -->
								<div class="item text-center">

									<!-- client photo -->
									<div class="client-thumb">
										<img src="<?php echo base_url(); ?>/asset/img/team/client.jpg" class="img-responsive" alt="Meghna">
									</div>
									<!-- /client photo -->

									<!-- client info -->
									<div class="client-info">
										<div class="client-meta">
											<h3>Abul Mal Muhit</h3>
											<span>Dec 26, 2014</span>
										</div>
										<div class="client-comment">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ex, cupiditate, error, suscipit saepe sed ea consequuntur inventore sequi sit illo.</p>
											<ul class="social-profile">
												<li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- /client info -->
								</div>
								<!-- /testimonial single -->

								<!-- testimonial single -->
								<div class="item text-center">

									<!-- client photo -->
									<div class="client-thumb">
										<img src="<?php echo base_url(); ?>/asset/img/team/client.jpg" class="img-responsive" alt="Meghna">
									</div>
									<!-- /client photo -->

									<!-- client info -->
									<div class="client-info">
										<div class="client-meta">
											<h3>Abul Mal Muhit</h3>
											<span>Dec 26, 2014</span>
										</div>
										<div class="client-comment">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ex, cupiditate, error, suscipit saepe sed ea consequuntur inventore sequi sit illo.</p>
											<ul class="social-profile">
												<li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- /client info -->
								</div>
								<!-- /testimonial single -->

							</div>		<!-- end testimonial wrapper -->
						</div> 		<!-- end col lg 12 -->
					</div>	    <!-- End row -->
				</div>       <!-- End container -->
			</section>    <!-- End Section -->


		<!--
		Start Blog Section
		=========================================== -->

		<section id="blog" class="bg-one">
			<div class="container">
				<div class="row">

					<!-- section title -->
					<div class="title text-center wow fadeInDown">
						<h2> Latest <span class="color">Posts</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->

					<div class="clearfix">

						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
							<div class="note">
								<div id="gallery-post" class="media-wrapper">
									<div class="item">
										<img src="<?php echo base_url(); ?>/asset/img/blog/amazing-caves-coverimage.jpg" alt="amazing caves coverimage" class="img-responsive">
									</div>

									<div class="item">
											<img src="<?php echo base_url(); ?>/asset/img/blog/amazing-caves-coverimage.jpg" alt="amazing caves coverimage" class="img-responsive">
									</div>
								</div>
								<div class="excerpt">
									<h3>Simple Image Post</h3>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
									<a class="btn btn-col" href="<?php echo site_url('home/kePos')?>">Read more</a>
								</div>
							</div>						
						</article>
						<!-- /single blog post -->
						
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
							<div class="note">
								<div id="gallery-post" class="media-wrapper">
									<div class="item">
										<img src="<?php echo base_url(); ?>/asset/img/blog/amazing-caves-coverimage.jpg" alt="amazing caves coverimage" class="img-responsive">
									</div>
									<div class="item">
										<img src="<?php echo base_url(); ?>/asset/img/blog/bicycle.jpg" alt="Flying bicycle" class="img-responsive">
									</div>
									<div class="item">
										<img src="<?php echo base_url(); ?>/asset/img/blog/3D-beach-art.jpg" alt="3D Beach Art | Meghna" class="img-responsive">
									</div>
								</div>
								
								<div class="excerpt">
									<h3>Simple Slider Post</h3>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
									<a class="btn btn-col" href="<?php echo site_url('home/kePos')?>">Read more</a>
								</div>
							</div>						
						</article>
						<!-- end single blog post -->
						
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
							<div class="note">
								<div class="media-wrapper">
									<img src="<?php echo base_url(); ?>/asset/img/blog/amazing-caves-coverimage.jpg" alt="amazing caves coverimage" class="img-responsive">
								</div>
								
								<div class="excerpt">
									<h3>Simple Image Post</h3>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
									<a class="btn btn-col" href="<?php echo site_url('home/kePos')?>">Read more</a>
								</div>
							</div>						
						</article>
						<!-- end single blog post -->
						
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
							<div class="note kill-margin-bottom">
								<div class="media-wrapper">
									<img src="<?php echo base_url(); ?>/asset/img/blog/amazing-caves-coverimage.jpg" alt="amazing caves coverimage" class="img-responsive">
								</div>
								<div class="excerpt">
									<h3>Simple Image Post</h3>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
									<a class="btn btn-col" href="<?php echo site_url('home/kePos')?>">Read more</a>
								</div>
							</div>						
						</article>
						<!-- end single blog post -->
					</div>

					<div class="all-post text-center">
						<a class="btn btn-col" href="<?php echo site_url('home/keBlog')?>">View All Post</a>
					</div>

				</div> <!-- end row -->
			</div> <!-- end container -->
		</section> <!-- end section -->
	
	<?php
	$this->load->view('fpFooter');
	?>