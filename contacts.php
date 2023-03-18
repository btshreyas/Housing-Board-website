<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!-- <title> Responsive Contact Us Form  | CodingLab </title>-->
    <link rel="stylesheet" href="contact.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    <div class="menu">
        <h1 style="margin-left: 30px;">Municipality Housing Borard</h1>
        <ul>
            <li><a href="visitorhome.html">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="contacts.html">Contacts</a></li>    
            <li><a href="https://www.google.com/search?q=housing+board+news&rlz=1C1CHBF_enIN929IN929&sxsrf=AJOqlzWxjSOMPLCKfaha94PJpD862-OfCg:1673093542361&source=lnms&tbm=nws&sa=X&ved=2ahUKEwiTt5KSt7X8AhWaXmwGHQ9TDZwQ_AUoAXoECAEQAw&biw=1536&bih=656&dpr=1.25">News</a></li>
        </ul>
    </div>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Hostel</div>
          <div class="text-one">Hunsmarhalli</div>
          <div class="text-two">Banglore - 562157</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 8745239012</div>
          <div class="text-two">+91 9943876543</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">housingboard@gmail.com</div>
          <div class="text-two">customer.info@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      <form action="cont.php" method="post">
        <div class="input-box">
          <input type="text" name="name" placeholder="Enter your name" required/>
        </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="Enter your email" required/>
        </div>
        <div class="input-box message-box">
            <input type="text" name="desc" placeholder="Enter your message" required/>
        </div>
        <div class="button">
          <input type="submit" value="Send Now" >
        </div>
        <div class="submit" style="background-color: lightgreen; opacity: 0.8;
        display: none;
        width: 100%;
        height: 15px; ">
          Submitted Successfully
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>
