<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css"/>

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>    
  	<script src='js/selectivizr-min.js'></script>
    <![endif]-->

    <script src='js/device.min.js'></script>
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>
    <div id="stuck_container" class="stuck_container">
      <div class="brand brand__mode1">
        <h1 class="brand_name">
          <a href="./">Bikers Roads</a>
        </h1>
      </div>
      
      <nav class="nav">
        <ul class="sf-menu">
          <li>
            <a href="./">Home</a>
          </li>
          <li>
            <a href="index-1.html">About</a>
            <ul>
              <li>
                <a href="#">Quisque nulla</a>
              </li>
              <li>
                <a href="#">Vestibulum libero</a>
                <ul>
                  <li>
                    <a href="#">Lorem</a>
                  </li>
                  <li>
                    <a href="#">Dolor</a>
                  </li>
                  <li>
                    <a href="#">Sit amet</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Vivamus eget nibh</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="index-2.html">Gallery</a>
          </li>
          <li>
            <a href="index-3.html">News</a>
          </li>
          <li>
            <a href="index-4.html">Contacts</a>
          </li>
        </ul>
      </nav>
      <div class="search">
        <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
            <label class="search-form_label">
                <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder="Search.."/>
                <span class="search-form_liveout"></span>
            </label>
            <button class="search-form_submit fa-search" type="submit"></button>
        </form>
        <a class="search-form_toggle" href="#"></a>
      </div>
    </div>
    <div class="brand">
      <img src="images/page-2_img05.png" alt="">
      <p class="brand_name">Biker Leather</p>
      <p class="brand_slogan">Online Store</p>
    </div>
  </header>

    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section id="content" class="content">
            <div class="container ">
                <section class="well">
                    <h4>Search Results</h4>
                    <div id="search-results"></div>
                </section>
            </div>
        </section>
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
    <div class="container">
      <div class="row">
        <div class="grid_4 box2">
          <h4>Free Shipping</h4>
          <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod temp.</p>
        </div>
        <div class="grid_4 box2">
          <h4>50% off</h4>
          <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod temp.</p>
        </div>
        <div class="grid_4 box2">
          <h4>Need Help?</h4>
          <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod temp.</p>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="brand">
          <p class="brand_name">
            <a href="./">Bikers Roads</a>
          </p>
        </div>
        <ul class="socials inline-list">
            <li><a class="icon fa-facebook" href="#"></a></li>
            <li><a class="icon fa-twitter" href="#"></a></li>
            <li><a class="icon fa-google-plus" href="#"></a></li>
            <li><a class="icon fa-pinterest" href="#"></a></li>
        </ul>
        <div class="copyright">
          Biker leather © <span id="copyright-year">2015</span> 
          <a href="index-5.html">Privacy Policy</a>
        </div>
      </div>
    </div>
  </footer>
</div>

<script src="js/script.js"></script>

</body>
</html>