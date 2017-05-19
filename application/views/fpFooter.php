<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Srart Contact Us
		=========================================== -->		
		<section id="contact-us" class="parallax-section">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>Get In <span class="color">Touch</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- Contact Details -->
					<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
						<h3 class="coment1">Hubungi Kami</h3>
						<p class="coment1">Untuk lebih jelas silahkan hubungi kami setiap saat.</p>
						<div class="contact-details">
							<div class="con-info clearfix">
								<i class="fa fa-home fa-lg"></i>
								<span>Taman Puspa Sari S 50, Candi Sidoarjo.</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-phone fa-lg"></i>
								<span>Phone: 031-8066526</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-fax fa-lg"></i>
								<span>Fax: 031-8066526</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-envelope fa-lg"></i>
								<span>Email: asmara2000@gmail.com</span>
							</div>
						</div>
					</div>
					<!-- / End Contact Details -->
						
					<!-- Contact Form -->
					<div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
						<form id="contact-form" method="post" action="sendmail.php" role="form">
						
							<div class="form-group">
								<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
							</div>
							
							<div class="form-group">
								<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
							</div>
							
							<div class="form-group">
								<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
							</div>
							
							<div class="form-group">
								<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
							</div>
							
							<div id="mail-success" class="success">
								Thank you. The Mailman is on His Way :)
							</div>
							
							<div id="mail-fail" class="error">
								Sorry, don't know what happened. Try later :(
							</div>
							
							<div id="cf-submit">
								<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
							</div>						
							
						</form>
					</div>
					<!-- ./End Contact Form -->
				
				</div> <!-- end row -->
			</div> <!-- end container -->
			
			<!-- <!-- Google Map -->
			<!-- <div class="google-map wow fadeInDown" data-wow-duration="500ms"> -->
				<!-- <div id="map-canvas"></div> -->
			<!-- </div>	
			<!-- /Goo --><!-- gle Map --> 
			
		<!-- </section>  --><!-- end section -->
		 
		<!-- end Contact Area
		========================================== -->
		
		<footer id="footer" class="bg-one">
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">
						
						<!-- Footer Social Links -->
						<div class="social-icon">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<!--/. End Footer Social Links -->

						<!-- copyright -->
						<!-- <div class="copyright text-center">
							<a href="index.html">
								<img src="<?php echo base_url(); ?>/asset/img/logo-meghna.png" alt="Meghna" /> 
							</a>
							<br />
							
							<p>Design And Developed by <a href="http://www.themefisher.com"> Themefisher Team</a>. Copyright &copy; 2015. All Rights Reserved.</p>
						</div>
						<!-- /copyright --> -->
						
					</div> <!-- end col lg 12 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</footer> <!-- end footer -->
		
		<!-- Back to Top
		============================== -->
		<a href="javascript:;" id="scrollUp">
			<i class="fa fa-angle-up fa-2x"></i>
		</a>
		
		<!-- end Footer Area
		========================================== -->
	</section>
</body>
		
		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script src="<?php echo base_url(); ?>/asset/js/jquery-1.12.2.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
		<!-- Slitslider -->
		<script src="<?php echo base_url(); ?>/asset/js/jquery.slitslider.js"></script>
		<script src="<?php echo base_url(); ?>/asset/js/jquery.ba-cond.min.js"></script>
		<!-- Parallax -->
		<script src="<?php echo base_url(); ?>/asset/js/jquery.parallax-1.1.3.js"></script>
		<!-- Owl Carousel -->
		<script src="<?php echo base_url(); ?>/asset/js/owl.carousel.min.js"></script>
		<!-- Portfolio Filtering -->
		<script src="<?php echo base_url(); ?>/asset/js/jquery.mixitup.min.js"></script>
		<!-- Custom Scrollbar -->
		<script src="<?php echo base_url(); ?>/asset/js/jquery.nicescroll.min.js"></script>
		<!-- Jappear js -->
		<script src="<?php echo base_url(); ?>/asset/js/jquery.appear.js"></script>
		<!-- Pie Chart -->
		<script src="<?php echo base_url(); ?>/asset/js/easyPieChart.js"></script>
		<!-- jQuery Easing -->
		<script src="<?php echo base_url(); ?>/asset/js/jquery.easing-1.3.pack.js"></script>
		<!-- tweetie.min -->
		<script src="<?php echo base_url(); ?>/asset/js/tweetie.min.js"></script>
		<!-- Google Map API -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Highlight menu item -->
		<script src="<?php echo base_url(); ?>/asset/js/jquery.nav.js"></script>
		<!-- Sticky Nav -->
		<script src="<?php echo base_url(); ?>/asset/js/jquery.sticky.js"></script>
		<!-- Number Counter Script -->
		<script src="<?php echo base_url(); ?>/asset/js/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script src="<?php echo base_url(); ?>/asset/js/wow.min.js"></script>
		<!-- For video responsive -->
		<script src="<?php echo base_url(); ?>/asset/js/jquery.fitvids.js"></script>
		<!-- Grid js -->
		<script src="<?php echo base_url(); ?>/asset/js/grid.js"></script>
		<!-- Custom js -->
		<script src="<?php echo base_url(); ?>/asset/js/custom.js"></script>
