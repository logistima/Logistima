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
                <li><a href = "mailto:logistima1@gmail.com?subject = Feedback&body = Message">CONTACT</a></li>
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
                <p><b>LOGISTIMA</b>
                where we merge essential logistics services with a commitment to excellence, allowing you to witness a distinct shift in supply chain management that will enhance your business performance and pave the way for continued success.
                </p>
                <p>
                Unlocking opportunities for sustainable business enhancement through our cutting-edge logistics services. Embark on a journey towards enhanced business experiences and assured success. Sign up today to begin revolutionizing the organization of your supply chain
                </p>
            </div>
        </div>
         
    </section>
    <section class="services" id="services">
        <h4>Our Services</h4>
            
        <div class="container">
          <div class="boxx">Forecasting needs: Artificial intelligence can analyze historical data and influencing factors such as past demand, weather factors, and market events to anticipate future needs for shipments. This can help plan ahead and avoid delays.</div>
          <div class="boxx">Routing Optimization: AI can accurately optimize the routing of shipments using real-time information about traffic, weather conditions, and road conditions. Drivers can be better directed to avoid delays.</div>
          <div class="boxx">Improved monitoring: AI can be used to continuously monitor shipments and analyze data in order to detect any unexpected changes or delays and take immediate action.</div>
          <div class="boxx">Smart Delivery: Artificial intelligence can be applied to optimize delivery timings and choose the best routes based on estimated time and actual conditions.</div>
          <div class="boxx">Continuous improvement: AI can provide periodic reports and analysis on the performance of shipping operations and areas that require improvement, helping to continuously improve operations.</div>
          <div class="boxx">Forecasts and Customer Notifications: AI can provide real-time information to customers about the status of their shipments and provide notifications in the event of delays or unexpected changes.</div>
        </div>
    </section>

    <footer>
        <style>
            footer { background-color: #333; color: #fff; padding: 20px 0; }
            .footer-content, .footer-links {text-align: center;}
            .footer-content p {margin: 0; font-size: 14px;}
            .footer-links ul { list-style-type: none; padding: 0; }
            .footer-links li {display: inline; margin: 0 15px;}
            .footer-links a {text-decoration: none; color: #fff; }
            .footer-links a:hover {text-decoration: underline;}
            @media (max-width: 768px) {
            .footer-links {text-align: center; }
            .footer-links li {display: block;margin: 10px 0;}
            .services{height: auto;}}
        </style>
    <div class="footer-content">
        <p>&copy; 2023 LOGISTIMA</p>
        <p>Contact: logistima1@gmail.com</p>
    </div>
    <div class="footer-links">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#Contact">Contact</a></li>
        </ul>
    </div>
</footer>

    <script src="app.js"></script>

   
</body>
</html>
