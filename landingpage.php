<?php
// Car details
$carName = "NISSAN GT-R";
$carTagline = "Drive the Future";
$carDescription = "The Nissan GTR delivers thrilling speed, sharp precision, and bold design — a true icon built for those who demand performance.";
$ctaText = "Book a Test Drive";

$topspeed = "315 km/h";
$torque = "467 lb-ft";
$power = "565 HP";
$engine = "3.8L V6 Twin-Turbo";

$features = [
    "Twin-turbocharged 3.8L V6 engine",
    "565 horsepower with lightning-fast acceleration",
    "Advanced all-wheel-drive system",
    "Premium interior with carbon fiber trim",
    "State-of-the-art infotainment system"
];

$carImages = [
    "GTR1.jpg",
    "GTR2.jpg",
    "GTR3.jpg"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $carName; ?> - Landing Page</title>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #1b1f2a;
        color: white;
    }
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 50px;
        border-bottom: 1px solid rgba(255,255,255,0.2);
    }
    header .logo {
        font-weight: bold;
        font-size: 3.2rem;
    }
    nav a {
        color: white;
        text-decoration: none;
        margin: 0 15px;
        font-size: 0.9rem;
    }
    nav a:hover {
        text-decoration: underline;
    }
    .hero {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 50px;
        flex-wrap: wrap;
    }
    .hero-text {
        max-width: 550px;
    }
    .hero-text h1 {
        font-size: 2.8rem;
        font-weight: bold;
        line-height: 1.2;
        margin-bottom: 20px;
    }
    .hero-text p {
        font-size: 1rem;
        margin-bottom: 20px;
        opacity: 0.85;
    }
    .btn {
        display: inline-block;
        padding: 12px 25px;
        border: 1px solid white;
        color: white;
        text-decoration: none;
        transition: 0.3s;
    }
    .btn:hover {
        background: white;
        color: black;
    }
    .hero img {
        max-width: 700px;
        width: 100%;
    }
    .specs {
        display: flex;
        justify-content: center;
        text-align: center;
        gap: 50px;
        padding: 20px 0;
        border-top: 1px solid rgba(255,255,255,0.2);
        border-bottom: 1px solid rgba(255,255,255,0.2);
    }
    .specs div h3 {
        font-size: 1.5rem;
        margin-bottom: 5px;
    }
    .features {
        padding: 30px 50px;
        background: #131722;
    }
    .features h2 {
        margin-bottom: 15px;
    }
    .features ul {
        list-style: none;
        padding: 0;
    }
    .features ul li {
        padding: 8px 0;
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    .gallery {
        background: #0f121a;
        padding: 30px 50px;
        text-align: center;
    }
    .gallery h2 {
        margin-bottom: 20px;
    }
    .gallery img {
        width: 300px;
        height: auto;
        margin: 10px;
        border-radius: 8px;
        border: 2px solid rgba(255,255,255,0.3);
        transition: 0.3s;
    }
    .gallery img:hover {
        transform: scale(1.05);
        border-color: white;
    }
</style>
</head>
<body>

<header>
    <div class="logo"><?php echo $carName; ?></div>
    <nav>
        <a href="#">HOME</a>
        <a href="#">HISTORY</a>
        <a href="#">CONTACT</a>
        <a href="#">TEST DRIVE NOW!</a>
        
    </nav>
</header>

<section class="hero">
    <div class="hero-text">
        <h1>LUXURY PERFORMANCE CARS AT YOUR DESTINATION</h1>
        <p><?php echo $carDescription; ?></p>
        <a href="#features" class="btn">LEARN MORE</a>
    </div>
    <img src="GTR.png" alt="<?php echo $carName; ?>">
</section>

<section class="specs">
    <div>
        <h3>Top speed</h3>
        <p><?php echo $topspeed; ?></p>
    </div>
    <div>
        <h3>Torque</h3>
        <p><?php echo $torque; ?></p>
    </div>
    <div>
        <h3>Power</h3>
        <p><?php echo $power; ?></p>
    </div>
    <div>
        <h3>Engine</h3>
        <p><?php echo $engine; ?></p>
    </div>
</section>

<section id="features" class="features">
    <h2>Key Features</h2>
    <ul>
        <?php foreach ($features as $feature): ?>
            <li><?php echo $feature; ?></li>
        <?php endforeach; ?>
    </ul>
</section>

<section class="gallery">
    <h2>Car Gallery</h2>
    <?php foreach ($carImages as $img): ?>
        <img src="<?php echo $img; ?>" alt="Car Image">
    <?php endforeach; ?>
</section>

</body>
</html>

