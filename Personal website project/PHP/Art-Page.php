<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/digital-portfolio.css">
    <title>Art</title>
</head>
    <body>
         <div class="wrapper">
        <header>
            <div class="flex">    
                <h1>Art</h1> 
            </div>
           
<!--Toolbar-->
       <?php
            require('nav.php');
        ?>
        </header>        
<!--Slideshow-->
<script type="text/javascript">

</script>                
             <div class="flex">
             <div class="slideshow-container">
                  <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="Webpage-Images/KFCH.jpg" alt="Sample-1" style="width:100%">
                    <div class="text">Sample #1</div>
                  </div>

                  <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="Webpage-Images/mountain.jpg" alt="mountains" style="width:100%">
                    <div class="text">Sample #2</div>
                  </div>

                  <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="Webpage-Images/walkup-craig-layermasks.jpg" alt="Layermasks" style="width:100%">
                    <div class="text">Sample #3</div>
                  </div>

                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
                
                <br>

                </div>
    <!--Analysis-->            
            <div class="transbox">
            <h2>Analysis</h2>
            <p>In this slideshow gallery you'll see a number of pictures that has been edited using Adobe Photoshop. All of these sample consist of mainly layermasks, as well as some other editing features used.</p>    
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