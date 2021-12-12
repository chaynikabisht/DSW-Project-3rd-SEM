<!DOCTYPE html>
<html>
    <head>
        <title></title>
</head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Linking with the css file -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- NAV BAR -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MiMUSIC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

            <!-- NAV BAR ELEMENTS-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto">

            <!-- HOME BUTTON/HOME PAGE -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
            <!-- ABOUT BUTTON -->
        <li class="nav-item">
          <a class="nav-link" href="#aboutus">About</a>
        </li>
            <!-- FORM PAGE UNDER REQUEST-->
        <li class="nav-item">
          <a class="nav-link" href="#form">Request A Song</a>
        </li>
    
    </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


 <!-- CAROUSEL/ IMAGE SLIDE SHOW-->

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    
  <div class="carousel-item active">
      <img src="images/1d.jpg" alt="one direction" width="900" height="600">
      <div class="carousel-caption">
        <h3>American Pop Sensations</h3>
        <p>Listen to your favourite bands</p>
      </div>   
    </div>
  
    <div class="carousel-item">
      <img src="images/music.jpg" alt="MiMusic" width="900" height="600">
      <div class="carousel-caption">
        <h3>We'll take your requests</h3>
        <p>And help you dedicate your favorite song to anyone you want!</p>
      </div>   
    </div>
  
    <div class="carousel-item">
      <img src="images/got7.jpg" alt="GOT7" width="900" height="600">
      <div class="carousel-caption">
        <h3>K-pop Masterpieces</h3>
        <p>If you've got a favourite song? Tell us.</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


 <!--ABOUT US UNDER HOME-->
 <section class= "my-5">
     <div class= "py-5" id="aboutus"> 
         <h2 class= "text-center">About Us</h2>
    </div>

<div>
<center> <img src="images/song.jpg" width="500" height="300">
<h2> We are MiMusic! </h2><br>
        <p>MiMUSIC is an online platform that brings you your favourite tunes <br>
           from around the globe while aiding all the music lovers to not only <br>
           discover new music, but request and your special songs anyone you <br>
           want to! 
        </p>
    <a href="about.html">More Info</a> </center>
    <br><br>
</div>



<!--form-->
</section> 
<center>
<section class="my-5">
  <div class="py-5"id ="form">
    <h2 class="text-center">Dedicate Your Song</h2>
</div>

<div>
  <form action="userinfo.php" method="post">
    <div class="form-group">
      <label>Your Name</label>
      <input type="text" name="user">
</div>

<div class="form-group">
      <label>Song Name</label>
      <input type="text" name="song">
</div>

<div class="form-group">
      <label>Artist Name</label>
      <input type="text" name="artist">
</div>

<div class="form-group">
      <label>Dedication</label>
      <input type="text" name="dedication">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</center>

</form>
</div>
</section>


<footer>
  <p class= "p-3 bg-dark text-white">DSW Project, F4</p>
</footer>

<body>
</html>