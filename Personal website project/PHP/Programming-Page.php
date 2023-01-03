<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/digital-portfolio.css">
    <title>Programming</title>
</head>
    <body>
         <div class="wrapper">
        <header>
            <div class="flex">    
                <h1>Programming</h1> 
            </div>
           
<!--Toolbar-->
       <?php
            require('nav.php');
        ?>
             </header>        
<!--Slideshow-->           
             <div class="flex">
                <div class="slideshow-container">
                  <div class="mySlides fade">
                    <div class="numbertext">1 / 2</div>
                    <img src="Webpage-Images/Programming-Sample-1.jpg" alt="Sample 1" style="width:100%">
                  </div>

                  <div class="mySlides fade">
                    <div class="numbertext">2 / 2</div>
                    <img src="Webpage-Images/Programming-Sample-2.jpg" alt="Sample 2" style="width:100%">
                  </div>

                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
                
                <br>

                </div>
            <div class="transbox">
            <h2>Analysis</h2>
            <p>In this slideshow gallery you will discover a gallery of programming samples created by the developer (of this website). As you can see, one of these samples require some HTML and CSS coding.<br><br> The first sample represents my personal Career Website, which shows Software Engineering and Network Engineering. <br><br>The second sample shows the tables, using only HTML. The tables display the country and a little bit of their background info. <br><br>Both of these samples were created in the Brackets desktop software application.<br><br><a href="http://brackets.io/">Brackets</a></p>    
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