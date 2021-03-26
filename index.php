<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Photo Gallery Website</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
</head>
<body>
    
<?php include 'navbar.php';  ?>


      <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/los.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/chicago.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/newyork.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
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

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/neture.jpg" class="img-fluid about_img" alt="">
      </div>

      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4">I am Visiter Jd</h2>
        <p class="py-4">The words nature and natural are used for all the things that are normally not made by humans. Things like weather, organisms, landforms, celestial bodies and much more are part of nature. Scientists study the way the parts of nature work. Things that have been made by people are said to be man-made or called artifacts.</p>
        <a href="about.php" class="btn btn-success">Check More</a>
      </div>
    </div>
  </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Services</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top" src="images/neture1.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Beautiful Nature</h4>
            <p class="card-text">In nature, nothing is perfect and everything is perfect. Trees can be contorted, bent in weird ways, and they’re still beautiful.</p>
            <a href="#" class="btn btn-primary">See More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top" src="images/neture2.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Beautiful Nature</h4>
            <p class="card-text">Forget not that the earth delights to feel your bare feet and the winds long to play with your hair</p>
            <a href="#" class="btn btn-primary">See More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top" src="images/neture3.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Beautiful Nature</h4>
            <p class="card-text">To me a lush carpet of pine needles or spongy grass is more welcome than the most luxurious Persian rug.</p>
            <a href="#" class="btn btn-primary">See More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Gallery</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g1.jpg" class="img-fluid gallery_img pb-4" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g2.jpg" class="img-fluid gallery_img pb-4" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g3.jpg" class="img-fluid gallery_img pb-4" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g4.jpg" class="img-fluid gallery_img pb-4" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g5.jpg" class="img-fluid gallery_img pb-4" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g6.jpg" class="img-fluid gallery_img pb-4" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g7.jpg" class="img-fluid gallery_img pb-4" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g8.jpg" class="img-fluid gallery_img pb-4" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/g9.jpg" class="img-fluid gallery_img pb-4" alt="">
      </div>
    </div>
  </div>

</section>

<section class="my-5" id="contact">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
  </div>

  <div class="w-50 m-auto">
    <form action="userinfo.php" method="POST">
      <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control" >
      </div>
      <div class="form-group">
        <label for="">Email Id</label>
        <input type="email" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Mobile</label>
        <input type="number" name="mobile" autocomplete="off" class="form-control" >
      </div>
      <div class="form-group">
        <label for="">Comments</label>
        <textarea name="comment" class="form-control" ></textarea>
      </div>
      <input type="submit" name="submit" class="btn btn-success" value="Submit">
    </form>
  </div>

</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">All Rights reserved by programmerjd007@gmail.com</p>
</footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>