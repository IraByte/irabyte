<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IraByte</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  
  <!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img style="margin-left: 70px;" src="assets/img/herologo.png" alt="" >
        <!-- <h1 style="margin-left: -25px;" >IRA BYTE</h1> -->
        <span></span>
</a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero" class="active">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li class="dropdown has-dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="restaurant_analysis.html">Restaurant Analysis</a></li>
              <li><a href="brand_design.html">Brand Design</a></li>
              <li><a href="data_analytics.html">Data Analytics</a></li>
              <li><a href="book_design.html">Book Design</a></li>
            </ul>
          </li>
          <!-- <li><a href="index.html#services">Services</a></li> -->
          <li><a href="index.php#portfolio">Portfolio</a></li>
          <!-- <li><a href="index.html#team">Team</a></li> -->
          <li><a href="blog.html">Blog</a></li>
          <!-- <li class="dropdown has-dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown has-dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down"></i></a>
                <ul class="dd-box-shadow">
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="index.php#contact">Contact</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      
      <!-- <a class="btn-getstarted" href="index.html#about">	&#128222;+91-9740-86-5555</a> -->
      <a class="btn-getstarted" href="tel:+919740865555"><font face="Gorga Grotesque Light">&#128222;+91-974-086-5555</font></a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

      <img src="assets/img/hero-bg.png" alt="" data-aos="fade-out">
      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <!-- <h2 data-aos="fade-up" data-aos-delay="100">Welcome to IraByte</h2> -->
            <p data-aos="fade-up" data-aos-delay="200">We offer innovative solutions to help businesses grow, understand their performance, and build trust.</p>
          </div>
          <div class="col-lg-8">
          <br><br>
          <?php 
include('inc/header.php');
?>				
<script src="js/ajax_subscribe.js"></script>
<link href="form.css" rel="stylesheet">
<div class="content"> 
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-lg-5">
				<div class="main-content">
					<div class="susbcribe-container">
					
						<div class="bottom">							
            
							<form action="#" id="subscribeForm" method="post">							
								<input type="text" class="form-control" id="name" placeholder="Full Name" required="">	
								<span class="text-danger hidden" id="nameError"></span>
								<input type="email" class="form-control" id="email" placeholder="E-mail" required="">
								<span class="text-danger hidden" id="emailError"></span>
								<input type="button" class="btn btn-primary" id="subscribeButton" value="Subscribe Now">
                <div class="status"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	 
	</div>       
</div>   		
<?php include('inc/footer.php');?>


          </div>
        </div>
      </div>

    </section><!-- End Hero Section -->

    <!-- Clients Section - Home Page -->
    <section id="clients" class="clients">

      <div class="container-fluid" data-aos="fade-up">

        <div class="row gy-10">

          <div class="col-sml-2 col-6 col-md-2  client-logo" >
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div> 
          <!-- End Client Item -->

          <div class="col-sml-2 col-6 col-md-2 client-logo" >
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-sm-2 col-6 col-md-2 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-sm-2 col-6 col-md-2 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-sm-2 col-6 col-md-2 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          

          <!-- <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div> -->
          <!-- End Client Item -->

        </div>

      </div>

    </section><!-- End Clients Section -->

    <!-- About Section - Home Page -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>About Us</h3>
            <!-- <h2>Ducimus rerum libero reprehenderit cumque</h2> -->
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;">At <b>IraByte</b>, we're a team of creative and analytical experts passionate about helping businesses thrive. We combine innovative design, insightful data analysis, and thorough research to empower businesses to succeed. Our journey started with a simple idea: to use data and creativity to help businesses grow and strengthen their brand. Today, we support businesses of all sizes, from startups to established companies, in achieving their goals. We're dedicated to delivering exceptional results, building long-term relationships, and staying ahead of the curve with the latest trends. Our collaborative approach ensures we understand your unique needs, and our commitment to excellence guarantees you receive outstanding results.
              
          </p>
            <!-- <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
          </div>

          <div class="col-xl-7" >
            <div class="row gy-4 icon-boxes" >

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box" style="background-image: url(assets/img/about_bg.jpg); background-size: cover;">
                  <i class="bi bi-buildings" ></i>
                  <h3>Business Support</h3>
                  <p>Cultivating your business field with support involves nurturing and fostering growth within your industry or market by leveraging various forms of assistance and resources. </p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box" style="background-image: url(assets/img/about_bg.jpg); background-size: cover;">
                  <i class="bi bi-clipboard-pulse"></i>
                  <h3>Business Research</h3>
                  <p>It involves the systematic investigation of markets, industries, and organizational processes to gather insights, inform decision-making, and drive strategic initiatives for growth and success.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box" style="background-image: url(assets/img/about_bg.jpg); background-size: cover;">
                  <i class="bi bi-command"></i>
                  <h3>Modern Design </h3>
                  <p>Blending your business goals with modern art involves integrating contemporary artistic principles, aesthetics, and techniques into your brand's identity, products, and marketing strategies.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box" style="background-image: url(assets/img/about_bg.jpg); background-size: cover;">
                  <i class="bi bi-graph-up-arrow"></i>
                  <h3>Data Report</h3>
                  <p>Visualizing your future demands with a data report involves leveraging data analytics and insights to anticipate future trends, preferences, and needs in your industry or market</p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- Stats Section - Home Page -->
    <!-- <section id="stats" class="stats"> -->

      <!-- <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in"> -->

      <!-- <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div> -->
          <!-- End Stats Item -->

          <!-- <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div> -->
          <!-- End Stats Item -->

          <!-- <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div> -->
          <!-- End Stats Item -->

          <!-- <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div> -->
          <!-- End Stats Item -->

        <!-- </div>

      </div>

    </section> -->
    <!-- End Stats Section -->

    <!-- Services Section - Home Page -->
    <section id="services" class="services">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Elevate your online presence with our comprehensive range of services tailored to meet your unique needs and goals</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <!-- <div class="icon flex-shrink-0"><i class="bi bi-clipboard-data"></i></div> -->
              <div class="icon flex-shrink-0"><i class="bi bi-graph-up-arrow"></i></div>

              <div>
                <h4 class="title"><a href="restaurant_analysis.html" class="stretched-link">Restaurant analytics</a></h4>
                <p class="description">Restaurant Analytics offers a comprehensive suite of data-driven solutions tailored specifically for the hospitality sector. By harnessing the power of data, we provide restaurant owners and managers with valuable insights to make informed decisions and drive growth.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-grid"></i></div>
              <div>
                <h4 class="title"><a href="brand_design.html" class="stretched-link">Brand Design</a></h4>
                <p class="description">Our Brand Design service is all about creating a visual identity that sets you apart and makes a lasting impression. We believe that your brand is more than just a logo - it's the foundation of your business's personality, values, and message.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a href="data_analytics.html" class="stretched-link">Data Analysis</a></h4>
                <p class="description">From collecting and organizing data to analyzing trends and generating actionable insights, our services cover the entire data lifecycle. We specialize in transforming raw data into valuable information that empowers you to make smarter business decisions, optimize processes, and identify new opportunities for growth.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-book"></i></div>
              <div>
                <h4 class="title"><a href="book_design.html" class="stretched-link">Book Design</a></h4>
                <p class="description">We take a collaborative approach to design, working closely with you to understand your vision, style preferences, and target audience. From cover design to interior layout and formatting, we ensure that every aspect of your book is meticulously crafted to reflect your brand identity and resonate with readers.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <!-- <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
            </div>
          </div> -->
          <!-- End Service Item -->

          <!-- <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">Eiusmod Tempor</a></h4>
                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
              </div>
            </div>
          </div> -->
          <!-- End Service Item -->

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- Features Section - Home Page -->
    <section id="features" class="features">


    <!-- Portfolio Section - Home Page -->
    <section id="portfolio" class="portfolio">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Explore a curated collection showcasing our projects, skills, and achievements, providing insight into our expertise and capabilities.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-book">Book</li>
            <li data-filter=".filter-card">Cards</li>
            <li data-filter=".filter-branding">Branding</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-card">
              <img src="assets/img/masonry-portfolio/pamphlet_2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Banner</h4>
                <p>Elevate your brand with captivating banner designs</p>
                <a href="assets/img/masonry-portfolio/pamphlet_2.png" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-card">
              <img src="assets/img/masonry-portfolio/card_gold.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card</h4>
                <p>Make a lasting impression with our professional business card designs</p>
                <a href="assets/img/masonry-portfolio/card_gold.png" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <!-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div> -->
            <!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-card">
              <img src="assets/img/masonry-portfolio/pamphlet.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pamphlet</h4>
                <p>Elevate your marketing game with captivating pamphlet designs</p>
                <a href="assets/img/masonry-portfolio/pamphlet.png" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/cow_ghee.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Logo</h4>
                <p>Unleash your brand's potential with our expert logo design</p>
                <a href="assets/img/masonry-portfolio/cow_ghee.png" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/Camera.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Logo</h4>
                <p>Capturing your brand's essence in every stroke</p>
                <a href="assets/img/masonry-portfolio/Camera.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/tourism.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Logo</h4>
                <p>Capturing your brand's essence in every stroke</p>
                <a href="assets/img/masonry-portfolio/tourism.png" title="Branding 3" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-book">
              <img src="assets/img/masonry-portfolio/Book1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Book</h4>
                <p>Crafting visual stories that captivate readers</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-card">
              <img src="assets/img/masonry-portfolio/card_silver.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card</h4>
                <p>Make a lasting impression with our professional business card designs</p>
                <a href="assets/img/masonry-portfolio/card_silver.png" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-book">
                <img src="assets/img/masonry-portfolio/book_cover.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Book Cover</h4>
                  <p>Wrap your story in an unforgettable cover design</p>
                  <a href="assets/img/masonry-portfolio/book_cover.png" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-book">
                <img src="assets/img/masonry-portfolio/book2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Book</h4>
                  <p>Crafting visual stories that captivate readers</p>
                  <a href="assets/img/masonry-portfolio/book2.png" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- End Portfolio Section -->

    <!-- Pricing Section - Home Page -->
    <!-- <section id="pricing" class="pricing"> -->

      <!--  Section Title -->
      <!-- <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div> -->
      <!-- End Section Title -->

      <!-- <div class="container" data-aos="zoom-in" data-aos-delay="100">

        <div class="row g-4">

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Free Plan</h3>
              <div class="icon">
                <i class="bi bi-box"></i>
              </div>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div> -->
          <!-- End Pricing Item -->

          <!-- <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Business Plan</h3>
              <div class="icon">
                <i class="bi bi-rocket"></i>
              </div>

              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div> -->
          <!-- End Pricing Item -->

          <!-- <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Developer Plan</h3>
              <div class="icon">
                <i class="bi bi-send"></i>
              </div>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div> -->
          <!-- End Pricing Item -->

        <!-- </div>

      </div>

    </section> -->
    <!-- End Pricing Section -->

    <!-- Call-to-action Section - Home Page -->
    <!-- <section id="call-to-action" class="call-to-action">

      <img src="assets/img/cta-bg.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Call To Action</h3>
              <p>Our strategically placed prompts inspire immediate engagement, guiding you effortlessly towards your desired outcome. Whether it's exploring our latest products, requesting a quote, or scheduling a demo, our Call to Action ensures that every visitor takes the crucial next step.</p>
              <a class="cta-btn" href="#">Call To Action</a>
            </div>
          </div>
        </div>
      </div>

    </section>End Call-to-action Section -->

    <!-- Faq Section - Home Page -->
    <section id="faq" class="faq">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="content px-xl-5">
              <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
              <p>
               FAQs provide concise answers to common queries, offering visitors quick solutions and clarity on various aspects of a product, service, or topic, streamlining the user experience and fostering trust and satisfaction
              </p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-container">
              <div class="faq-item faq-active">
                <h3><span class="num">1.</span> <span>What file formats do you provide upon completion of the project?</span></h3>
                <div class="faq-content">
                  <p>We provide the final deliverables in commonly used file formats such as PDF, JPEG, PNG, and SVG for graphic design projects. For data analytics projects, we typically deliver findings and reports in formats such as Excel spreadsheets, PowerPoint presentations, or PDF documents, ensuring compatibility and ease of use for our clients. Additionally, we are flexible and can accommodate specific file format requests based on your preferences or requirements. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">2.</span> <span>How do I contact customer support?</span></h3>
                <div class="faq-content">
                  <p>You can easily reach our customer support team through multiple channels for assistance. You can email us at askirabyte@irabyte.in, or call us at +919740865555. Our dedicated support team is available Monday - Friday(9:00AM - 05:00PM) to address any inquiries, concerns, or feedback you may have. We strive to provide prompt and helpful assistance to ensure your satisfaction with our products and services.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">3.</span> <span>How does your pricing structure work?</span></h3>
                <div class="faq-content">
                  <p>Our pricing structure is tailored to the specific services and projects we offer. We take various factors into account, including the complexity of the project, the scope of work involved, and any additional features or customization required. Once we understand your requirements, we provide transparent pricing details upfront, ensuring clarity and no surprises. We aim to offer competitive rates while maintaining the highest quality standards in our work. For detailed pricing information or to receive a quote for your project, please contact our sales team, and we'll be happy to assist you further. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">4.</span> <span>Can I request revisions or changes to the design?</span></h3>
                <div class="faq-content">
                  <p>Yes, absolutely! We value your feedback and strive to ensure your complete satisfaction with the design. You can request revisions or changes to the design, and we'll work closely with you to incorporate any adjustments until you are delighted with the final result. Our goal is to bring your vision to life and meet your specific needs and preferences.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">5.</span> <span>Can I request specific analyses or custom reports?</span></h3>
                <div class="faq-content">
                  <p>Yes, absolutely! We understand that every business has unique needs and objectives, which is why we offer the flexibility for clients to request specific analyses or custom reports tailored to their requirements. Whether you need insights on a particular aspect of your business, specific metrics analyzed, or a customized report format, our team is here to accommodate your requests. Simply discuss your requirements with our team during the project initiation phase, and we'll work closely with you to ensure that the analysis or report meets your expectations and provides valuable insights for your decision-making process.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>
        </div>

      </div>

    </section><!-- End Faq Section -->

    <!-- Team Section - Home Page -->
    <!-- <section id="team" class="team"> -->

      <!--  Section Title -->
      <!-- <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div> -->
      <!-- End Section Title -->

      <!-- <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p>
            </div>
          </div> -->
          <!-- End Team Member -->

          <!-- <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores exercitationem ut</p>
            </div>
          </div> -->
          <!-- End Team Member -->

          <!-- <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis at qui</p>
            </div>
          </div> -->
          <!-- End Team Member -->

          <!-- <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam consectetur</p>
            </div>
          </div> -->
          <!-- End Team Member -->

          <!-- <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img">
              <img src="assets/img/team/team-5.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Brian Doe</h4>
              <span>Marketing</span>
              <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit laborum velit</p>
            </div>
          </div> -->
          <!-- End Team Member -->

          <!-- <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="assets/img/team/team-6.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Josepha Palas</h4>
              <span>Operation</span>
              <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel</p>
            </div>
          </div> -->
          <!-- End Team Member -->

        <!-- </div>

      </div>

    </section> -->
    <!-- End Team Section -->

    <!-- Testimonials Section - Home Page -->
    <!-- <section id="testimonials" class="testimonials">

      <div class="container">

        <div class="row align-items-center">

          <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
            <h3>Testimonials</h3>
            <p>
              At <b>IraByte</b>, we take pride in delivering exceptional service and exceeding our customers' expectations. Don't just take our word for it - hear what our satisfied clients have to say! Our testimonials showcase the experiences of real customers who have benefited from our products or services. 
              These genuine accounts highlight the quality, reliability, and value that we consistently provide. 
            </p>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

            <div class="swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Arpita Singh</h3>
                        <h4>Event Manager</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>With their thorough examination of our processes and market dynamics, we gained actionable insights that led to tangible improvements and strategic decision-making. A highly recommended service for any business aiming to thrive in today's competitive landscape.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>End testimonial item -->

                <!-- <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Rajneesh Kumar</h3>
                        <h4>Developer</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>The creative team expertly captured our message and brand identity, producing a visually captivating pamphlet that effectively communicates our mission to our target audience. Exceptional work!</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>End testimonial item -->

                <!-- <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Sona Damania</h3>
                        <h4>Author</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>The book design service provided exceeded my expectations. Each page was meticulously crafted, resulting in a visually stunning layout that perfectly complemented the content. Highly recommended for anyone looking to elevate their book to the next level.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>End testimonial item -->

                <!-- <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>The logo design exceeded my expectations. It brilliantly captured the essence of our brand and has become instantly recognizable to our customers. The team's creativity and professionalism made the entire process seamless. Highly recommended for anyone looking to elevate their brand identity.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>End testimonial item -->

                <!-- <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>End testimonial item -->

              <!-- </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

        </div>

      </div>

    </section>End Testimonials Section -->

    <!-- Recent-posts Section - Home Page -->
    <!-- <section id="recent-posts" class="recent-posts"> -->

      <!--  Section Title -->
      <!-- <div class="container section-title" data-aos="fade-up">
        <h2>Recent Posts</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div> -->
      <!-- End Section Title -->

      <!-- <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Politics</p>

              <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div> -->
          <!-- End post list item -->

          <!-- <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div> -->
          <!-- End post list item -->

          <!-- <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Entertainment</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div> -->
          <!-- End post list item -->

        <!-- </div> -->
        <!-- End recent posts list -->

      <!-- </div> -->

    <!-- </section> -->
    <!-- End Recent-posts Section -->

    <!-- Contact Section - Home Page -->
    <section id="contact" class="contact">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Have a question or need assistance? Contact us—we're here to help!</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-12">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>askirabyte@irabyte.in</p>
                  <!-- <p>contact@example.com</p> -->
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+919740865555</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Bangalore, Karnataka</p>
                  <p>India, 560043s</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday</p>
                  <p>9:00AM - 05:00PM</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <!-- <div class="col-lg-6">
          <script src="js/ajax_message.js"></script>
            <form action="#" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="cname" id="irabytename" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" id="irabyteemail"  name="cemail" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" id="irabytesubject" name="csubject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="cmessage" id="message" rows="6" placeholder="Message" required></textarea>
                </div>
                <button type="submit"  id="messageButton">Send Message</button>
                <div class="status"></div>

              </div>
            </form>
          </div>
           -->
          <!-- End Contact Form -->

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>IraByte</span>
          </a>
          <p></p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/profile.php?id=61558674090497" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/irabyte?igsh=MXJpOHV4aTJobXlmbQ%3D%3D&utm_source=qr" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/irabyte-labs-65ab00302/" target="_blank"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links" >
          <h4 style="margin-left: -95px;">Useful Links</h4>
          <ul>
            <li><a href="index.html#hero">Home</a></li>
            <li><a href="index.html#about">About us</a></li>
            <li><a href="index.html#services">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4 style="margin-left: -90px;">Our Services</h4>
          <ul>
            <li><a href="#services">Restaurant Analytics</a></li>
            <li><a href="#services">Brand Design</a></li>
            <li><a href="#services">Data Analysis</a></li>
            <li><a href="#services">Data Visualisation</a></i>
            <li><a href="#services">Book Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Bangalore, Karnataka</p>
          <p>India, 560043</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+91-974-086-5555</span></p>
          <p><strong>Email:</strong> <span>askirabyte@irabyte.in</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright</span> <strong class="px-1">IraByte</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>