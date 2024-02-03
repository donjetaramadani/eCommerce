<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Ecommerce-IK</title>
  <link href='//fonts.googleapis.com/css?family=Signika+Negative:300,400,600' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="books.css">

<style>



.footer {
  background-color: #24262b;
  padding: 20px 0;
  position: absolute;
  right: 0;
  width: 100%;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  margin-top: 1900px;
 
  flex-shrink: 0;
  color: #ffffff;
  text-align: center;
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
            <h1 class="title">Journey Through the Pages of Wisdom</h1>
            <h3 class="subtitle">Unlock the doors to knowledge and embark on a reading adventure</h3>
          </div>
          <div class="col-xs-12 explore">
            <a href="#"><button type="button" class="btn btn-lg explorebtn">EXPLORE</button></a>
          </div>
        </div>

      </div>
    </div>
  </div>





 <section class="home-cards">
    <div>
      <img src="img/Pallati.jpg" alt="">
      <h3>Kadare's Classics</h3>
      <p>
        Dive into the extraordinary world of Ismail Kadare's classics.
         These timeless masterpieces have cemented Kadare's legacy as one of the most influential authors of our time. 

        Explore narratives that intertwine history, culture, and profound human experiences.
      </p>
      <a href="#">Learn More <i class="fas fa-chevron-right"></i></a>
    </div>
    <div>
      <img src="img/Kadare.jfif" alt="" />
      <h3>Kadare's Mosaic</h3>
      <p>
        Enter the captivating realm of 'Kadare's Mosaic,' where each piece of literature is a vibrant tile in the grand tapestry of Ismail Kadare's storytelling. 
        This collection intricately stitches together tales from different times, 
        creating a mosaic that reflects the rich diversity of Kadare's literary landscape.
      </p>
      <a href="#">Learn More <i class="fas fa-chevron-right"></i></a>
    </div>
    <div>
      <img src="img/IK.JPG" alt="" />
      <h3>Literary Alchemy</h3>
      <p>
        Experience the literary alchemy of Ismail Kadare.
         His words possess the power to transform ordinary narratives into extraordinary tales.
         Uncover the secrets and symbolism woven into each page, as Kadare's writing transcends the boundaries of conventional storytelling.
      </p>
      <a href="#">Learn More <i class="fas fa-chevron-right"></i></a>
    </div>
    <div>
      <img src="img/books.jpg" alt="" />
      <h3>Hidden Gems</h3>
      <p>
        Embark on a literary adventure through uncharted narratives.  
        These lesser-known masterpieces invite you to traverse untrodden paths, 
        where each page holds the promise of discovering new worlds and unlocking the beauty of the written word.
      </p>
      <a href="#">Learn More <i class="fas fa-chevron-right"></i></a>
    </div>
  </section>






















  <?php include('footer.php'); ?>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
  <script src="./books.js"></script>
</body>

</html>
