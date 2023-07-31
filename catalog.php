<!DOCTYPE html>
<html lang="en">
    <head>
    <title>CSS Project</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
      <link rel="icon" type="image/x-icon" href="img/Autosale.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    </head>
      <body>
    <div id='divheader'>
        <?php
        require_once('functions/menu.php');
        ?>
    </div>
    <main>
        <h1>Car Catalog</h1>
<div class="pagination">
            <a href="catalog.php">1</a>
            <a href="pagination.php">2</a>
            <a href="pagination2.php">3</a>
            
           
        </div>
        <div>
            <h2>Mustang</h2>
          <div class="photo-container2">
            <img src="img/mustang.jpeg" alt="Car 1">
          <img src="img/mustang3.webp" alt="Car 1 - Photo 1">
    <img src="img/mustang2.jpeg" alt="Car 1 - Photo 2">
    <img src="img/mustang4.jpeg" alt="Car 1 - Photo 3">
          </div>
            <p>Price: $25,000</p>
            <p>The Ford Mustang is a series of American automobiles manufactured by Ford. In continuous production since
                1964, the Mustang is currently the longest-produced Ford car nameplate. Currently in its seventh
                generation, it is the fifth-best selling Ford car nameplate. The namesake of the "pony car" automobile
                segment, the Mustang was developed as a highly styled line of sporty coupes and convertibles derived
                from existing model lines, initially distinguished by "long hood, short deck" proportions.[3] </p>
          <a href="contact.php" class="buy-now-btn">Buy Now</a>
            
        </div>
        <div>
            <h2>Dodge Challenger</h2>
          <div class="photo-container2">
            <img src="img/Challenger.jpeg" alt="Car 2">
          <img src="img/challenger2.jpeg" alt="Car 1">
            <img src="img/challenger3.jpeg" alt="Car 1">
          <img src="img/challenger4.jpeg" alt="Car 1 - Photo 1">
    
          </div>
            <p>Price: $30,000</p>
            <p>The Dodge Challenger is the name of three different generations of automobiles (two of those being pony
                cars) produced by American automobile manufacturer Dodge. However, the first use of the Challenger name
                by Dodge was in 1959 for marketing a "value version" of the full-sized Coronet Silver Challenger.</p>
            <a href="contact.php" class="buy-now-btn">Buy Now</a>
        </div>
        <div>
            <h2>Chevrolet Camaro</h2>
          <div class="photo-container2">
            <img src="img/camero.jpeg" alt="Car 1">
          <img src="img/camero3.jpeg" alt="Car 1 - Photo 1">
    <img src="img/camero2.jpeg" alt="Car 1 - Photo 2">
    <img src="img/camero4.jpeg" alt="Car 1 - Photo 3">
          </div>
            
            <p>Price: $22,500</p>
            <p>The Chevrolet Camaro is a mid-size[1][2] American automobile manufactured by Chevrolet, classified as a
                pony car.[3][4][5][6] It first went on sale on September 29, 1966, for the 1967 model year and was
                designed to compete with the Ford Mustang.</p>
            <a href="contact.php" class="buy-now-btn">Buy Now</a>
        </div>
        <div>
            <h2>Jeep Wrangler</h2>
          <div class="photo-container2">
            <img src="img/Wrangler.jpg" alt="Car 1">
          <img src="img/Wrangler2.jpeg" alt="Car 1 - Photo 1">
    <img src="img/wrangler3.png" alt="Car 1 - Photo 2">
    <img src="img/wrangler4.jpeg" alt="Car 1 - Photo 3">
          </div>
           
            <p>Price: $27,800</p>
            <p>The Jeep Wrangler is a series of compact and mid-size four-wheel drive off-road SUVs manufactured by Jeep
                since 1986, and currently in its fourth generation. The Wrangler JL, the most recent generation, was
                unveiled in late 2017 and is produced at Jeep's Toledo Complex.</p>
          <a href="contact.php" class="buy-now-btn">Buy Now</a>
        </div>
       
    </main>

    <footer class='divfooter'>
        <?php
        require_once('functions/footer.php');
        ?>
    </footer>
</body>

</html>
