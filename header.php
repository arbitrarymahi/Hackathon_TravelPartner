<?
@require "connection.php";
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
<link href="carousel.css" rel="stylesheet">


</head>
<body>



<nav class="navbar navbar-default">
  <div class="container-fluid">
   

   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li ><a href="home.php"> <span class="glyphicon glyphicon-home" tooltip="home" aria-hidden="true"> Home</span></a></li>
        
        <li ><a href="eventgallery.php"> <span class=" glyphicon glyphicon-picture"  aria-hidden="true"> Events</span></a></li>

        <li><a href="forum.php"><span class="glyphicon glyphicon-education"  aria-hidden="true"> Forum</span></a></li>

        <li ><a href="library.php"> <span class="glyphicon glyphicon-book" aria-hidden="true"> Reminder</span></a></li>

        <li ><a href="notice.php"> <span class="glyphicon glyphicon-info-sign"  aria-hidden="true"> Notice</span></a></li>        

      </ul>
     

      <form action="userSearch.php" method="POST" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="searchUser" class="form-control" placeholder="Search User">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-envelope" tooltip="home" aria-hidden="true"> Messages</span></a></li>
       


         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
          <ul class="dropdown-menu">
            <li><?echo "<a href='profile.php?Computer_Code= ".$_SESSION['user_id']."  '>"?>Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    
  </body>
</html>
