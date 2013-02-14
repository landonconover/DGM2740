<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
    <title>04b Adaptive Navigation</title>

    <link href='http://fonts.googleapis.com/css?family=Rambla:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/phone.css">
    <link rel="stylesheet" href="css/tablet.css">
    <link rel="stylesheet" href="css/desktop.css">

</head>
<body>

<div id="container">
    <header>
        <div id="phone">1-800-123-4567</div>
        <h1>Home Center</h1>
        <div class="clear"></div>
    </header>

    <nav>
        <ul>
            <li> <a href="#">Item 1</a>
                <ul>
                    <li><a href="#">Sub-Item 1</a></li>
                    <li><a href="#">Sub-Item 2</a></li>
                    <li><a href="#">Sub-Item 3</a></li>
                </ul> 
            </li>
            <li><a href="#">Item 2</a>
                <ul>
                    <li><a href="#">Sub-Item 1</a></li>
                    <li><a href="#">Sub-Item 2</a></li>
                    <li><a href="#">Sub-Item 3</a></li>
                </ul> 
            </li>
            <li><a href="#">Item 3</a>
                <ul>
                    <li><a href="#">Sub-Item 1</a></li>
                    <li><a href="#">Sub-Item 2</a></li>
                    <li><a href="#">Sub-Item 3</a></li>
                </ul> </li>
            <li><a href="#">Item 4</a></li>
            <li><a href="#">Item 5</a></li>
        </ul>
        <div class="clear"></div>
    </nav>

    <div id="content">
        <div class="row">
            <article>
                <h3>Heading</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolorem debitis harum ipsum fuga sunt corrupti quo iure animi officiis autem molestias in magni asperiores id quidem rem eos minima.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolorem debitis harum ipsum fuga sunt corrupti quo iure animi officiis autem molestias in magni asperiores id quidem rem eos minima.
                </p>
            </article>
        </div>

        <div class="row">
            <article class="col">
                <h3>Heading</h3>
                <figure class="right"><img src="http://placehold.it/140x140" alt=""/>
                <figcaption>Caption</figcaption>
                </figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur doloremque explicabo voluptatibus totam similique minima aut aperiam quidem consectetur magni reiciendis eveniet velit saepe fugiat accusantium excepturi dignissimos voluptate commodi. </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur doloremque explicabo voluptatibus totam similique minima aut aperiam quidem consectetur magni reiciendis eveniet velit saepe fugiat accusantium excepturi dignissimos voluptate commodi. </p>
            </article>

            <article class="col">
                <h3>Heading</h3>
                <figure class="right"><img src="http://placehold.it/140x140" alt=""/>
                <figcaption>Caption</figcaption>
                </figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur doloremque explicabo voluptatibus totam similique minima aut aperiam quidem consectetur magni reiciendis eveniet velit saepe fugiat accusantium excepturi dignissimos voluptate commodi. </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur doloremque explicabo voluptatibus totam similique minima aut aperiam quidem consectetur magni reiciendis eveniet velit saepe fugiat accusantium excepturi dignissimos voluptate commodi. </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur doloremque explicabo voluptatibus totam similique minima aut aperiam quidem consectetur magni reiciendis eveniet velit saepe fugiat accusantium excepturi dignissimos voluptate commodi. </p>
            </article>
        </div>

        <div class="row">
            <article class="col">
                <h3>Heading</h3>
                <figure class="right"><img src="http://placehold.it/140x140" alt=""/>
                <figcaption>Caption</figcaption>
                </figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur doloremque explicabo voluptatibus totam similique minima aut aperiam quidem consectetur magni reiciendis eveniet velit saepe fugiat accusantium excepturi dignissimos voluptate commodi. </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur doloremque explicabo voluptatibus totam similique minima aut aperiam quidem consectetur magni reiciendis eveniet velit saepe fugiat accusantium excepturi dignissimos voluptate commodi. </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur doloremque explicabo voluptatibus totam similique minima aut aperiam quidem consectetur magni reiciendis eveniet velit saepe fugiat accusantium excepturi dignissimos voluptate commodi. </p>
            </article>

            <article class="col">
                <h3>Heading</h3>
                <figure class="right"><img src="http://placehold.it/140x140" alt=""/>
                <figcaption>Caption</figcaption>
                </figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur doloremque explicabo voluptatibus totam similique minima aut aperiam quidem consectetur magni reiciendis eveniet velit saepe fugiat accusantium excepturi dignissimos voluptate commodi. </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur doloremque explicabo voluptatibus totam similique minima aut aperiam quidem consectetur magni reiciendis eveniet velit saepe fugiat accusantium excepturi dignissimos voluptate commodi. </p>
            </article>
        </div>
    </div>

    <div class="clear"></div>

    <div id="social">
        <div class="box"><a href="#">Facebook</a></div>
        <div class="box"><a href="#">Youtube</a></div>
        <div class="box"><a href="#">Twitter</a></div>
        <div class="box"><a href="#">Linked In</a></div>
        <div class="box"><a href="#">Google Plus</a></div>
        <div class="box"><a href="#">Pintrest</a></div>

        <div class="clear"></div>

    </div>


    <footer>
    <p>Copyright Landon Conover 2013</p>
    </footer>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

<script>

$(function() {
       
      // Create the dropdown base
      $("<select />").appendTo("nav");
      
      // Create default option "Go to..."
      $("<option />", {
         "selected": "selected",
         "value"   : "",
         "text"    : "Go to..."
      }).appendTo("nav select");
      
      // Populate dropdown with menu items
      $("nav a").each(function() {
       var el = $(this);
       $("<option />", {
           "value"   : el.attr("href"),
           "text"    : el.text()
       }).appendTo("nav select");
      });
      
       // To make dropdown actually work
      $("nav select").change(function() {
        window.location = $(this).find("option:selected").val();
      });
     
});
</script>


</body>
</html>