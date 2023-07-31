<!DOCTYPE html>
<html lang="en">
    <head>
    <title>CSS Project</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
      <link rel="icon" type="image/x-icon" href="img/Autosale.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
    </head>
        <body>
            <div id='divheader'>
                <?php
                require_once('functions/menu.php');
                ?>
            </div>
              <main>
                <?php
                if(isset($_POST) && !empty($_POST)){
                $send=$_POST["send"];
                $name=$_POST["name"];
                $email=$_POST["email"];
                $motive=$_POST["motive"];
                $department=$_POST["department"];
                $description=$_POST["message"];
                echo "<p>Thank you for your contact $name, one of our consultants will be in touch by your email address $email, according to your contact motive ($motive) to department ($department), and description ($description).</p>";
                }
                ?>
            <div class="divform">
	            <form action="contact.php" method="post">
		            <h1>Contact form</h1>
		            <label for="name">
                <span>Name:</span>
                </label><input type="text" id="name" name="name" required size="100" maxlength="40" placeholder="Input your name!">
		            <label for="email">
                <span>Email:</span>
                </label><input type="email" id="email" name="email" required size="100" maxlength="40" placeholder="Input your email">
                <fieldset>
                <legend>Motive of contact</legend>
                <label for="cotation">
                <span>Cotation</span>
                </label>
                <input type="radio" id="cotation" name="motive" value="cotation">
                <label for="complaint">
                <span>Complaint</span>
                </label>
                <input type="radio" id="complaint" name="motive" value="complaint">
                </fieldset>
                <label for="department">
                <span>Department:</span>
                </label>
                <select id="department" name="department">
                <option value="sales">Sales</option>
                <option value="mechanical">Mechanical</option>
                <option value="financial">Financial</option>
                </select>
                <label for="description">
                <span>Description:</span>
                </label>
                <textarea id="description" name="message" cols="50" rows="5" placeholder="Please include your description here!"></textarea>
		            <input type="hidden" name="send" value="ok"> <input type="submit" value="Send">
	            </form>
            </div>
              </main>
            <footer class='divfooter'>
            <?php
              require_once('functions/footer.php');
            ?>
          </footer>    
      </body>
</html>