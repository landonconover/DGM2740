<?php $page='comment'; ?>
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

</head>

<body class="cf">

  <div id="wrap">

    <div id="main" class="clearfix">

    <?php include 'inc/header.php'; ?>

  <div id="container" class="cf">  
    <div id="main">


  	<article class="span8">
				<section>
          <h1>Leave us a comment</h1>

          <p>This page is for you, our customers, to leave comments about the services we provide.
This is a benefit to you by being able to read comments from others. It will also help 
benefit us by taking your comments and using them to help provide service for our 
customers. You can also fax us your comments at 1-801-489-7021 and we will post 
them on this page.</p>

          <form action="#" class='contactForm'>

            <label for="name">Name:</label>
            <input type="text" name='name' id='name'>

            <label for="comments">Comments:</label>
            <textarea name="comments" id="" cols="30" rows="10"></textarea>
            <br>
            <input type="submit">
          </form>

        </section>
			</article>

      <?php include 'inc/aside.php'; ?>

      </div>

  </div> <!--! end of #container -->

  </div>

  </div>

<?php include 'inc/footer.php'; ?>

</body>
</html>

