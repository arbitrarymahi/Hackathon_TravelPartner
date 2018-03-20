<?php
ob_start();
session_start();
require "header.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
  <!-- Latest compiled and minified CSS -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >-->
<link href="carousel.css" rel="stylesheet">


</head>
<body>



    <!-- Carousel
    ================================================== -->
    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading"><a href="eventgallery.php">Events <span class="text-muted">Get notified what all events and other stuffs are going around you</span></a></h2>
          <p class="lead">Dont know the dates of auditions for any cultural event or missed the date of sports selection , Now no need to worry just stay tuned to IPS connect .That's all rad.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="Swaranjali2016-2.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Swaranjali</h1>
              <p>Swaranjali 2K17</p>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="bhaiyu.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Campus life</h1>
              <p> at IPS</p>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="cricket.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Sports<h1>
              <p>inter branch cricket match</p>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

        </div>
      </div>
  
   <!-- /.carousel -->


    


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><a href="forum.php"> Forum <span class="text-muted">Have a question .Ask to your colleagues</span></a></h2>
          <p class="lead">Assemble online, Ask questions or give suggestions on any topic you are interested in. Regester a problem or matter and get answers from your seniors or faculties. Still unable to understant give it a go. </p>
        </div>
        <div class="col-md-5">
          <a href="forumclick.html"><img class="featurette-image img-responsive center-block" src="for.png" alt="Generic placeholder image"></a>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading"><a href="#"> Get connected to new friends around you <span class="text-muted">The IPSians</span></a></h2>
          <p class="lead">Missed that freshers party or the introduction sessions , no problem want to interect with seniors or any student of your course or even the faculties of the college just click here and start a new chat.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="chat.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><a href="library.php"> Library Managment <span class="text-muted">We will notify you when to return</span></a></h2>
          <p class="lead">Never pay the library fine due to your short-memory ;) just enter the issue date and we will notify you when to return .</p>
        </div>
        <div class="col-md-5">
          <a href="library.html"><img class="featurette-image img-responsive center-block" src="education.png" alt="Generic placeholder image"></a>
        </div>
      </div>

    
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading"><a href="notice.php"> Notice Board <span class="text-muted">Get notified what all events and other stuffs are going around you</span></a></h2>
          <p class="lead">Dont know the dates of auditions for any cultural event or missed the date of sports selection , Now no need to worry just stay tuned to IPS connect .That's all rad.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="noti.jpg" alt="Generic placeholder image">
        </div>
      </div>
  <hr class="featurette-divider">
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 FeedFlood, Inc.</p>
      </footer>

    </div><!-- /.container -->


    
  </body>
</html>
