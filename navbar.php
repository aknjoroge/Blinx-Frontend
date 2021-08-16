 <!--start of navbar-->
 <nav class="navbar navbar-expand-lg  navbar-dark fixed-top" style="border-bottom: 20px solid transparent;border-image: url(static/images/border-image.jpg) 99 0 repeat; position:absolute">
      <picture style="margin-left: 5px; margin-right:5px;" class="logo-image">
        <img width="45px" src="static/images/logo.png" style="opacity: 1.0;">
      </picture>
      <a class="navbar-brand" href="index.html">Blinx Corporation</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <?php
          $navBarLinks = [ "#Home", "#Services", "#Payments" ,"#contact-us" ];
          foreach ($navBarLinks as $link) {
           $name = ltrim($link, '#');
           if($link == "#contact-us"){
             $name= "Contact Us";
           }
            echo " <li class='nav-item active'>
            <a class='nav-link' href='$link'>$name</a>
          </li>
          ";
          }
          ?>
          
        </ul>

      </div>
    </nav>
<!--End of navbar-->