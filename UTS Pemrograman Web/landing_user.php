<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Pages</title>
   <link href="./assets/css/sland_user.css" rel="stylesheet">
</head>
<body>
<header id="header">
  <!--  Brand Logo  -->
  <a class="nav-brand" href="" target="_blank">
    <img id="header-img" src="https://i.postimg.cc/yYk7T52Q/skincare-2.png" alt="">
  </a>
  
  <!--  Toggle Menu for Mobile  -->  
  <input type="checkbox" id="toggle-menu" role="button">
  <label for="toggle-menu" class="toggle-menu">Menu</label>
  
  <!--  Menus  -->
  <nav id="nav-bar" class="navbar">
    <ul class="menu">
      <li><a class="nav-link" href="#featured">New in!</a></li>
      <li><a class="nav-link" href="#collections">Products</a></li>
      <li><a class="nav-link" href="#about">About</a></li>
      <li><a class="nav-link" href="#contact">Contact</a></li>
    </ul>
    <ul class="social-menu">
      <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
    </ul>
  </nav>
</header>

<!-- Hero Section -->
<div class="hero">
  <div class="hero-img">
    <img src="https://i.postimg.cc/kMNz5grj/flower.png" alt="Pixel Skincare">
  </div>
  <div class="hero-text">
    <h1>Your Skin</br> Would Loved It!</h1>
    <a href="#featured" class="btn">Explore</a>
  </div>
</div>

<!-- Featured Section -->
<section id="featured">
  <div class="title title-left">
    <span class="line"></span><h3>New Friend!</h3>
  </div>
  <div class="wrapper">
    <div class="image">
      <img src="https://i.postimg.cc/DyM1SgNb/flower-copy.png" alt="Pixel Facial Cream">
    </div>
    <div class="text">
      <h2>Pixel Facial Cream</h2>
      <p>A lightweight formula that packs a punch with avocado protein extract to strengthen skin's own moisture barrier, sealing in hydration to protect, nourish and soften skin.</p>
      <a href="#" class=btn>Details</a>
    </div>
  </div>
</section>

<!-- Collection Section -->
<section id="collections">
  <div class="title title-right">
    <span class="line line-right"></span><h3>Collections</h3>
  </div>
  <div class="wrapper">
    <a class="box box1" href="#">
      <h4>Moisturizers</h4>
      <div class="box-overlay"></div>
    </a>
    <a class="box box2" href="#">
      <h4>Eye & Lip Care</h4>
      <div class="box-overlay"></div>
    </a>
    <a class="box box3" href="#">
      <h4>Cleansers & Toners</h4>
      <div class="box-overlay"></div>
    </a>
  </div>
</section>

<!-- About Section -->
<section id="about">
  <div class="title title-left">
    <span class="line"></span><h3>KUY Skincare</h3>
  </div>
  <div class="wrapper">
    <div class="text">
      <p>Since 2016, Pixel Skin Care has been at the forefront of the move towards organic and natural skincare.</p>
      <p>Specialising in emerging niche natural skin care brands, Pixel Skin Care is a safe zone for you and your skin where we have taken special care to hand pick and offer you some of the purest and safest brands from global organic specialists.</p>
      <p>From cutting edge science to luxurious natural indulgence, we have selected the best products and treatments for healing and improving your well-being.</p>
    </div>
    <div class="video-wrapper">
      <iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/j4hvdSCV7xc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact">
  <div class="wrapper">
    <div class="form-wrapper">    
      <h4>Add More Beauty To Your Email</h4>
      <form id="form" action="https://www.freecodecamp.com/email-submit">
        <input type="email" id="email" name="email" placeholder="Your email" required>
        <input type="submit" id="submit" value="OK" class="submit">
      </form>
    </div>
    <div class="contact-wrapper">
      <h4>Stay In Touch With PIXEL</h4>
      <div class="wrapper">        
        <ul class="social-menu">
          <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        </ul>
        <a class="contact-footer contact-tel" href="#"><i class="fa fa-phone" aria-hidden="true"></i>001-283-4892</a>
        <a class="contact-footer contact-email" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>Send an email</a>
      </div>
    </div>
  </div>
</section>

</body>
</html> 