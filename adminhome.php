<?php
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminhomedesign.css">
    <title>Home Page</title>
</head>
<body>
  <div class="drop">
    Welcome, <?php echo $_SESSION['admin'] ?>
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
            <li><a href="homede.php">Houses</a></li>
            <li><a href="applicationde.php">Application</a>
            <li><a href="allocationsemi.php"> Allocation</a>
            <li><a href="contacts.php ">Contacts</a>
            </li>        
            <li><a href="https://www.google.com/search?q=housing+board+news&rlz=1C1CHBF_enIN929IN929&sxsrf=AJOqlzWxjSOMPLCKfaha94PJpD862-OfCg:1673093542361&source=lnms&tbm=nws&sa=X&ved=2ahUKEwiTt5KSt7X8AhWaXmwGHQ9TDZwQ_AUoAXoECAEQAw&biw=1536&bih=656&dpr=1.25">News</a>
            </li>
            <li><a href="visitorhome.html">Logout</a></li>
        </ul>
    </div>
    <marquee behavior="alternate" direction="right" style="border: BLACK 2px;background: linear-gradient(-45deg, #eeddee, #d8eefa, #f7d7ec, #e9d3f8);" >ALL ADMINS ARE REQUESTED TO ATTEND MEETING ON 01/05/23 BY 10.00 AM AT ADMIN'S OFFICE.  </marquee>
    <div class="flex">
        <div class="f1"> <div class="f1div" style="background-color: bisque; font: bold" ><h3><b><u>NOTICE</u></b></h3> </div> <p><B> -> ALL ADMINS ARE REQUESTED TO ATTEND MEETING ON 01/05/23 AT ADMIN'S OFFICE BY 10.00 AM </B></p>  </div>
        <div class="f2"> <div class="f2div" style="background-color: bisque; font: bold" ><H3><U><B>COMPLAINT REGISTER</B></U></H3>   </div> <h4><b>-> FIRE HOES LEAKAGE NEAR CHILDREN PLAY AREA. <BR><BR>-> SECURITY CAMERA MUST BE INSTALLED. </b></h4></div>
        <div class="f3"> <div class="f3div" style="background-color: bisque; font: bold"><H3><U><B>VISION</B></U></H3>  </div> <H4><B><P>WE ARE DEDICATED TO OUR PEOPLE <BR><BR> -> WE OBEY RULES AND REGULATION SET BY JUDICIARY</P></B></H4></div>
        <div class="f4"> <div class="f4div" style="background-color: bisque; font: bold" ><H3><U><B>PENSION</B></H3></U></div>  <H4><B><P>You are able to join the Defined Contribution Scheme (administered by the Social Housing Pension Scheme) at any time. You will be automatically enrolled in the Scheme after 3 months service,if applicable</P></B></H4></div>
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