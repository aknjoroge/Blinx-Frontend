<!--Footer section-->
<footer translate="no">
  <div class="container">
    <div class="row">
      <div class="col footer-links">
        
          <h4>MENU</h4>

          <?php
          $footerLinks = [ "#Home", "#Services", "#Payments" ,"#contact-us" ];
          foreach ($footerLinks as $link) {
           $name = ltrim($link, '#');
           if($link == "#contact-us"){
             $name= "Contact Us";
           }
            echo "
            <a href='$link' class='footer-menu'>$name</a><br>
          ";
          }
          ?>
        
      </div>
      <div class="col-6">
        <p>Blinx Corporation is a business company registered in The Republic Of Kenya under Business Number: BNJYHGYT</p>
        <p> Blinx Corporation is an IT company based in Nairobi and Kisumu.<br> We are devoted to finding tech solutions to our society.</p>
      </div>
      <div class="col">
       <h3>Social Media</h3>
       <p>You can also reach us via:</p>
       <a class="fa fa-whatsapp fa-2x" href="https://wa.me/message/2ZIJV5ZWUSQHN1"></a>
       <a class="fa fa-linkedin fa-2x" href="https://www.linkedin.com/in/makaubenson"></a>
       <a class="fa fa-twitter fa-2x" href="https://twitter.com/_makaubenson"></a>
       <a class="fa fa-github fa-2x" href="https://www.github.com/makaubenson"></a>
       <a class="fa fa-telegram fa-2x" href="https://t.me/makaubenson"></a>
       <a class="fa fa-instagram fa-2x" href="https://instagram.com/makau_bn"></a>
      </div>
    </div>
    
  </div>
  <p class="copyright" style="text-align: center;padding-top:5%;">Blinx Corporation ©&nbsp;<span id="currentYear">2021</span></p>
</footer>
<!--end footer-->