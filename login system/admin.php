<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("You cannot login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="Admin"){
    die("You are admin");//jika bukan admin jangan lanjut
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>MINI PROJECT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    background-color: black;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color:yellow;
    font-weight: 600;
    margin-bottom: 30px;
    text-align: center;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: yellow;
    font-weight: 400;
    margin-bottom: 0px;
  }  
  .jumbotron {
    background-image: url(ppp.jpg);
     background-size: 100% 100%;
    background-repeat: no-repeat;
    text-align: left;
    color: yellow;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: black;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a
  {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  button
  {
    font-size: 32px;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim
   {
    visibility:hidden;
  }
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
    
  }
  @media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
  li
  {
   list-style-position: inside;
  }
  .sidebar 
  {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: black;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }
  .sidebar a 
  {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: yellow;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: red;
}

.sidebar .closebtn 
{
  position: static;
  top: 0;
  right: 25px;
  text-align: right;
  font-size: 36px;
  margin-left: 50px;
}
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: black;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover
{
  color: #f4511e !important;
  background-color: #fff !important;
}
#main {
  transition:margin-left.5s;
  padding: 16px;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
 
<nav class="navbar navbar-default navbar-fixed-top">

  <div class="container">

    <div class="navbar-header">
      
    
    
      <a class="navbar-brand" href="#myPage">Time To Glow</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#whom">FOR WHOM</a></li>
        <li><a href="#working">WORKING</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="http://localhost/manage/index.php">ACCOUNT MANAGE</a></li>
        <li><button class="openbtn" onclick="openNav()">☰ Menu</button></li>
        <li><a href="logout.php">LOGOUT<span class="glyphicon glyphicon-log-out"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="backendweb.html">Backend Developer</a>
  <a href="bigdata.html">Big Data</a>
  <a href="dataanalyst.html">Data Analyst</a>
  <a href="databaseadmin.html">Database Admin</a>
  <a href="machinelearning.html">Machine Learning</a>
  <a href="fullstack.html">Fullstack Developer</a>
  <a href="junior.html">Junior Developer</a>
</div>
<script>
function openNav()
 {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() 
{
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
<br>
<div id="main">
<div class="jumbotron text-center">
  <h1>Time To Glow</h1> 
  
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
      <h2>About Us</h2>
      <h4>We all know in today’s world finding a job that you genuinely have interest in could be difficult, and not knowing the information about what all qualifications or specializations you need to do before going to the interview. Our company does just that for you.</h4>
      <h4>Time to glow provides customers with the exact information about the jobs that you’ve always wanted to have but had very inadequate sources or irrelevant information regarding it. Our website gives you an extremely filtered set of information regarding anything and everything about your dream job so that you start working towards your goal. We use the power of data and statistics to help you make better choices for your career.</h4>
      <h4>Our company helps the customers with the precise information and a step by step TO-DO for the people who wish have a specific job but don’t know the technicalities or the attributes/eligibility of it. </h4>
  </div>
</div>
<!-- Container (Services Section) -->
<div id="whom" class="container-fluid text-center">
  <h2>FOR WHOM</h2>
  <h4>The content of page helps students and professionals make informed, efficient choices about career or job suited to their aspirations, interests, and lifestyles. Prospective students turn to us for help in determining their goals and related educational needs</h4>
  <h4>Graduates in search of careers or jobs can take advantage by knowing about their career or job role. By knowing the requirement for the jobs they can improve themselves according to the job they want to do. </h4>
  <h4>Students who want to decide the career or job, can decide by taking an advantage of a growing field, with abundant choices and an array of opportunities and learn the skills which are required to get the job. Also the students who get drop or has a gap then they can learn and improve skills necessary to make career of their choice. Students can analyze their skills and capacity and plan according to that, they can get the better career  job.</h4>
</div>

<!-- Container (Portfolio Section) -->
<div id="working" class="container-fluid text-left bg-grey">
  <h2>WORKING</h2>
  <h4>This is a place where you will get the required and important information regarding the job of your field of interest i.e.;</h4>
  <h4>
    <ul>
      <li>Which state has its more demand</li>
      <li>Average salary</li>
      <li>Job role </li>
      <li>Skills that you need</li>
      <li>Information about companies</li>
    </ul>
  </h4>
  <h4>Help you in finding your dream company and will be effective in your resume building as it will add on various skills to your field.Help you in clearing your vision regarding your field.</h4>
  <h2 >We Believe</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time."<br><span>-Thomas A. Edison</span></h4>
      </div>
      <div class="item">
        <h4>"The path to success is to take massive, determined action."<br><span>-Tony Robbins</span></h4>
      </div>
      <div class="item">
        <h4>"If you would hit the mark, you must aim a little above it; Every arrow that flies feels the attraction of earth."<br><span>-Henry Wadsworth Longfellow</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
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

<!-- Container (Contact Section) -->
<form method="post" action="contact.php">
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> India,IN</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> timetoglow@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <input type="submit" value="submit">
        </div>
      </div>
    </div>
  
  </div>
 
</div>
 </form>



<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>
</div>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
