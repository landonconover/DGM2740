<?php $page='photos'; ?>
<!doctype html>  
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  
  <title>Audio Visions Mobile DJ</title>

  <!-- fonts -->
  <link href='http://fonts.googleapis.com/css?family=Homenaje|Oswald:400,300' rel='stylesheet' type='text/css'>

  <link rel="shortcut icon" href="/favicon.ico">
 	<link rel="stylesheet" href="style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js"></script>

  <link href="js/photoSwipe/photoswipe.css" type="text/css" rel="stylesheet" />
  
  <script type="text/javascript" src="js/photoSwipe/lib/klass.min.js"></script>
  <script type="text/javascript" src="js/photoSwipe/code.photoswipe-3.0.5.min.js"></script>

  <script type="text/javascript">

    (function(window, PhotoSwipe){
    
      document.addEventListener('DOMContentLoaded', function(){
      
        var
          options = {},
          instance = PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a'), options );
      
      }, false);
      
      
    }(window, window.Code.PhotoSwipe));
    
  </script>

</head>

<body class="cf">

  <div id="wrap">

    <div id="main" class="clearfix">

    <?php include 'inc/header.php'; ?>

  <div id="container" class="cf">  
    <div id="main">


  	<article class="span8">
				<div id='slider' class='swipe'>
          
            <ul id="Gallery" class="gallery">
              <p>Click on the thumbnails to view fullsize.</p>
              <li><a href="img/full/001.jpg"><img src="img/thumb/001.jpg" alt="Image 001" /></a></li>
              <li><a href="img/full/002.jpg"><img src="img/thumb/002.jpg" alt="Image 002" /></a></li>
              <li><a href="img/full/003.jpg"><img src="img/thumb/003.jpg" alt="Image 003" /></a></li>
              <li><a href="img/full/004.jpg"><img src="img/thumb/004.jpg" alt="Image 004" /></a></li>
              <li><a href="img/full/005.jpg"><img src="img/thumb/005.jpg" alt="Image 005" /></a></li>
              <li><a href="img/full/006.jpg"><img src="img/thumb/006.jpg" alt="Image 006" /></a></li>
              <li><a href="img/full/007.jpg"><img src="img/thumb/007.jpg" alt="Image 007" /></a></li>
              <li><a href="img/full/008.jpg"><img src="img/thumb/008.jpg" alt="Image 008" /></a></li>
              
            </ul>
        </div>
			</article>

      <?php include 'inc/aside.php'; ?>

      </div>

  </div> <!--! end of #container -->

  </div>

  </div>

<?php include 'inc/footer.php'; ?>

</body>
</html>

