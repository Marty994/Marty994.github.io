<!DOCTYPE html>
<html lang="en">
<head>
  <title>search</title>
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
      <div class="stuck_inner">
        <div class="brand">
          <h1 class="brand_name">
            <a href="index.html">Dino<span>rex</span></a>
          </h1>
        </div>
        
        <nav class="nav">
          <ul class="sf-menu" data-type="navbar">
            <li>
              <a href="./">Home</a>
            </li>
            <li>
              <a href="index-1.html">About</a>
              <ul>
                <li>
                  <a href="#">Aliuam congu</a>
                </li>
                <li>
                  <a href="#">Ferentum nisl</a>
                  <ul>
                    <li>
                      <a href="#">Aliuam congu</a>
                    </li>
                    <li>
                      <a href="#">Ferentum nisl</a>
                    </li>
                    <li>
                      <a href="#">Mauris accan</a>
                    </li>
                    <li>
                      <a href="#">Nullavel diam</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">Mauris accan</a>
                </li>
                <li>
                  <a href="#">Nullavel diam</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="index-2.html">Services</a>
            </li>
            <li>
              <a href="index-3.html">projects</a>
            </li>
            <li>
              <a href="index-4.html">contacts</a>
            </li>
          </ul>
        </nav>
        
         <div class="search">
            <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
              <label class="search-form_label">
                <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder="Enter word"/>
                <span class="search-form_liveout"></span>
              </label>
            </form>
            <a class="search-form_toggle" href="#"></a>
        </div>
      </div>
  </div>
</header>
  <!--========================================================
                            CONTENT
  =========================================================-->
<main>
   <section id="content" class="content">
    <section class="well">
        <div class="container">
          <h4>Search Results</h4>
          <div id="search-results"></div>
        </div>
    </section>
  </section>
   <section class="well bg-secondary well__01">
      <div class="container">
        <div class="row">
          <div class="col-md-3 resp-center">
            <h3>about us</h3>
            <p>
               Sed eleifend ornare metus, non rhoncus elit ultrices quis. Curabitur et metus ac sapien dictum tempus. Nam blandit sed ligula faucibus element um. Sed sed consequat nisi. Etiam mauris massa
            </p>
            <p>
                Sodales lobort dictum sollicitudin felis. Vestibulum tristique urna 
                ex, eu vehicula magna mattis maximus. Aliquam 
            </p>
          </div>
          <div class="col-md-3 resp-center resp-margin">
            <h3>Flickr Widget</h3>
              <div class="flickr_widget">
                  <div class="flickr_cont">
                    <a href="#">
                      <img src="images/page-1_img8.jpg" alt="">
                    </a>
                  </div>
                  <div class="flickr_cont">
                    <a href="#">
                      <img src="images/page-1_img9.jpg" alt="">
                    </a>
                  </div>
                  <div class="flickr_cont">
                    <a href="#">
                      <img src="images/page-1_img10.jpg" alt="">
                    </a>
                  </div>
                 <div class="flickr_cont">
                        <a href="#">
                          <img src="images/page-1_img11.jpg" alt="">
                        </a>
                 </div>
                  <div class="flickr_cont">
                    <a href="#">
                      <img src="images/page-1_img12.jpg" alt="">
                    </a>
                  </div>
                  <div class="flickr_cont">
                    <a href="#">
                      <img src="images/page-1_img13.jpg" alt="">
                    </a>
                  </div>            
              </div>
          </div>
          <div class="col-md-3 resp-center resp-margin">
            <h3>Categories</h3>
              <ul class="box2">
                <li><a href="#">Sed eleifend</a></li>
                <li><a href="#">Penareme</a></li>
                <li><a href="#">Metus no</a></li>
                <li><a href="#">tusnon</a></li>
                <li><a href="#">rhoncus elit</a></li>
                <li><a href="#">Curabitu</a></li>
                <li><a href="#">elit ultrices</a></li>
                <li><a href="#">ultrices quis </a></li>
                <li><a href="#">Curabitur et us</a></li>
              </ul>
          </div>
          <div class="col-md-2 resp-center resp-margin">
            <h3>Follow us</h3>
            <ul class="socials">
              <li>
                  <a href="#">
                    <span class="fa-google-plus"></span> Google +
                  </a>
              </li>
              <li>
                  <a href="#">
                     <span class="fa-twitter"></span> Twitter
                  </a>
              </li>
              <li>
                  <a href="#">
                     <span class="fa-facebook-f"></span> Facebook
                  </a>
              </li>
              <li>
                  <a href="#">
                     <span class="fa-linkedin"></span> LinkedIn
                  </a>
              </li>
              <li>
                  <a href="#">
                     <span class="fa-rss"></span> RSS
                  </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!--========================================================
                            FOOTER
  =========================================================-->
  <footer class="resp-center">
    <div class="container">

    <div class="brand brand2">
          <h1 class="brand_name">
            <a href="./">Constr<span>ex</span></a>
          </h1>
    </div>
    <div class="copyright">
      © <span id="copyright-year"></span> -
        <a href="index-5.html">Privacy Policy</a>
    </div>
      
      
    </div>
  </footer>
</div>

<script src="js/script.js"></script>
</body>
</html>






















