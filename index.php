<!DOCTYPE html>
<html lang="en">
<?php $wp_url = ''; ?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Vibe | Music and Event Website | Vue Design</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="<?php echo $wp_url; ?>/assets/css/main.css" rel="stylesheet">
</head>

<body>

<header>

<nav class="navbar navbar-dark navbar-expand-lg absolute-top" data-bs-theme="dark">
  <div class="container">

    <a class="navbar-brand" href="/">VIBE</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a></li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul></li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a></li>
      </ul>
      
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>

    <!-- <nav class="navbar navbar-expand-md navbar-dark absolute-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Vibe</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#0">Releases</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#0">Downloads</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#0">Tour</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#0">Shop</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#0">Contact</a>
          </li>
        </ul>
      </div>
    </nav> -->
</header>

<section id="hero-main" class="hero-main">
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item hero-slide-1 active">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                  <span class="subtitle">NEW ALBUM OUT NOW</span>
                    <h1>Our Latest Release</h1>
                    <p>Our newest release is available for download. Download a free copy by clicking below.</p>
                    <a class="vibe-btn-dark" href="#0">Download Now</a>
                </div>
            </div>
          </div>
    </div>

    <div class="carousel-item hero-slide-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                  <span class="subtitle">NEW ALBUM OUT NOW</span>
                    <h1>Download for Free</h1>
                    <p>Download our latest release for free along with all of our albums.</p>
                    <a class="vibe-btn-dark" href="#0">Download Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="carousel-item hero-slide-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                  <span class="subtitle">NEW ALBUM OUT NOW</span>
                    <h1>Playing Your City Next</h1>
                    <p>Touring soon in a city near you. Check our tour dates by clicking below.</p>
                    <a class="vibe-btn-dark" href="#0">Check Tour Dates</a>
                </div>
            </div>
        </div>
    </div>
  </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<!-- Tour Section -->
<section id="tour" class="tour">
  <div class="container">
    <div class="row section-title">
      <h2>Upcoming Events</h2>
      <p>World Tour 2022</p>
      <div class="vibe-hr"></div>
    </div>

    <!-- Event Item -->
    <div class="row event-item">
      <div class="col-md-2">
        <div class="row">
          <div class="col-md-6">
            <span class="date">21</span>
          </div>
          <div class="col-md-6">
            <div class="date-item">
              <span class="month">Janurary</span><br>
              <span class="year">2022</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-4">
            <div class="location">
              <span class="city">Cleveland</span><br>
              <span class="state">OH, USA</span>
            </div>
          </div>
        <div class="col-md-8">
          <span class="event-title">TOMORROWLAND</span>
        </div>
      </div>
    </div>
      <div class="col-md-2">
        <div class="ticket-btn">
          <a class="vibe-btn-dark" href="#">Get Tickets</a>
        </div>
      </div>
    </div>
    <hr>

        <!-- Event Item -->
        <div class="row event-item">
      <div class="col-md-2">
        <div class="row">
          <div class="col-md-6">
            <span class="date">21</span>
          </div>
          <div class="col-md-6">
            <div class="date-item">
              <span class="month">Janurary</span><br>
              <span class="year">2022</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-4">
            <div class="location">
              <span class="city">Cleveland</span><br>
              <span class="state">OH, USA</span>
            </div>
          </div>
        <div class="col-md-8">
          <span class="event-title">TOMORROWLAND</span>
        </div>
      </div>
    </div>
      <div class="col-md-2">
        <div class="ticket-btn">
          <a class="vibe-btn-dark" href="#">Get Tickets</a>
        </div>
      </div>
    </div>
    <hr>

        <!-- Event Item -->
        <div class="row event-item">
      <div class="col-md-2">
        <div class="row">
          <div class="col-md-6">
            <span class="date">21</span>
          </div>
          <div class="col-md-6">
            <div class="date-item">
              <span class="month">Janurary</span><br>
              <span class="year">2022</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-4">
            <div class="location">
              <span class="city">Cleveland</span><br>
              <span class="state">OH, USA</span>
            </div>
          </div>
        <div class="col-md-8">
          <span class="event-title">TOMORROWLAND</span>
        </div>
      </div>
    </div>
      <div class="col-md-2">
        <div class="ticket-btn">
          <a class="vibe-btn-dark" href="#">Get Tickets</a>
        </div>
      </div>
    </div>
    <hr>

        <!-- Event Item -->
        <div class="row event-item">
      <div class="col-md-2">
        <div class="row">
          <div class="col-md-6">
            <span class="date">21</span>
          </div>
          <div class="col-md-6">
            <div class="date-item">
              <span class="month">Janurary</span><br>
              <span class="year">2022</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-4">
            <div class="location">
              <span class="city">Cleveland</span><br>
              <span class="state">OH, USA</span>
            </div>
          </div>
        <div class="col-md-8">
          <span class="event-title">TOMORROWLAND</span>
        </div>
      </div>
    </div>
      <div class="col-md-2">
        <div class="ticket-btn">
          <a class="vibe-btn-dark" href="#">Get Tickets</a>
        </div>
      </div>
    </div>
    <hr>

        <!-- Event Item -->
        <div class="row event-item">
      <div class="col-md-2">
        <div class="row">
          <div class="col-md-6">
            <span class="date">21</span>
          </div>
          <div class="col-md-6">
            <div class="date-item">
              <span class="month">Janurary</span><br>
              <span class="year">2022</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-4">
            <div class="location">
              <span class="city">Cleveland</span><br>
              <span class="state">OH, USA</span>
            </div>
          </div>
        <div class="col-md-8">
          <span class="event-title">TOMORROWLAND</span>
        </div>
      </div>
    </div>
      <div class="col-md-2">
        <div class="ticket-btn">
          <a class="vibe-btn-dark" href="#">Get Tickets</a>
        </div>
      </div>
    </div>
    <hr>

        <!-- Event Item -->
        <div class="row event-item">
      <div class="col-md-2">
        <div class="row">
          <div class="col-md-6">
            <span class="date">21</span>
          </div>
          <div class="col-md-6">
            <div class="date-item">
              <span class="month">Janurary</span><br>
              <span class="year">2022</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-4">
            <div class="location">
              <span class="city">Cleveland</span><br>
              <span class="state">OH, USA</span>
            </div>
          </div>
        <div class="col-md-8">
          <span class="event-title">TOMORROWLAND</span>
        </div>
      </div>
    </div>
      <div class="col-md-2">
        <div class="ticket-btn">
          <a class="vibe-btn-dark" href="#">Get Tickets</a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- New Album Section -->
<section id="new-album" class="new-album">
  <div class="container">
    <div class="row section-title">
      <h2>New Album</h2>
      <p>This is a section to showcase your new album.</p>
      <div class="vibe-hr"></div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        
      </div>

      <div class="col-lg-6">
        
      </div>
</section>

<!-- About Us Section -->
<section id="about-us" class="about-us">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>About Us</h2>
        <p>Quam eum mollitia suscipit sapiente voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam eum mollitia suscipit sapiente voluptas. Est possimus aperiam ea dolorum quos dolore totam quo recusandae accusamus officia quae, maxime, architecto magni. Quam eum mollitia suscipit sapiente voluptas.</p>
        <a class="vibe-btn-dark" href="#">Download Now</a>
      </div>
    </div>
  </div>
</section>

<!-- Artists Section -->
<section id="artists" class="artists">
  <div class="container">
    <div class="row section-title">
      <h2>Artists</h2>
      <p>Meet the artists.</p>
      <div class="vibe-hr"></div>
    </div>
    
    <div class="row">
      <div class="col-md-4">
        <img src="<?php echo $wp_url; ?>/assets/img/artist.jpg">
       <h3>First Last</h3>
          <p class="artist-info">Lorem Ipsem</p>
      </div>

      <div class="col-md-4">
      <img src="<?php echo $wp_url; ?>/assets/img/artist-2.jpg">
        <h3>First Last</h3>
          <p class="artist-info">Lorem Ipsem</p>
      </div>

      <div class="col-md-4">
      <img src="<?php echo $wp_url; ?>/assets/img/artist-3.jpg">
        <h3>First Last</h3>
          <p class="artist-info">Lorem Ipsem</p>
      </div>
    </div>
  </div>
</section>

<!-- Merch -->
<section id="merch" class="merch">
  <div class="container">
    <div class="row section-title">
      <h2>Merch</h2>
      <p>Check out our new mech.</p>
      <div class="vibe-hr"></div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="item">
          <a href="#"><img src="<?php echo $wp_url; ?>/assets/img/merch.jpg"></a>
            <h3><a href="#">Merch Item</a></h3>
            <p class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a style="display: block; text-align: center;" class="vibe-btn-dark" href="#">Click Here</a>
        </div>
      </div>

      <div class="col-md-4 item">
      <a href="#"><img src="<?php echo $wp_url; ?>/assets/img/merch2.jpg"></a>
        <h3><a href="#">Merch Item</a></h3>
        <p class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a style="display: block; text-align: center;" class="vibe-btn-dark" href="#">Click Here</a>
      </div>

      <div class="col-md-4 item">
      <a href="#"><img src="<?php echo $wp_url; ?>/assets/img/merch.jpg"></a>
        <h3><a href="#">Merch Item</a></h3>
        <p class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a style="display: block; text-align: center;" class="vibe-btn-dark" href="#">Click Here</a>
      </div>

      <div class="col-md-4 item">
      <a href="#"><img src="<?php echo $wp_url; ?>/assets/img/merch2.jpg"></a>
        <h3><a href="#">Merch Item</a></h3>
        <p class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a style="display: block; text-align: center;" class="vibe-btn-dark" href="#">Click Here</a>
      </div>

      <div class="col-md-4 item">
      <a href="#"><img src="<?php echo $wp_url; ?>/assets/img/merch.jpg"></a>
        <h3><a href="#">Merch Item</a></h3>
        <p class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a style="display: block; text-align: center;" class="vibe-btn-dark" href="#">Click Here</a>
      </div>

      <div class="col-md-4 item">
      <a href="#"><img src="<?php echo $wp_url; ?>/assets/img/merch2.jpg"></a>
        <h3><a href="#">Merch Item</a></h3>
        <p class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a style="display: block; text-align: center;" class="vibe-btn-dark" href="#">Click Here</a>
      </div>

    </div>
  </div>
</section>

<!-- Video Section -->
<section id="video" class="video">
  <div class="container">
    <div class="row section-title">
      <h2>Featured Video</h2>
      <p>Here's a video from our last show.</p>
      <div class="vibe-hr"></div>
    </div>
    
    <div class="row">
      <div class="col-12">

      </div>
    </div>

  </div>
</section> 

<!-- Footer Section -->
<footer id="footer" class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
  
        <!-- Footer Logo -->
        <div class="footer-logo-section">
          <a class="navbar-brand" href="index.php">Vibe</a>
            <p class="footer-bio">Vibe is a one page music and event website template perfect for a DJ or Band.</p>
            <div class="footer-social">
              <a href="https://facebook.com/vuedesign.co"><div class="footer-social-icon-facebook"></div></a>
              <a href="https://instagram.com/vuedesign.co/"><div class="footer-social-icon-instagram"></div></a>
              <a href="https://twitter.com/vuedesign"><div class="footer-social-icon-twitter"></div></a>
              <a href="https://pintrest.com/vue_design"><div class="footer-social-icon-pintrest"></div></a>
            </div>
          </div>
      </div>
  
      <div class="col-lg-3 col-md-6 footer-links">
        <p class="footer-title">Links</p>
        <ul>
         <!-- <li><a href="/about-us">About Us</a></li> -->
          <li><strong><a href="#0">Releases</a></strong></li>
          <li><strong><a href="#0">Downloads</a></strong></li>
          <li><strong><a href="#0">Tour</a></strong></li>
          <li><strong><a href="#0">Shop</a></strong></li>
          <li><strong><a href="#0">Contact</a></strong></li>
        </ul>
      </div>
  
      <div class="col-lg-3 col-md-6 footer-blog-links">
        <p class="footer-title">Blog</p>
        <ul>
          <li>
           <div class="footer-blog-item">
                <img src="">
                <a style="text-transform: inherit;" href="#">This is a cool title to a blog article</a>
            </div> 
          </li>
  
      <!--    <li>
            <div class="footer-blog-item">
                <img src="">
                <a href="/vue-wp/how-great-web-design-can-kick-start-your-business">This is an Example of a Blog <span class="vue-color-red">Post</span></a>
            </div>
          </li> -->
        </ul>
      </div>
  
      <div class="col-lg-3 col-md-6 footer-contact">
        <p class="footer-title">Contact</p>
          <a class="vibe-btn-dark" href="#">Contact Us</a>
      </div>
    </div>
  
  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <p>2021 &copy; <strong>Vibe</strong> | <a href="#0">Privacy Policy</a> | Design by <strong><a href="https://vuedesign.co">Vue Design</a></strong></p>
  </div>
  </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>