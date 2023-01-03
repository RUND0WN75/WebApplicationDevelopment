<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/digital-portfolio.css">
    <title>Writing</title>
</head>
    <body>
         <div class="wrapper">
        <header>
            <div class="flex">    
                <h1>Writing</h1> 
            </div>
           
<!--Toolbar-->
       <?php
            require('nav.php');
        ?>
        </header>        
<!--Slideshow/Analysis-->            
             <div class="flex">
             <div class="slideshow-container">
              <div class="mySlides fade">
                <div class="numbertext">1 / 2</div>
                <img src="Webpage-Images/Writing-Sample-1.jpg" alt="Sample 1" style="width:100%">
              </div>

              <div class="mySlides fade">
                <div class="numbertext">2 / 2</div>
                <img src="Webpage-Images/Writing-Sample-2.jpg" alt="Sample 2" style="width:100%">
              </div>
                 
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
            <br>

            </div>
    <!--Letter of intro-->            
            <div class="transbox">
            <h2>Analysis</h2>
            <p>In this slideshow gallery you will discover a gallery of two writing samples written by the developer (of the website).<br><br> The first writing sample represents a video game called Battlestations Pacific. It is split into five paragraphs, each explaining the synopsis of the game and the rating. <br><br>The second writing sample represents a revised version of an autobiographical story, which includes one more paragraph compared to the first sample. The second sample is about one's experience in the process of earning a Learner's Permit from the DMV, as well as preparing for a driver's license. </p>    
            </div>
<script>
var slideIndex = 1;
mySlides(slideIndex);

function plusSlides(n) {
  mySlides(slideIndex += n);
}

function currentSlide(n) {
  mySlides(slideIndex = n);
}

function mySlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>                           
             </div>
<!--Footer-->     
        <?php 
             require('footer.php');
                 ?>
            </div>
    </body>
        </html>        