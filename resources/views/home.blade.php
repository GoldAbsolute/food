@extends('layouts.app')
 
@section('title', 'Home page')

@section('styles')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">

<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/aos.css">

<link rel="stylesheet" href="css/ionicons.min.css">

<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/jquery.timepicker.css">


<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
@stop


@section('content')
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Kusina</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="{{ url('/home') }}" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="{{ url('/specialties') }}" class="nav-link">Specialties</a></li>
	        	<li class="nav-item"><a href="{{ url('/reservation') }}" class="nav-link">Reservation</a></li>
	        	<li class="nav-item"><a href="{{ url('/stories') }}" class="nav-link">Stories</a></li>
	          <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider js-fullheight owl-carousel bg-white">
      <div class="slider-item js-fullheight">
      	<div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_3.jpg);">
          		<div class="overlay"></div>
          	</div>
	          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<div class="text mt-md-5">
		            <h1 class="mb-4">Eat Healthy <br> and Natural Foods</h1>
		            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
		            <div class="thumb mt-4 mb-3 d-flex">
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-1.jpg);"></div>
		            		<h4>Australian Organic Beef</h4>
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-2.jpg);"></div>
		            		<h4>Australian Organic Beef</h4>
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-3.jpg);"></div>
		            		<h4>Australian Organic Beef</h4>
		            	</a>
		            </div>
		            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Book A Table</a></p>
	            </div>
	          </div>
        	</div>
        </div>
      </div>

      <div class="slider-item js-fullheight">
      	<div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_2.jpg);">
          		<div class="overlay"></div>
          	</div>
	          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<div class="text mt-md-5">
		            <h1 class="mb-4">We Love <br> Delicious Foods</h1>
		            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
		            <div class="thumb mt-4 mb-3 d-flex">
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-1.jpg);"></div>
		            		<h4>Australian Organic Beef</h4>
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-2.jpg);"></div>
		            		<h4>Australian Organic Beef</h4>
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-3.jpg);"></div>
		            		<h4>Australian Organic Beef</h4>
		            	</a>
		            </div>
		            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Book A Table</a></p>
	            </div>
	          </div>
        	</div>
        </div>
      </div>
    </section>
	

		<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-sm-5 img img-2 d-flex align-items-center justify-content-center justify-content-md-end" style="background-image: url(images/about.jpg); position: relative">
						<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
  						<span class="ion-ios-play"></span>
  					</a>
					</div>
					<div class="col-sm-7 wrap-about py-5 ftco-animate">
	          <div class="heading-section mt-5 mb-4">
	          	<div class="pl-lg-5 ml-md-5">
		          	<span class="subheading">About</span>
		            <h2 class="mb-4">Welcome to Kusina Restaurant</h2>
	            </div>
	          </div>
	          <div class="pl-lg-5 ml-md-5">
							<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							<h3 class="mt-5">Special Recipe</h3>
							<div class="thumb my-4 d-flex">
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url(images/lunch-4.jpg);"></div>
	            		<h4>Australian Organic Beef</h4>
	            	</a>
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url(images/lunch-7.jpg);"></div>
	            		<h4>Australian Organic Beef</h4>
	            	</a>
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url(images/lunch-6.jpg);"></div>
	            		<h4>Australian Organic Beef</h4>
	            	</a>
	            </div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-10">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="18">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="20000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="564">0</strong>
		                <span>Finished Projects</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Working Days</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Specialties</span>
            <h2 class="mb-4">Our Menu</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Breakfast</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/breakfast-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/breakfast-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/breakfast-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Lunch</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/lunch-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/lunch-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/lunch-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Dinner</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/dinner-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/dinner-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/dinner-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>

        	<!--  -->
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Desserts</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/dessert-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/dessert-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/dessert-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>
        	
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Wine Card</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/wine-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/wine-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/wine-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Drinks</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/drink-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/drink-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/drink-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-12 text-center ftco-animate">
        		<p><a href="#" class="btn btn-black py-3 px-5">View All Menu</a></p>
        	</div>
        </div>
    	</div>

    </section>

    <section class="ftco-section testimony-section" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Happy Customer</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-7">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
			
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Chef</span>
            <h2 class="mb-4">Our Mater Chef</h2>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/chef-4.jpg);"></div>
							<div class="text px-4 pt-4">
								<h3>John Smooth</h3>
								<span class="position mb-2">CEO, Co Founder</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/chef-2.jpg);"></div>
							<div class="text px-4 pt-4">
								<h3>Rebeca Welson</h3>
								<span class="position mb-2">Head Chef</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/chef-3.jpg);"></div>
							<div class="text px-4 pt-4">
								<h3>Kharl Branyt</h3>
								<span class="position mb-2">Chef</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/chef-1.jpg);"></div>
							<div class="text px-4 pt-4">
								<h3>Luke Simon</h3>
								<span class="position mb-2">Chef</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row d-flex">
          <div class="col-md-5 ftco-animate img img-2" style="background-image: url(images/bg_6.jpg);"></div>
          <div class="col-md-7 ftco-animate makereservation p-4 p-md-5">
          	<div class="heading-section ftco-animate mb-5">
	          	<span class="subheading">Book a Table</span>
	            <h2 class="mb-4">Make Reservation</h2>
	          </div>
            <form action="#">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" placeholder="Your Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="Your Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" placeholder="Phone">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" id="book_date" placeholder="Date">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Time</label>
                    <input type="text" class="form-control" id="book_time" placeholder="Time">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Person</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Person</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4+</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group">
                    <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
			</div>
		</section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Kusina</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Open Hours</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Sunday</span><span> Closed</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Newsletter</h2>
            	<p>Far far away, behind the word mountains, far from the countries.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Instagram</h2>
              <div class="thumb d-sm-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
	            	</a>
	            </div>
	            <div class="thumb d-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
	            	</a>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/jquery.waypoints.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/aos.js"></script>
  <script src="/js/jquery.animateNumber.min.js"></script>
  <script src="/js/bootstrap-datepicker.js"></script>
  <script src="/js/jquery.timepicker.min.js"></script>
  <script src="/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/js/google-map.js"></script>
  <script src="/js/main.js"></script>
    
@stop