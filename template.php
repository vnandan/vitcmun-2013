<?php
function head(){
    ?>
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <meta http-equiv="content-language" content="en">
  <link rel="icon" href="favicon.ico" type="image/x-icon"> 
  <meta name="viewport" content="width=device-width" />
  <meta name="author" content="Vipul Nandan"/>

  <title>VITC MUN'13 Youth. Leadership. Peacemaking.</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <style>
        
  body{
     background: url(img/logo1.jpg) no-repeat center center fixed;   
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      height: 100%;
    }
    </style>
  <script src="js/custom.modernizr.js"></script>

</head>
<body>
    <img src="img/logo1.jpg" style="position: fixed;left:0px;top: 0px; width:100%; height: 100%;z-index: 0;" />
    <!--FACEBOOK LIKE-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=397136957055105";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--end FACEBOOK-->
<!--FB Like button-->

    <!-- Navigation -->
    <div class="fixed">
      <nav class="top-bar">
        <ul class="title-area">
          <!-- Title Area -->
          <li class="name">
            <h1>
              <a href="#">
                VITC MUN'13
              </a>
            </h1>
          </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

       <section class="top-bar-section">
            <ul class="right">
              <li class="divider"></li>
            
              <li><a href="index.php">HOME</a></li>
              <li class="divider"></li>
              <li class="has-dropdown"><a href="#">REGISTRATION</a>
                <ul class="dropdown">
                    <li><a href="http://goo.gl/6W5vii" target="_blank">Delgate</a></li>
                    <li><a href="http://goo.gl/h1te9w" target="_blank">IP</a></li>
                </ul>
              </li>
              <li class="divider"></li>
              <li class="has-dropdown"><a href="#">CONFERENCE DETAILS</a>
                <ul class="dropdown">
                  <li><a href="about.php">ABOUT MUN</a></li>                  
                  <li><a href="agendas.php">AGENDAS</a></li>
                  <li class="has-dropdown"><a href="#">COMMITEES</a>
                  <ul class="dropdown">
                    <li><a href="ga.php">UNGA</a></li>
                    <li><a href="icc.php">INDIAN CRISIS COUNCIL</a></li>
                    <li><a href="unep.php">UNEP</a></li>
                  </ul>
                  </li>
                </ul>
              </li>
              <li class="divider"></li>
              <li class="has-dropdown"><a href="#">RESOURCES</a>
                <ul class="dropdown">
                  <li class="has-dropdown"><a href="#">MATRIX</a>
                    <ul class="dropdown">
                        <li><a href="assets/UNGA.pdf" target="_blank">UNGA</a></li>
                        <li><a href="assets/ICC.pdf" target="_blank">INDIAN CRISIS COUNCIL</a></li>
                        <li><a href="assets/UNEP.pdf" target="_blank">UNEP</a></li>
                    </ul>
                    </li>
                  <li><a href="#">MATERIAL</a></li>
                </ul>
              </li>
              <li class="divider"></li>
              <li class="has-dropdown"><a href="#">ALLOTMENT</a>
                <ul class="dropdown">
                  <li><a href="#">DELGATES</a></li>                  
                  <li><a href="#">IP</a></li>
                </ul>
              </li>
              <li class="divider"></li>
              <li class="has-dropdown"><a href="#">TEAM</a>
                <ul class="dropdown">
                  <li><a href="eb.php">EB</a></li>
                  <li><a href="oc.php">OC</a></li>                  
                  <li><a href="contact.php">CONTACT</a></li>
                </ul>
              </li>
              <li class="divider"></li>
               <li><a href="#"><div class="fb-like" data-href="https://www.facebook.com/groups/vitccmun.2013/" data-width="50" data-layout="button_count" data-show-faces="false" data-send="false"></div></a></li>
            </ul>
            <!-- Right Nav Section -->
          </section>
    </nav>
      </div>
    <!-- End Navigation -->
    <div id="container" class="large-8 small-12 large-offset-2">
  
  
  <?php
}
function tail(){
    ?>
    </div>
    
    <footer class="row">
    <div class="large-12 columns">
      <hr>
      <div class="row">
        <div class="large-6 columns">
          <p>&copy; VITC DEBSOC</p>
        </div>
        <div class="large-6 columns">
          <p class="right" id="author">Designed by: <a href="http://facebook.com/vipul.nandan" target="_blank">Vipul Nandan</a></p>
        </div>
       
      </div>
    </div>
  </footer>
	
  <script>

  document.write('<script src=js/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
  <script type="text/javascript">
    $(window).load(function() {
      $('#featured').orbit({ fluid: '2x1' });
    });
  </script>
  <!-- End Footer -->

</body>
</html>
<?php
}


?>