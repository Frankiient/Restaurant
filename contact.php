<?php 
  include 'heading/heading-link.php';
?>

  <body>
    <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 0123 4567 89</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Feliciano</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
	        	<li class="nav-item"><a href="blog.php" class="nav-link">Stories</a></li>
            <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="cart.php" class="nav-link">Your cart</a></li>
	          <li class="nav-item cta"><a href="reservation.php" class="nav-link">Book a table</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Contact</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
						<h2 class="h4 mb-2 mb-md-5 font-weight-bold">Contact Us</h2>
						<form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div id="map"></div>
					</div>
				</div>
			</div>
		</section>
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4 font-weight-bold">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Website</span> <a href="#">yoursite.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
		

<?php 
  include 'footer/footer-script.php';
?>
