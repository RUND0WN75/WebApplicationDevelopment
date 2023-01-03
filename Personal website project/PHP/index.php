<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/digital-portfolio.css">
    <title>Welcome</title>
</head>
    <body>
         <div class="wrapper">
        <header>
            <div class="flex">   
                <h1>Welcome</h1></div>
<!--Toolbar-->
       <?php
            require('nav.php');
        ?>
        </header>        
<!--Slideshow-->             
             <div class="flex">
             <div class="slideshow-container">
            
              <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="Webpage-Images/Aviation.jpg" style="width:100%" alt="Aviation">
                <div class="text">Aviation</div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="Webpage-Images/Technology_A.jpg" style="width:100%" alt="Gaming">
                <div class="text">Tech</div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="Webpage-Images/Gaming.jpg" style="width:100%" alt="Politics">
                <div class="text">Gaming;<br>Video game: Battlestations Pacific</div>
              </div>
            
              <div class="mySlides fade">
              <div class="numbertext">4 / 4</div>
                <img src="Webpage-Images/Politics-1A.jpg" style="width:100%" alt="Consumer Technology">
                <div class="text">Politics</div>
             </div>

              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
                 <br>

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
    <!--Letter of intro-->            
            <div class="transbox">
            <h2>Letter of introduction</h2>
            <p>Craig Walkup<br>
                                Clovis, CA 93619
                                <br><br><br>
                                Wednesday November 2, 2016 
                                <br><br>
                                Dear Industry Professionals:
                                <br><br>
                                Firstly, I consider myself to be an aviation, tech gaming, and a political enthusiast. My goal is to first get a job in the military and then getting a job in either computer science, information technology, or cybersecurity.   
                                <br><br>
                                In addition, I’m pretty capable of learning quite a lot, in terms of academics, although I can be a pretty slow learner and will need additional time to acquire as much concept as I need to understand to become successful in any of my academic classes, compared to all the other students. 
                                <br><br>
                                Furthermore, this personal website goes nearly deep into my professional background information, with the addition of a resume, a number of academic related samples, and a way to contact me. 
                                <br><br>
                                In Conclusion, I think this is mostly everything that you know about me, just by reading this letter. I inform you to please have the chance to look over at my website, and eventually contact me for any questions or suggestions that you have.  
                                <br><br>
                                Sincerely,<br>
                                Craig Walkup<br> 
                                walkupcraig75@gmail.com<br>
                                </p></div>           
            </div>
<!--Footer-->
   <?php 
             require('footer.php');
                 ?>  
        </div> 
    </body>
        </html>            