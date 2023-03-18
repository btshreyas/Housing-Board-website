<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ownerhome1.css">
    <title>Home Page</title>
</head>
<body>
  <div class="drop">
    Welcome, <?php  echo $_SESSION['name1'];?>
  </div>
    </form>
    <hr>
    <header>
        <img src="img1.jpg">
        <p>MUNICIPALITY HOUSING BOARD</p>
    </header>
    <div class="menu">
        <ul>
            <li><a href="visitorhome.html">Home</a></li>
            <li><a href="adminde.php">Admin</a></li>
            <li><a href="ownhouse.php">House</a></li>
            <li><a href="billpayment.php">Bill</a></li>
            <li><a href="payment_detail_form.php">Payment</a>
            </li>        
            <li><a href="https://www.google.com/search?q=housing+board+news&rlz=1C1CHBF_enIN929IN929&sxsrf=AJOqlzWxjSOMPLCKfaha94PJpD862-OfCg:1673093542361&source=lnms&tbm=nws&sa=X&ved=2ahUKEwiTt5KSt7X8AhWaXmwGHQ9TDZwQ_AUoAXoECAEQAw&biw=1536&bih=656&dpr=1.25">News</a>
            </li>
            <li><a href="contacts.php">Contact</a>
            <li><a href="visitorhome.html">Logout</a></li>
        </ul>
    </div>
    <div class="flex">
    <div class="f1"> <div class="f1div" style="background: linear-gradient(-45deg, #fcc8ea, #b0f3b0, #acdaeb, #f7f0b6); font: bold; border-top-left-radius: 10px;border-top-right-radius: 10px; width: 100;" ><h3><b><u>WELCOME  </u></b></h3></div> <h4><p>We are delighted to have you among us. On behalf of all the members and the management, we would like to extend our warmest welcome and good wishes!</p></h4></div>
        <div class="f2"> <div class="f2div" style="background: linear-gradient(-45deg, #e7c5f0, #92d8d2, #acdaeb, #f5f4b0); font: bold; border-top-left-radius: 10px;border-top-right-radius: 10px; width: 100;" ><h3>  <b> <u>EVENTS </u></b></h3>  </div> <h4><p>  Do not let the efforts of our freedom fighters to go in vain, for we are successful because of their selfless efforts. Happy Republic Day to you and everyone in your family!.<BR> Please gather near playarea for flag host on 26th jan .   </p></p></h4></div>
        <div class="f3"> <div class="f3div" style="background: linear-gradient(-45deg, #fac9fc, #98dba3, #acdaeb, #ebf7ac); font: bold; border-top-left-radius: 10px;border-top-right-radius: 10px; width: 100;"><h3><b><u>  UPDATES </u></b><h3>  </div><h4><p> We are installing a new Water tank.<br>Security camera will be installed in next month.</p></h4> </div>
        <div class="f4"> <div class="f4div" style="background: linear-gradient(-45deg, #f7c4e3, #95c58b, #acdaeb, #f2faae); font: bold; border-top-left-radius: 10px;border-top-right-radius: 10px; width: 100;" ><h3><b><u> Precautions and measure </u></b></h3>   </div><h4><p> Leopard has been spotted near muncipality well. <br>Drainage path at 3rd cross is under repair.Please drive carefully. </p></h4> </div>
    </div>
    <style>
    img {
        vertical-align: middle;
      }
      
      /* Position the image container (needed to position the left and right arrows) */
      .container {
        position: relative;
      }
      
      /* Hide the images by default */
      .mySlides {
        display: none;
        text-align: center;
      }
      
      /* Add a pointer when hovering over the thumbnail images */
      .cursor {
        cursor: pointer;
      }
      
      /* Next & previous buttons */
      .prev,
      .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
      }
      .next {
        margin-right: 150px;
      }
      .prev {
        margin-left: 150px;
      }
      
      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }
      
      /* On hover, add a black background color with a little bit see-through */
      .prev:hover,
      .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
      }
      
      /* Number text (1/3 etc) */
      .numbertext {
        margin-left: 150px;
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }
      
      /* Container for image text */
      .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
      }
      
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      
      /* Six columns side by side */
      .column {
        float: left;
        width: 16.66%;
      }
      
      /* Add a transparency effect for thumnbail images */
      .demo {
        opacity: 0.6;
      }
      
      .active,
      .demo:hover {
        opacity: 1;
      }
      </style>
      <body>
      
      <h2 style="text-align:center">Slideshow Gallery</h2>
      
      <div class="container">
        <div class="mySlides">
          <div class="numbertext">1 / 6</div>
          <img src="img1.jpg" style="width:80%; height: 600px;">
        </div>
      
        <div class="mySlides">
          <div class="numbertext">2 / 6</div>
          <img src="img2.jpg" style="width:80%; height: 600px;">
        </div>
      
        <div class="mySlides">
          <div class="numbertext">3 / 6</div>
          <img src="img3.jpg" style="width:80%; height: 600px;">
        </div>
          
        <div class="mySlides">
          <div class="numbertext">4 / 6</div>
          <img src="img1.jpg" style="width:80%; height: 600px;">
        </div>
      
        <div class="mySlides">
          <div class="numbertext">5 / 6</div>
          <img src="img2.jpg" style="width:80%; height: 600px;">
        </div>
          
        <div class="mySlides">
          <div class="numbertext">6 / 6</div>
          <img src="img3.jpg" style="width:80%; height: 600px;">
        </div>
          
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
      
        <div class="caption-container">
          <p id="caption"></p>
        </div>
      
        <div class="row">
          <div class="column">
            <img class="demo cursor" src="img1.jpg" style="width:100%; height:157px;" onclick="currentSlide(1)" alt="The Woods">
          </div>
          <div class="column">
            <img class="demo cursor" src="img2.jpg" style="width:100%; height:157px;" onclick="currentSlide(2)" alt="Cinque Terre">
          </div>
          <div class="column">
            <img class="demo cursor" src="img3.jpg" style="width:100%; height:157px;" onclick="currentSlide(3)" alt="Mountains and fjords">
          </div>
          <div class="column">
            <img class="demo cursor" src="img1.jpg" style="width:100%; height:157px;" onclick="currentSlide(4)" alt="Northern Lights">
          </div>
          <div class="column">
            <img class="demo cursor" src="img2.jpg" style="width:100%; height:157px;" onclick="currentSlide(5)" alt="Nature and sunrise">
          </div>    
          <div class="column">
            <img class="demo cursor" src="img3.jpg" style="width:100%; height:157px;" onclick="currentSlide(6)" alt="Snowy Mountains">
          </div>
        </div>
      </div>
      
      <script>
      let slideIndex = 1;
      showSlides(slideIndex);
      
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
      
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
      
      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");
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
        captionText.innerHTML = dots[slideIndex-1].alt;
      }
      </script>
    <footer class="foot">
        <img src="img1.jpg" style="width: 200px; height:150px">
        <ul>
            <li> <a href="#">Home</a></li>
            <li> <a href="#">Organization</a></li>
            <li> <a href="#">RTI</a></li>
        </ul>
        <ul>
            <li> <a href="#">About US</a></li>
            <li> <a href="#">About us</a></li>
            <li> <a href="#">FAQ</a></li>
            <li> <a href="#">Policies</a></li>
            <li> <a href="#">Gallery</a></li>
        </ul>
    </footer>
    <div class='lastline'>
        <p>All Rights Reserved</p> 
    </div>
</body>
</html>