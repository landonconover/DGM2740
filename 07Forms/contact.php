<?php
$page = 'contact';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
    <title>Contact</title>

<?php include 'includes.php'; ?>

</head>
<body>
    <div id="container">
        <?php include 'header.php'; ?>

        <div id="prettyBar">
            <div id="prettyLeft">
                <div id="prettyContent"></div>
            </div>
        </div>

        <div id="nav-contain">
            <div id="nav-side">
                <div id="nav-middle">
                    <?php include 'menu.php'; ?>
                </div>
            </div>
        </div>



        <div id="main">
            <div id="left_col">
                <div id="mainContain">
                    <div id="formDiv">
                    <h3>Let us know how we can help!</h3>
                    <progress value="25" max="100"></progress>
                        <form id="contactForm">
                          <fieldset>

                            <label>Name</label>
                            <input type="text" name="name" placeholder="Your name here!" required autofocus='true' autocomplete='on' pattern='^[a-z A-Z0-9]*$'>
                            <span class="help-block">Please enter your full name.</span>

                            <label>Email</label>
                            <input type="email" name="email" placeholder="YourEmail@somewhere.com" required autocomplete='on'>

                            <label>Telephone</label>
                            <input type="tel" name="telephone" placeholder="">

                            <label>How skilled are you?</label>
                            <input type="text" list="skills" name="skill" placeholder="">

                            <datalist id="skills">
                              <option value="Basicly, the best!">
                              <option value="Pretty darn good">
                              <option value="Middle of the road">
                              <option value="So-so">
                              <option value="Newb">
                            </datalist>

                            <label>Age</label>
                            <input type="number" name="age" placeholder="">

                            <label>Your URL</label>
                            <input type="url" name="url" placeholder="">

                            <label>Date you started crafting?</label>
                            <input type="date" name="dateStarted" placeholder="">

                            <label>Comments</label>
                            <textarea rows="3" name="comments" placeholder='Let us know!' required></textarea>
                            
                            <br />
                            <button type="submit" class="btn">Send Comments</button>
                          </fieldset>
                        </form>
                        </div>

                        <div class="thanks">
                            <h3>Thanks!</h3>
                            <hr>
                            <p>Someone will be in contact shortly.</p>
                        </div> 

                </div>
            </div>

        </div>

        <?php include 'footer.php'; ?>

    <script src="js/jQuery.js"></script>
    <script src='js/main.js'></script>


    </div>
</body>
</html>