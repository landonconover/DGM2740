  <header class="span12">
  	<div class="inner cf">
  	<nav class="col center">
        <a class="alt <?php if($page == 'book'){echo 'active';} ?>" href="book.php">Book Now</a>
				<a class="alt <?php if($page == 'about'){echo 'active';} ?>" href="about.php">About</a>
        <a class="alt <?php if($page == 'contact'){echo 'active';} ?>" href="contact.php">Contact</a>
         
        <!--[if IE 8 ]>    <a class="alt logo" href="index.php"><img class='logoimg' src="Audio-Visions-WebIE.png" alt="logo"></a> <![endif]-->
        
        <a class="alt <?php if($page == 'comment'){echo 'active';} ?>" href="comment.php">Comment</a>
        <a class="alt <?php if($page == 'photos'){echo 'active';} ?>" href="photos.php">Photos</a>
        <a class="alt <?php if($page == 'music'){echo 'active';} ?>" href="music.php">Music</a>
		</nav>
	</div>
  </header>

  <!-- facebook stuff -->
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>