<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Ecommerce-IK</title>
  <link href='//fonts.googleapis.com/css?family=Signika+Negative:300,400,600' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./tools.css">


  <style>
  
    html,
    body {
      font-size: 62.5%;
      height: 100%;
      margin: 0;
      padding: 0;
    }

    p {
      margin-bottom: 1rem;
      font-size: initial;
      line-height: 1.6;
      text-rendering: optimizeLegibility;
      color: #000;
      margin-top: 40px;
      font-family: 'Roboto', sans-serif;
    }


    h1{
      margin-top: 100px;
      font-family: 'Times New Roman', sans-serif;
    }
  </style>

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
            <h1 class="title">Crafting Masterpieces with Artistic Tools</h1>
            <h3 class="subtitle"> Unleash your artistic potential and bring your visions to life with precision and style</h3>
          </div>
          <div class="col-xs-12 explore">
            <a href="#"><button type="button" class="btn btn-lg explorebtn">EXPLORE</button></a>
          </div>
        </div>

      </div>
    </div>
  </div>



<div class="container">
 <section class="carbon dark">
    <div class="content">
      <h2>DOES AMSTERDAM OFFER SPARE PARTS?</h2>
      <p>Amsterdam offers various spare parts!</p>
        <a href="#" class="btn">
          Learn More <i class="fas fa-chevron-right"></i>
        </a>
    </div>
  </section>

  </div>



  <div class="container">
    <h1>DISCOVER MORE</h1>
    <div class="row">
      <div class="col-sm-4">
        <p><blockquote>Spray Paint Caps<br>
          All Amsterdam spray paints are fitted with a standard cap (2.5 cm, black). If you’re looking for thinner or thicker lines, we also offer super skinny (1.5 cm, gray), soft (3.5 cm, blue) and fat (6 cm, pink) caps.</p>
      </div>
      <div class="col-sm-4">
        <p><blockquote>Dosing Nozzles<br>
          Dosing nozzles make it very easy to paint straight from the tube and to create fine lines or small dots. The best part is that you can seal this nozzle and protect your paint from drying out, so you can start right where you left off during your last painting session without having to switch caps. These nozzles fit onto the 75 ml, 120 ml and 150 ml tubes.</p>
      </div>
      <div class="col-sm-4">
        <p><blockquote>Marker Nibs<br>
          Amsterdam marker nibs are reversible, so if your nib wears out, you can turn it around to give it a second life. If both sides of your nib are worn down, however, you can easily replace it with a new one. We offer spare nibs for all three marker sizes: small (2 mm, round), medium (4 mm, round) and large (15 mm, square).</p>
      </div>
    </div>
  </div>




 
<?php include('footer.php'); ?>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
  <script src="./books.js"></script>
</body>

</html>
