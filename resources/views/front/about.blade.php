@extends('layouts.ucok')

@section('content')
	<div class="sub-banner-wthree">
		<h3>About Us</h3>
	</div>
	<div class="about-w3layouts">
		
	      <div class="col-md-6 about-left-w3-agileits">
		    <div id="top" class="callbacks_container">
					<ul class="rslides" id="slider4">
						<li>
							  <div class="ser-info wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">
								<h3>Luxury Designer Brands</h3>
								<p>SALE OFF 25% TO 70% OFF</p>
								</div>

						</li>
						<li>
						   <div class="ser-info wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">
								<h3>Get Deals & Discounts</h3>
								<p>GET MIN 40% OFF</p>
								</div>
						</li>
					</ul>
	  	         </div>	
				</div>	
		       <script src="js/responsiveslides.min.js"></script>
			     <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:false,
			        nav:true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
		   <div class="col-md-6 about-text-w3ls">
			         <h1>OLDshop Deskripsi</h1>
					<p>Pentingnya Seragam Untuk Perusahaan

	Sebuah perusahaan memang harus menggunakan seragam kerja, oleh karena itu seragam memanglah sangat penting untuk perusahaan. Adapun alasan pentingnya seragam bagi perusahaan yaitu:

	Dengan mengenakan seragam, para karyawan akan mudah dikenali. Hal ini dapat membantu perusahaan untuk mendata siapa saja yang masih bekerja di perusahaan tersebut.
	Seragam merupakan alat promosi yang paling ampuh untuk menjual produk bagi perusahaan tersebut. Perusahaan dapat menghemat biaya promosi karena setiap karyawan yang sedang ditugaskan diluar atau sedang berada di jalan akan mudah melakukan promosi dengan melihatkan seragam tersebut.
	Seragam merupakan suatu identitas perusahaan. Oleh karena itu, suatu perusahaan akan mudah dikenali dengan seragam yang telah di desain.</p>
					<p class="agileits-wthree"></p>
					<a href="single.html" class="spcl">Read More</a> 

		  </div>
		  <div class="clearfix"></div>
	  </div>
	<!--//about-->
	<div class="about-bottom">
		<div class="container">
			<h3>WE HAVE THE LATEST COLLECTION</h3>
			<p>Maecenas bibendum dui nec interdum commodo. Etiam a lorem nisi. In hac habitasse platea dictumst. Vivamus id condimentum metus. Duis id vestibulum magna, nec vehicula urna.</p>
			<a href="single.html">Read More</a>
		</div>
	</div>
<!--team-->
			<div class="team-section">
				<div class="container">
					<h2>Our Designers</h2>
					<div class="team-grids">
						<div class="col-md-4 team-grid">
							<div class="ih-item circle effect1"><a href="#">
								<div class="spinner"></div>
								<div class="img"><img src="images/t3.jpg" alt="img"></div>
								<div class="info">
								  <div class="info-back">
									<h4>Victoria</h4>
									<span>Description goes here</span>
								  </div>
								</div></a>
							</div>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
							<div class="about-social-icons-w3-agile">
								<ul>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 team-grid team-grid2">
							<div class="ih-item circle effect1"><a href="#">
								<div class="spinner"></div>
									<div class="img"><img src="images/t1.jpg" alt="img"></div>
								<div class="info">
									<div class="info-back">
										<h4>Jhone Doe</h4>
										<span>Description goes here</span>
								  </div>
								</div></a>
							</div>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
							<div class="about-social-icons-w3-agile">
								<ul>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 team-grid">
							<div class="ih-item circle effect1"><a href="#">
								<div class="spinner"></div>
									<div class="img"><img src="images/t2.jpg" alt="img"></div>
								<div class="info">
									<div class="info-back">
										<h4>Kathy Doe</h4>
										<span>Description goes here</span>
								  </div>
								</div></a>
							</div>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
							<div class="about-social-icons-w3-agile">
								<ul>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			
			@endsection