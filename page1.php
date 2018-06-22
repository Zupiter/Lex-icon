<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>









<!DOCTYPE html>
<html lang="en">



<head>
  <title>Lex-Icon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/Main.css" rel="stylesheet">
  <link href="css/Loader.css" rel="stylesheet">
</head>



<body id="login" data-spy="scroll" data-target=".navbar" data-offset="60">


<div id="loader-wrapper">
  <div id="loader"></div>
</div>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">Lex-Icon logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#login">LOGIN</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>


<section id="scroll" class="demo">
  <div class="bgimg-1">
    <div class="captiona">
      <span class="bordera " >
        <div class="blacken">Lexicon logo<br>
          <div class="login"><h2>Login by Google/Facebook</h2></div>
        </div>
      </span>
    </div>
  </div>
  <a href="#about"><span></span><span></span><span></span></a>
</section>


<!-- Container (About Section) -->

<div class="bgimg-2">
  <div class="caption">
    <div id="about" class="container-fluid">
      <div class="row">
        <div class="col-xs-8">
          <div class="blacken ">
            <h2>
              <div class="blacken slideanim">About</div></h2><br>
            <h4>
              <font color=white><div class="slideanim"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div></font></h4><br>
            <p>
              <font color=white><div class="slideanim">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div></font></p>
            <br><button class="btn btn-default btn-lg slideanim"><a href="#contact">Contact Us</a></button>
          </div>
        </div>
        <div class="col-xs-4" >
          <img class="avatar img-responsive" src="images/lex-icon-logo.gif"/>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="portfolio" class="container-fluid text-center bg-grey slideanim">
  <h2>About Us</h2><br>
  <h4>WHO WE ARE</h4>
  <div class="row text-center ">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
      Nisl suscipit adipiscing bibendum est ultricies integer quis. Fermentum posuere urna nec tincidunt praesent. Sit amet mattis vulputate enim nulla aliquet porttitor lacus. Ac auctor augue mauris augue neque. Quis hendrerit dolor magna eget est lorem.
      <br>
      Tellus in hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Lectus urna duis convallis convallis tellus id. Id porta nibh venenatis cras sed felis eget.<br>
      Dui accumsan sit amet nulla facilisi. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Enim sit amet venenatis urna cursus eget. At quis risus sed vulputate odio ut. Lorem ipsum dolor sit amet consectetur. Massa id neque aliquam vestibulum. </p>
    <strong>
      <p> Also do check out our App :P <br></strong>
        <button class="btn btn-default btn-lg slideanim"><a href="google.com">Link to app</a></button>
      </p>
  </div><br>
</div>

<div id="faq" class="container-fluid text-center bg-grey slideanim">
  <h2>FAQ</h2><br>
  <div class="row text-center slideanim">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
      Nisl suscipit adipiscing bibendum est ultricies integer quis. Fermentum posuere urna nec tincidunt praesent. Sit amet mattis vulputate enim nulla aliquet porttitor lacus. Ac auctor augue mauris augue neque. Quis hendrerit dolor magna eget est lorem.
      <br>
      Tellus in hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Lectus urna duis convallis convallis tellus id. Id porta nibh venenatis cras sed felis eget.<br>
      Dui accumsan sit amet nulla facilisi. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Enim sit amet venenatis urna cursus eget. At quis risus sed vulputate odio ut. Lorem ipsum dolor sit amet consectetur. Massa id neque aliquam vestibulum. </p>
      Nunc eget lorem dolor sed viverra ipsum nunc aliquet bibendum. Nulla pellentesque dignissim enim sit. Lacinia quis vel eros donec ac. Sem integer vitae justo eget magna fermentum. Fames ac turpis egestas sed tempus urna et pharetra. Non tellus orci ac auctor augue mauris. Nisl nisi scelerisque eu ultrices vitae auctor. Tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Lorem donec massa sapien faucibus et. Tincidunt dui ut ornare lectus sit. Libero id faucibus nisl tincidunt eget nullam non.
      Ut eu sem integer vitae. At imperdiet dui accumsan sit amet nulla facilisi morbi. Cras adipiscing enim eu turpis egestas pretium aenean. Maecenas ultricies mi eget mauris pharetra et ultrices neque ornare. Mattis molestie a iaculis at erat pellentesque adipiscing. Vel eros donec ac odio tempor orci. Mollis aliquam ut porttitor leo. Vitae aliquet nec ullamcorper sit amet risus nullam eget. Pulvinar elementum integer enim neque volutpat ac tincidunt vitae semper. Consequat interdum varius sit amet. Mattis ullamcorper velit sed ullamcorper morbi tincidunt. Nisi est sit amet facilisis. Nisi lacus sed viverra tellus in hac habitasse platea dictumst. Morbi tristique senectus et netus et malesuada fames ac turpis.
  </div><br>
</div>


<!-- Container (Contact Section) -->

<div id="contact" class="container-fluid bg-grey slideanim">
  <h2 class="text-center">Contact Us </h2><h5><br><center>  If You need to</h5>
  <!--div class="row"-->
  <center>
    <i class="fa fa-phone" aria-hidden="true"></i>   Phone:  <strong>Confidential</strong> <em class="hide-on-small-only"> -  but my friends have it</em>
    <br>
    <i class="fa fa-envelope" aria-hidden="true"></i>      Mail:  <a href="mailto:adimis@iitk.ac.in" class="lime-text">adimis@iitk.ac.in</a>  or  <a href="mailto:adityamishra210899@gmail.com" class="lime-text">Gmail</a>
    <br><i class="fa fa-globe" aria-hidden="true"></i> Webpage: <span class="hide-on-small-only"> You are at it, but still :</span> <a href="https://home.iitk.ac.in/~adimis/" class="lime-text">home.iitk.ac.in/~adimis/</a>
    <br><i class="fa fa-github" aria-hidden="true"></i>  Github:  <a href="https://github.com/adimishra1" class="lime-text">adimishra1</a>
    <br><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook:  <a href="https://www.facebook.com/profile.php?id=100010256852861" class="lime-text">adityamishra2108</a>
    <br><i class="fa fa-google-plus" aria-hidden="true"></i>  Google Plus:  <a href="https://plus.google.com/114427503649659430166" class="lime-text">+AdityaMishra</a>
    <!--<br><i class="fa fa-twitter" aria-hidden="true"></i>   Twitter:  <a href="" class="lime-text">@adityamishra</a>
    <br><i class="fa fa-linkedin" aria-hidden="true"></i>  LinkedIn:  <a href="" class="lime-text">adimishra</a>-->
    <br><i class="fa fa-map-marker" aria-hidden="true"></i>   Our Headquaters:  Hall 2, IIT Kanpur, India<br>
  </center>
  </center>
</div>


<!-- Add Google Maps -->

<div id="googleMap" style="height:600px;width:100%;">
  <iframe width="100%" height="600"frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJWxlvrP82nDkRGxOB-E5EjFQ&key=AIzaSyDxEEmSYwfpY9gWjhNBO-b-Q-5ZdW3yi6o" allowfullscreen></iframe>
</div>

<footer class="container-fluid text-center">
  <a href="#login" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

					<footer id="footer">
						<p>2018| &copy; Designed by Lex-Icon .</p>
					</footer>

</footer>


<script>



jQuery(document).ready(function() {
    jQuery('#loader').fadeOut(2000);
});


jQuery(document).ready(function() {
    jQuery('#loader-wrapper').fadeOut(2000);
});


$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#login']").on('click', function(event) {
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
      }, 800, function(){

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