<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Ecommerce-IK</title>
  <link href='//fonts.googleapis.com/css?family=Signika+Negative:300,400,600' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="./colors.css">
</head>

<body>
  <div id="viewport" class="bkg-layer">
    <div id="content" class="bkg-content-holder">
      <div class="content-holder">

        <header class="header">
          <div class="header-container flex flex-space-between-center">

            <div class="header-logo">
              <img src="img/IsmailKadare-logos_transparent.png" alt="LogoIK" />
            </div>

            <div class="header-nav">
              <nav class="nav-links">
                <ul class="main-nav-list flex-space-between link-spacer">
                  <li><a href="index.php">HOME</a></li>
                  <li><a href="aboutUs.php">ABOUTUS</a></li>
                  <li><a href="shop.php">SHOP</a></li>
                  <li><a href="contactus.php">CONTACT</a></li>
                  <li><a href="shopping-cart.php"><i class="fas fa-shopping-cart"></i></a></li>
                  <li><a href="dashboard.php"><i class="fas fa-user"></i></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </header>

        <div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="3000">
          <div class="carousel-inner" role="listbox">
            <div class="item active background a"></div>
            <div class="item background b"></div>
            <div class="item background c"></div>
          </div>
        </div>

        <div class="covertext">
          <div class="col-lg-10" style="float:none; margin:0 auto;">
            <h1 class="title">The Palette of Inspiration</h1>
            <h3 class="subtitle">Let the colors guide your imagination and awaken your artistic spirit</h3>
          </div>
          <div class="col-xs-12 explore">
            <a href="#"><button type="button" class="btn btn-lg explorebtn">EXPLORE</button></a>
          </div>
        </div>

      </div>
    </div>
  </div>











  <section id="summer-collection">
    <div class="container">
        <div class="sc-content">
            <h1>Amsterdam Acrylics: Unleashing Artistic Brilliance</h1>
            <p class="description">Our curated selection features a spectrum of vibrant hues encapsulated in these high-quality acrylic paints. 
              Renowned for their rich pigments and smooth texture, Amsterdam Acrylics empower artists to transform their visions into vibrant masterpieces.
              Our curated selection features a spectrum of vibrant hues encapsulated in these high-quality acrylic paints. Explore the endless possibilities as you navigate through the color palette, unlocking the true essence of creativity with every stroke. </p>
            <a href="#" class="discover-button">discover now</a> </div>
        <div class="sc-media">
            <div class="sc-media-bg"> <img src="img/am.png" alt="sc-image" /> </div>
        </div>
    </div>
</section>





<section id="another-section">
    <div class="container">
        <div class="sc-media">
            <div class="sc-media-bg"> 
                <img src="img/ams.png" alt="sc-image" /> 
            </div>
        </div>
        <div class="sc-content">
            <h1>Urban Elegance: Unleashing Creativity with Spray Paint</h1>
            <p class="description">Immerse yourself in the dynamic world of spray paint artistry. 
              Our curated collection showcases an array of high-quality spray paints that bring urban elegance to your creative endeavors. 
              Unleash your imagination as you wield these versatile cans, transforming surfaces into canvases of self-expression. </p>
            <a href="#" class="discover-button">discover now</a> 
        </div>
    </div>
</section>









<?php include('footer.php'); ?>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
  <script src="./colors.js"></script>
</body>

</html>
