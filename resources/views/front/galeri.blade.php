@extends('layouts.ucok')

@section('content')
	<div class="sub-banner-wthree">
		<h2>Gallery OLDshop</h2> 
	</div>
<!-- portfolio --> 
	<div id="portfolio" class="portfolio w3layouts-gal">
		<div class="container">
				
			<div class="gallery_gds">
				<ul class="simplefilter">
					<li class="active" data-filter="all">All</li>
					<li data-filter="1">Category 1</li>
					<li data-filter="2">Category 2</li>
					<li data-filter="3">Category 3</li>
				</ul>
				<div class="filtr-container">
					<div class="col-md-4 filtr-item" data-category="1, 4" data-sort="Busy streets">
						<div class="agileits-img">
							<a href="images/uu.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
								<img class="img-responsive img-style row2" src="images/uu.jpg" alt=""  /> 
							</a> 
						</div>
					</div>
					<div class="col-md-4 filtr-item" data-category="2, 3" data-sort="Luminous night">
						<div class="agileits-img">
							<a href="images/tr.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
								<img src="images/tr.jpg" alt="" class="img-responsive img-style row2" />
							</a>	
						</div>
					</div>
					<div class="col-md-4 filtr-item" data-category="1, 4" data-sort="City wonders">
						<div class="agileits-img">
							<a href="images/fa.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
								<img src="images/fa.jpg" alt="" class="img-responsive img-style row2" />
							</a>	
						</div>
					</div>
					<div class="col-md-4 filtr-item" data-category="3, 4" data-sort="Industrial site">
						<div class="agileits-img">
							<a href="images/uy.jpg" class="swipebox" title="Praesent non purus fermentum, eleifend velit non Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis.">
								<img src="images/uy.jpg" alt="" class="img-responsive img-style row2" />
							</a>	
						</div>
					</div>
					<div class="col-md-4 filtr-item" data-category="3" data-sort="In production">
						<div class="agileits-img">
							<a href="images/g5.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
								<img src="images/g5.jpg" alt="" class="img-responsive img-style row2" />
							</a>	
						</div>
					</div>
					<div class="col-md-4 filtr-item" data-category="2, 4" data-sort="Peaceful lake">
						<div class="agileits-img">
							<a href="images/g6.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
								<img src="images/g6.jpg" alt="" class="img-responsive img-style row2" />
							</a>	
						</div>
					</div>
					<div class="col-md-4 filtr-item" data-category="1, 4" data-sort="Busy streets">
						<div class="agileits-img">
							<a href="images/g1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
								<img class="img-responsive img-style row2" src="images/g1.jpg" alt=""  /> 
							</a> 
						</div>
					</div>
					
					<div class="col-md-4 filtr-item" data-category="1, 4" data-sort="City wonders">
						<div class="agileits-img">
							<a href="images/g3.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
								<img src="images/g3.jpg" alt="" class="img-responsive img-style row2" />
							</a>	
						</div>
					</div>
					<div class="col-md-4 filtr-item" data-category="2, 3" data-sort="Luminous night">
						<div class="agileits-img">
							<a href="images/g2.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
								<img src="images/g2.jpg" alt="" class="img-responsive img-style row2" />
							</a>	
						</div>
					</div>
				   <div class="clearfix"> </div>
				</div>
			</div>
		</div>  
	</div>    
	<!-- //portfolio-->
		@endsection