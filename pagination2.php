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
      <a href="catalog.php">1</a>
            <a href="pagination.php">2</a>
            <a href="pagination2.php">3</a>

        <div id="car1">
            <h2>Mercedes-Benz S-Class</h2>
            <div class="photo-container2">
                <img src="img/m1.png" alt="Car 1">
                <img src="img/m2.jpeg" alt="Car 1 - Photo 1">
                <img src="img/m3.png" alt="Car 1 - Photo 2">
                <img src="img/m4.png" alt="Car 1 - Photo 3">
            </div>
            <p>Price: $80,000</p>
            <p>The Mercedes-Benz S-Class is a series of full-size luxury sedans and limousines produced by the German automaker Mercedes-Benz. The S-Class has been the flagship model of Mercedes-Benz for many years and has consistently represented the pinnacle of luxury and comfort in the automotive world. Known for its advanced technology, refined design, and smooth ride, the S-Class is a top choice for those seeking the ultimate luxury driving experience.</p>
            <a href="contact.php" class="buy-now-btn">Buy Now</a>
        </div>
        <div id="car2">
            <h2>Audi Q7</h2>
            <div class="photo-container2">
                <img src="img/Q1.jpeg" alt="Car 2">
                <img src="img/Q2.jpeg" alt="Car 2 - Photo 1">
                <img src="img/Q3.jpeg" alt="Car 2 - Photo 2">
                <img src="img/Q4.jpeg" alt="Car 2 - Photo 3">
            </div>
            <p>Price: $60,000</p>
            <p>The Audi Q7 is a midsize luxury SUV that offers a perfect blend of style, performance, and versatility. With its spacious interior, advanced technology features, and comfortable ride, the Q7 is an excellent choice for families and individuals alike. Whether you're heading out on a road trip or navigating city streets, the Audi Q7 will impress with its smooth handling and upscale amenities.</p>
            <a href="contact.php" class="buy-now-btn">Buy Now</a>
        </div>
        <div id="car3">
            <h2>Porsche 911</h2>
            <div class="photo-container2">
                <img src="img/p1.jpeg" alt="Car 3">
                <img src="img/p2.jpeg" alt="Car 3 - Photo 1">
                <img src="img/p3.jpeg" alt="Car 3 - Photo 2">
                <img src="img/p4.jpeg" alt="Car 3 - Photo 3">
            </div>
            <p>Price: $100,000</p>
            <p>The Porsche 911 is a legendary sports car that has captivated enthusiasts and drivers alike for decades. With its iconic design, powerful performance, and precision engineering, the 911 delivers an exhilarating driving experience. Whether you're cruising along scenic roads or pushing the limits on the track, the Porsche 911 offers a perfect balance of performance and luxury.</p>
            <a href="contact.php" class="buy-now-btn">Buy Now</a>
        </div>
        <div id="car4">
            <h2>BMW X5</h2>
            <div class="photo-container2">
                <img src="img/x1.jpeg" alt="Car 4">
                <img src="img/x2.jpeg" alt="Car 4 - Photo 1">
                <img src="img/x3.jpeg" alt="Car 4 - Photo 2">
                <img src="img/x4.jpeg" alt="Car 4 - Photo 3">
            </div>
            <p>Price: $70,000</p>
            <p>The BMW X5 is a luxury midsize SUV that offers a perfect blend of style, performance, and practicality. With its spacious interior, advanced technology, and smooth handling, the X5 is a versatile and comfortable choice for daily commuting and family adventures. Whether you're driving in the city or exploring the great outdoors, the BMW X5 delivers a premium driving experience.</p>
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
