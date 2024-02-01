<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Ecommerce-IK</title>
  <link href='//fonts.googleapis.com/css?family=Signika+Negative:300,400,600' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="./canvas.css">
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
            <h1 class="title">Capturing Emotions on Canvas</h1>
            <h3 class="subtitle">Let the art speak to your soul and evoke feelings beyond words</h3>
          </div>
          <div class="col-xs-12 explore">
            <a href="#"><button type="button" class="btn btn-lg explorebtn">EXPLORE</button></a>
          </div>
        </div>

      </div>
    </div>
  </div>


  <div class="blog-posts">
  <section>
    <figure>
      <img src="img/Kole_Idromeno,_Motra_tone.jpg" alt="_Motra_tone">
    </figure>
    <article>
     
      <h3>Motra Tone, 1883 – Kolë Idromeno (1860-1939)</h3>
      <p>The portrait “Motra Tone” is Albania’s Mona Lisa.
        The painting reflects the important position of women in the Albanian household transmitting both vulnerability and pride.</p>
    </article>
  </section>
  
  <section>
    <figure>
      <img src="img/1.jpg" alt="Skenderbeu">
    </figure>
    <article>
    
      <h3>Skënderbeu, 1931 – Spiro Xega (1876-1953)</h3>
      <p>The hero is charging his horse in the battlefield with confidence while carrying a jatagan. 
        This remains one of the most memorable portrayals of Gjergj Kastrioti in figurative arts.</p>
    </article>
  </section>
  
  <section>
    <figure>
      <img src="img/paz.png" alt="Krujë">
    </figure>
    <article>
      
      <h3>Pazari i Krujës, 1960 – Sadik Kaceli (1914-2000)</h3>
      <p>This is one of the finest examples of Kaceli moving away from the rigid and despotic norms of social realism. .</p>
    </article>
  </section>
  
  <section>
    <figure>
      <img src="img/Queen-of-Illyria.jpg" alt="Teuta">
    </figure>
    <article>
     
      <h3>Queen of Illyria “Teuta”, -Saranda Xhemajli</h3>
      <p>Enter a realm of regal enchantment through the brushstrokes of Saranda Xhemajli.
        Saranda's artistic prowess unveils the historical and cultural richness of Illyrian heritage,
         inviting you to immerse yourself in the royal reverie and witness the timeless allure of this magnificent queen
      </p>
    </article>
  </section>
  
  <section>
    <figure>
      <img src="img/Kabashi.jpg" alt="Kabashi">
    </figure>
    <article>
    
      <h3>"Whispers of Time", -Bashkim Kabashi</h3>
      <p>Step into the curated sanctuary of Kabashi Art Gallery, where the brushstrokes of Bashkim Kabashi
         come to life in the mesmerizing masterpiece, 'Whispers of Time.' 
        In this masterful creation, Kabashi transcends the boundaries of time and space, 
        weaving a tapestry of fleeting moments that echo through the corridors of memory.</p>
    </article>
  </section>
  
  <section>
    <figure>
      <img src="img/Esat.jpg" alt="Free Stock Photo from pexels.com">
    </figure>
    <article>
      
      <h3>"The Fall Of The Horns", 1996 -Esat Valla</h3>
      <p> Created in 1996, this expressionistic masterpiece is an embodiment of Valla's artistic prowess.
         In this unique composition, oil on canvas serves as the medium for an exploration of form, color, and emotion. </p>
    </article>
  </section>
 
</div>












<?php include('footer.php'); ?>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
  <script src="./canvas.js"></script>
</body>

</html>
