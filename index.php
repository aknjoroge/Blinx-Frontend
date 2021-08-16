

<!DOCTYPE html>
<html lang="en">
<?php
include "header.php"
?>
  
  <body >
    <div class="all-content" class="content"><!--main container-->
   <?php
   include "navbar.php"
   ?>

<!--home section-->
<div class="container home" id="home-section">
  <div class="row">

    <div class="col-md-4 col-md-push-6 image-column">
      <img src="static/images/Black Family - Mom, Dad and Daughter.svg" alt="Home-Image" class="homepage-image">
    </div>
    <div class="col-md-8 col-md-pull-6 home-main-info">
     <h2 class="home-heading">Blinx Corporation,<br>We Are The Solution</h2>
     <p class="home-text">At Blinx Corporation, customer satisfaction is paramount.</p>
     <p class="home-text">For us, it's solutions for the people, by the people,with the people using Technology.</p><br>

     <p class="home-text"> At Blinx Corporation,our main goal is finding solutions for our customers, and not just solutions, but the best there is.<br><strong style="color: yellow;text-align:center;">We Are The Technology</strong></p>
    <button class="contact-us-button">Contact Us</button>
    <!-- <a href="https://api.whatsapp.com/send/?phone=254758413462&text=Hello%21+I%27m+interested+in+your+services.&app_absent=0" role="button" id="whatsapp-circle"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a> -->
    </div>

  </div>
</div>
<!--home section end-->

<!--start of services section-->
<div class="services" id="Services">

<h2 class="services-heading">Services</h2>
<p class="services-paragraph">We offer a variety of services of which are listed below:</p><br>

  <div class="container">
    <div class="row">

      <div class="col-sm">
      <i class="fas fa-mobile icon fa-2x"></i><h6 class="service-item">Mobile App Development</h6>
      <p class="service-item">Giving users an exceptional experience is what makes us stand out in mobile app development.</p>
      </div>
      <div class="col-sm">
        <i class="fas fa-globe icon fa-2x"></i> <h6 class="service-item">Web Development</h6>
        <p class="service-item">The perfomance of websites is the most crucial part that makes the difference, fortunately, we have quite an experience in the same.</p>
      </div>
      <div class="col-sm">
        <i class="fas fa-network-wired fa-2x"></i><h6 class="service-item">Network Design and Implimentation</h6>
        <p class="service-item">For the sake of businesses, enterprises or even homes, we are the solution to your network needs.</p>
      </div>
      
    </div>

    <div class="row">

      <div class="col-sm">
        <i class="fas fa-file-invoice-dollar fa-2x"></i><h6 class="service-item">Intergration of Payments</h6>
      <p class="service-item">Payment has never been easy.For that reason both Mobile payments and online mobile payments can be intergrated into your systems by us.</p>
      </div>
      <div class="col-sm">
        <i class="fas fa-blog fa-2x"></i> <h6 class="service-item">Hosting</h6>
        <p class="service-item">Struggling to host your web app? Say no more, We promise 24/7 online presence for your web app.</p>
      </div>
      <div class="col-sm">
        <i class="fas fa-phone-alt fa-2x"></i><h6 class="service-item">Support</h6>
        <p class="service-item">We provide 24/7 IT support to both our clients or any individuals seeking clarity for any tech issue.</p>
      </div>
      
    </div>
  </div>

</div><!--end of services section-->

<!--Making Payment section-->
<div class="payments" id="Payments">
  <h3 class="payments-heading"> Making Payments</h3>
  <p class="payments-paragraph">Please make all the payments via the method stated below. Any other form of payment wont be accepted.</p>

  <table class="payment-table">
    <tr>
      <th>MPESA PAYBILL</th>
    </tr>
    <tr>
    <th>PAYBILL NO.</th>
  </tr>
  <tr>
    <td>247247</td>
  </tr>
  <tr>
    <th>ACCOUNT NO.</th>
  </tr>
  <tr>
    <td>0758413462</td>
  </tr>
  </table>
</div>
<!--End of making Payment section-->

<!--contact us section-->
<div class="contact-section">
<div class="contactus" id="contact-us">
  <h3 class="contactus-heading">Contact Us</h3><br>
  <img src="static/images/Black Men Office Video Chat.svg" class="contact-image">
<?php 
include "form.php"?>
</div>

</div>
<!--end of contact section-->


<?php
include"footer.php"
?>

</div><!--end of main container-->



</body>
</html>



