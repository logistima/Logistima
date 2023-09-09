<!DOCTYPE html>
<html lang="en">
<head>
    <?php $aboutback = "packging.jpg"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="logo.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" sizes="300*300">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Logistima</title>
</head>
<body>
    <!--menu bar and logo-->
    <nav>
        <img class="logo" src="logo.png" alt="">

        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="logout.php" class="log">logout</a></li>
                </div>
            </ul>
        </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>

    <section class="landing" id="home">
        <div class="maintext">
            <h1 class="">LOGISTIMA</h1>
            <p>ship your package and be safe with Logistima , You can track your shipment from anywhere in the world.</p>

            <!--to track a shipment-->
            <form>
                <input type="text" placeholder="Enter your shipment number">
                <button>track now</button>
            </form>
        </div>
        <div class="mainpac">
            <img src="boxx.png" class="obj">
            <div class="circle"></div>
        </div>
    </section>
    <!--about section-->
    <section class="about" id="about">
    <style type="text/css">
    .about {
        background-image: url('<?php echo $aboutback;?>');
    }
    .container > div:nth-child(2n) {
        background-image: url('<?php echo $aboutback;?>');
    }
</style>
        <div class="aboutbox">
            <div>
               <h2>about us</h2>
                <p><u><b>LOGISTIMA</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse nihil dolorum assumenda! Perferendis nisi quod, quam optio ratione nostrum? Voluptates dolore molestias ratione voluptatum quod laudantium eveniet, error quasi nam.</p> 
                   <p><b><u><i>Our Vision:</i></u></b>  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse nihil dolorum assumenda!</p>
                  <p><b><u><i>Our Mission:</i></u></b>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse nihil dolorum assumenda!.</p>    
            </div>
        </div>
         
    </section>
    <section class="services" id="services">
        <h4>Our Services</h4>
            
        <div class="container">
          <div class="boxx">Lorem ipsum dolor sit amet consectetur adipisicing elit. , commodi quis.</div>
          <div class="boxx">Lorem ipsum dolor sit amet consectetur adipisicing elit. , commodi quis.</div>
          <div class="boxx">Lorem ipsum dolor sit amet consectetur adipisicing elit. , commodi quis.</div>
          <div class="boxx">Lorem ipsum dolor sit amet consectetur adipisicing elit. , commodi quis.</div>
          <div class="boxx">Lorem ipsum dolor sit amet consectetur adipisicing elit. , commodi quis.</div>
          <div class="boxx">Lorem ipsum dolor sit amet consectetur adipisicing elit. , commodi quis.</div>
        </div>
    </section>

    <script src="app.js"></script>
</body>
</html>
