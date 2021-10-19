<?php
//Page type: ABC Tuition Centre Landing Page

$PageTitle="ABC Tuition Centre"; //page title

require_once('header.php'); //includes consistent header element
?>
<!--main page content-->
<main>
	<!--parallax banner section start-->
	<section class="banner-img valign-wrapper">
		<a class="btn-floating amber accent-4 pulse section" href="#courses_section"><i class="material-icons">arrow_drop_down</i></a> <!--interactive arrow-->
	</section> <!--parallax banner section end-->

	<!--courses section-->
	<section class="margin-bottom-40" id="courses_section">
		<div class="container-fluid">	
			<div class="row">	
				<div class="col s12">	
					<h3 class="section-title">Courses</h3> <!--section title-->
				</div>	
			</div>	
			<div class="card-flex">
				<?php include_once('courses.php');?> <!--populate courses from course.php file-->
			</div><!--card-flex end-->
		</div><!--container-fluid end-->	
	</section><!--courses section end-->

	<!--Testimonial section-->
	<section>	
		<div class="carousel carousel-slider center grey  lighten-3" style="min-height: 450px;">
	 		<div class="carousel-fixed-item center">
		      	<h3 class="section-title">Why Study With Us?</h3> <!--section title-->
		    </div><!--carousel fixed item-->

		    <!--carousel item 1-->
	 		<div class="carousel-item grey  lighten-3 " href="#one!">
	 			<div class="carousel-content container ">		 				
	 				<h2>Best Academy Ever!!</h2>
	 				<div class="media">
	 					<div class="media-right">
		 					 <img src="images/student_1.jpg" alt="Ashley Smith" class="circle circle-img pos-right"> <!-- student image-->
		 				</div><!--media end - image holder-->
			      		<div class=" media-body">
		      				<div class="quote">
			      				<p class="align-justify">ABC Tuition Centre is by far the best tuition academy in Malaysia. The academy offers a variety of courses covering a wide range of subject areas at all levels of education. The lecturers are highly qualified and they adjust their teaching methodology based on your personal learning style. I will definitely recommend you to study with this instituition</p>
			      			</div><!--quote end-->
			      		</div><!--media-body end-->
	 				</div><!--media end-->
	 				<cite class="color-green" style="font-style: italic;">&hyphen;&hyphen;&nbsp;Ashley Smith</cite> <!--student name-->
	 			</div><!--carousel-content end-->
		    </div><!--carousel item 1 end-->

		    <!--carousel item 2-->
		    <div class="carousel-item grey  lighten-3 " href="#two!">
	 			<div class="carousel-content container">
		      		<h2>Good Learning Experience</h2>
		      		<div class="media">
	 					<div class="media-right">
		 					 <img src="images/student_2.jpg" alt="Suzanne John" class="circle circle-img pos-left"> <!-- student image -->
		 				</div>
			      		<div class=" media-body">
			      			<div class="quote">
			      				<p class="align-justify">The learning experience is great. Lecturers are very highly qualified and make learning more engaging for students. I am able to understand my subject areas very well thanks to the academy. </p>
			      			</div><!--quote end-->
			      		</div><!--media-body end-->
	 				</div><!--media end-->
		      		<cite class="color-green" style="font-style: italic;">&hyphen;&hyphen;&nbsp;Suzanne John</cite> <!--student name-->
	 			</div><!--carousel-content end-->
		    </div><!--carousel item 1 end-->

		    <!--carousel item 3-->
			    <div class="carousel-item grey  lighten-3 " href="#two!">
		 			<div class="carousel-content container">
			      		<h2>Learnt A lot</h2>
			      		<div class="media">
		 					<div class="media-right">
			 					 <img src="images/student_3.jpg" alt="Michael" class="circle circle-img pos-right"> <!-- student image -->
			 				</div><!-- student image holder-->
				      		<div class=" media-body">
				      			<div class="quote">
				      				<p class="align-justify">I learned a lot while enrolled in ABC Tuition Centre. My grades improved a great deal and I began to enjoy studying. The lecturers make the classes very engaging. The courses are very comprehensive and relavant to your subject area so they cover all the necessary details you may need. </p>
				      			</div><!--quote end-->
			      		</div><!--media-body end-->
	 				</div><!--media end-->
		      		<cite class="color-green" style="font-style: italic;">&hyphen;&hyphen;&nbsp;Michael</cite> <!--student name-->
	 			</div><!--carousel-content end-->
		    </div><!--carousel item 1 end-->
		</div><!--carousel end--> 
	</section><!--testimonial section end--> 
</main><!--main body section end-->

<!--homepage footer different from other pages--> 
<footer class="page-footer">
  <div class="container-fluid">
    <div class="row">
    <!--about and social media column-->	
      <div class="col l4  s12">
        <a><img src="images/logo-lg.png" alt="ABC Tuition Centre"></a><!--logo-->
        <p class="grey-text text-lighten-3 align-justify margin-bottom-20">ABC Tuition Centre is Malaysia’s leading tuition academy with over 5000 students enrolled in 11 different branches located nationwide. We try to provide our students with a personalized learning experience catering to every student's needs to give them the best possible education.</p> <!--company description-->

        <hr class="margin-top-20">

        <ul class="social-media">
        	<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        	<li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        	<li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        	<li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        </ul> <!--social media icons-->
      </div><!--about and social media column end-->

      <!--quick contact column-->
      <div class="col l3 m6 offset-l1 s12">
        <h5 class="white-text">Quick Contact</h5>
        <ul class="font-14">
          	<li class="margin-bottom-5">
              	<a class="grey-text text-lighten-3" href="tell:+60112345678">
              		<i class="contact-icon tiny material-icons">call</i>
					+60-11-12345678
				</a> <!--clickable company phone number. This feature will only work on mobile devices-->
			</li>
          	<li class="margin-bottom-5">
          		<a class="grey-text text-lighten-3" href="mailto:info@abctuitioncentre.com?Subject=Hello%20ABC%20Tuition%20Centre" target="_blank">
          			<i class="contact-icon tiny material-icons">email</i>
          			info@abctuitioncentre.com
          		</a> <!--clickable company email-->
			</li>
          <li class="grey-text text-lighten-3">
          	<i class="material-icons tiny contact-icon">business</i>
          		ABC Tuition Centre HQ, 
          	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jalan Teknologi,
          	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kota Damansara - 47810,
          	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Petaling Jaya, Selangor 
          </li>
        </ul> <!-- contact details-->      
      </div><!--quick contact column end-->
      <!--Subcscription column-->
      <div class="col l4 m6 s12">
        <h5 class="white-text">Stay connected</h5>
        <p class="grey-text text-lighten-4">Subscribe to our Newsletter to stay tuned with latest events and course listings</p>
        <form method="post">
	        <div class="input-field ">
	          <input id="email_list" type="email" name="email_list" class="validate">
	          <label for="email_list">Email</label>
	          <span class="helper-text" data-error="Invalid Email Address"></span>
	        </div>
	        <button class="btn waves-effect waves-light modal-trigger" data-target="subscription-model" type="submit" name="email_list">Subscribe
				<i class="material-icons right">send</i>
				</button> <!--triggers model-->
	    </form>
      </div> <!--Subcscription column end-->
    </div><!--row end-->
  </div><!--container-fluid end-->

  <!--company copyrights-->
  <div class="footer-copyright">
    <div class="container-fluid">
    	<div class="row margin-0">
    		<div class="col   s12">
          		<h6 class="font-14 align-center">&copy; 2020 ABC Tuition Centre</h6>
          	</div>	<!--company copyright--> 	
    	</div>	<!--row-->		    
    </div> <!--container-->
  </div> <!--copyright container-->
</footer> <!--end of footer-->

<!--JavaScript at end of body for optimized loading-->
<script src="js/jquery.js" ></script> <!--minified jquery-->
<script src="js/materialize.min.js"></script><!--materialize jquery-->
<script src="https://kit.fontawesome.com/4e1640f996.js" crossorigin="anonymous"></script> <!--fontawesome jquery-->    
<script>
 	$(document).ready(function(){
	    $('.modal').modal(); //modal initialization
	    $('.materialboxed').materialbox();
	    $('.carousel.carousel-slider').carousel({
	    	duration: 200,
		    fullWidth: true,
		    indicators: true
		  }); //carousel initialization
  	});
</script>
</body>
</html>