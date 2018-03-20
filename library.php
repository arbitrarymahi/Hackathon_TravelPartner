<?php
require "connection.php";
require "header.php";
?>
<!DOCTYPE html>
<!-- saved from url=(0036)file:///C:/xampp/htdocs/library.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title></title>
 
    <link rel="stylesheet" type="text/css" href="file:///C:/xampp/htdocs/bootstrap.min.css">
<style type="text/css">
body
{
  background-image: url(lbg.jpg);
}  
input[type=text], input[type=password], input[type=tel], input[type=date], input[type=email] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 5px;

}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
     margin: 5% auto 15% auto;
border-radius: 5px;
}
.container
{
  margin-top: 10%;
  margin-left: 25%;
  margin-right: 25%

  border-color: black;
  padding: 20px 20px 20px 20px;
  
  background-repeat: no-repeat;
}
#sb
{
  margin-left: 180px;
}
.heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -1px;
  text-align: center;
  
}

</style>
</head>
<body>
<h2 class="heading" >Library Managment, <br>We will notify you when to return</h2>
        
<div class="container" style="
    margin-right: 20%;
    margin-left: 30%;
">
     <form method="POST" action="library.php">
      <label><b>Book name</b></label>
      <input type="text" placeholder="Book name" name="book_name" required="">
      <br> <label><b>Issue date</b></label>
      <input type="date" style="margin-left: 7px;" placeholder="Enter Issue Date" name="issue_date" required=""></form>
      <br>
      <div id="sb" style="
    width: 100px;
    height: 100px;
    margin-left: 20%;
    margin-top: 10%;
">
      <button type="submit" style="
    width: 150px;
">Set Reminder</button>
</div>
</div>
<h1>
  
<? 
if($_POST){

  $date = date("Y/m/d") ;
}

date_default_timezone_set('Asia/Kolkata');
$timezone = date_default_timezone_get();echo "The current server timezone is: " . $timezone;


  ?>

</h1>
<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2018 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>



    </body></html>