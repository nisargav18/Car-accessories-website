<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Gears Tech Car Accessories</title>
 </head>

 <style>
   * {
     padding: 0;
     margin: 0;
     box-sizing: border-box;
    }
    body {
     font-family: 'Times New Roman';
     background-image: url('carbg.jpg'); 
     background-size: cover; 
     background-attachment: fixed; 
     background-repeat: no-repeat; 
     color: #fff;
    }
    h2 {
     text-decoration: underline;
     padding-bottom: 8px;
     font-size: 40px;
    }
    header {
     background-color:#483d8b;
     color: #fff;
     text-align: left;
     padding: 15px 0;
     font-size: 25px;
     height: 200px;
    }
    .logo-container {
     display: flex;
     align-items: center;
     margin-left: 15px; 
    }
    .logo-container img {
     max-width: 250px; 
     margin right: 15px; 
    }
    .logo-container h1 {
     margin: 0;
    }
    header h1 {
     margin: 0 0 0 20px;
    }
    nav ul {
     list-style: none;
     text-align: right;
     justify-content: space-evenly;
    }
    nav li {
     display: inline;
     margin-right: 40px;
    }
    nav a {
     color: #fff;
     text-decoration: none;
     font-size: 28px;
     border-radius: 4px;
    }
    nav a:hover{
     background: white;
     color: #000;
     transition: .5s;
    } 
    section {
     padding: 20px;
     font-size: 18px;
     font-family: cursive;
    }

    .product {
    margin: 20px;
    padding: 10px;
    border: 1px solid #ddd;
    display: flex;
}
.product img {
    width: 400px;
    height: 300px;
    border-radius: 30px; 
    padding: 10px 30px;
}

.product-content {
    padding: 10px 80px;
    font-size: 20px;
    display: flex;
    flex-direction: column; 
    align-items: center; 
}

.product h1 {
    font-size: 30px;
}

.product h2 {
    font-size: 25px;
    text-decoration: none;
}

.product-content p {
    font-size: 18px;
}

.product-content a {
    margin-top: 20px; 
    padding: 12px 30px;
    border-radius: 4px;
    outline: none;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    letter-spacing: 1px;
    transition: all 0.5s ease;
    background-color: #00b894;
    color: #000;
    border-radius: 10px;
}

.product-content .btnone:hover {
    background: white;
    color: #000;
}


    .social a {
     color: blue;
     height: 60px;
    }
    .social a:hover {
     background: transparent;
     color: white;
    }
    .icon-link i {
    font-size: 20px; 
    margin-right: 10px;
    }
    .abouts h4 {
        margin-top: 30px;
        font-size: 20px; 
    }
    .abouts ul {
        list-style-type: disc;
        margin: 15px 0;
        padding: 0;
        columns: 4;
    }
    .abouts ul li {
        font-size: 20px;
        margin-left: 15px;
        margin-bottom: 10px; 
    }

    .contact {
     color: blue;
     height: 60px;
    }

    footer {
     background-color: #333;
     color: #fff;
     text-align: center;
     padding: 10px 0;
    }
    
    @media screen and (max-width: 768px) {
        header {
            padding: 10px 0;
            font-size: 30px;
            height: 300px;
        }

        .logo-container img {
            max-width: 105px;
            margin right: 10px;
        }

        .logo-container h1 {
            font-size: 25px;
        }

        nav ul {
            display: table-column;
            width: 100%;
            text-align: center;
            background-color: #0f1111;
            position: absolute;
            top: 90px;
            border-top: 0.4px solid white;
            border-bottom: 0.4px solid white;
        }
        nav ul li {
            display: block;
            line-height: 40px;
        }
        nav ul li a {
            font-size: 20px;
        }
        body{
            width:100%;
            background-image: url(carbg.jpg);
            background-size: cover;
            background-position: center;
            font-size: 18px;
        }
        h2 {
           font-size: 20px;
        }
        .product {
            flex-direction: column;
        }
        .product img {
            width: 100%;
            height: auto; 
        }
       .product-content {
            font-size: 16px;
       }
       .abouts a, .contactus p {
            font-size: 18px;
       }
       .abouts ul {
            columns: 3;
            list-style: none; 
            margin-left: 0;
            padding-left: 0;
        }

        .abouts ul li {
            font-size: 15px;
            margin-bottom: 5px; 
            border-bottom: 0.2px solid #7B7D7D; 
            padding: 3px 0; 
        }
    }
 </style>
 <body>
    <header>
        <div class="logo-container">
        <img src="carslogo.jpg" alt="Company Logo">
        <h1>Gears Tech Car Accessories Co.</h1>
       </div>
        <nav>
            <ul>
                <li><a href="car.php">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h2>GPS Devices</h2>
        <p>Find the best Car GPS  for your vehicle.</p>
    </section>

    <section id="products">
    <h2>Our Products</h2>
    <div class="product">
   
    <img src="gps1.jpeg" alt="Car Music System">

    <div class="product-content">
        <h1>ARAI Device</h1>
        <h2>For RTO approval for commercial vehicles</h2>
        <p>
            <li>Ignition Cut-off</li>
            <li>Live tracking</li>
            <li>Over speed alert</li>
            <li>Geo fencing</li>
            <li>Panic button</li>
        </p>
        <a href="#" class="btnone">BUY NOW</a>
    </div>
</div>

<div class="product">
    <img src="gps2.jpeg" alt="Car Music System">
    <div class="product-content">
        <h1>ARAI Device</h1>
        <h2>For RTO approval for commercial vehicles</h2>
        <p>
            <li>Ignition Cut-off</li>
            <li>Live tracking</li>
            <li>Over speed alert</li>
            <li>Geo fencing</li>
            <li>Panic button</li>
        </p>
        <a href="#" class="btnone">BUY NOW</a>
    </div>
</div>
<div class="product">
    <img src="gps3.jpeg" alt="Car Music System">
    <div class="product-content">
        <h1>ARAI Device</h1>
        <h2>For RTO approval for commercial vehicles</h2>
        <p>
            <li>Ignition Cut-off</li>
            <li>Live tracking</li>
            <li>Over speed alert</li>
            <li>Geo fencing</li>
            <li>Panic button</li>
        </p>
        <a href="#" class="btnone">BUY NOW</a>
    </div>
</div>
<div class="product">
    <img src="gps4.jpg" alt="Car Music System">
    <div class="product-content">
        <h1>ARAI Device</h1>
        <h2>For RTO approval for commercial vehicles</h2>
        <p>
            <li>Ignition Cut-off</li>
            <li>Live tracking</li>
            <li>Over speed alert</li>
            <li>Geo fencing</li>
            <li>Panic button</li>
        </p>
        <a href="#" class="btnone">BUY NOW</a>
    </div>
</div>
    </section>

    <section id="about">
    <div class="social">
    <h2>About Us</h2>
        <a href='https://maps.app.goo.gl/x5FVVnJZBKRiHWgs9' class="icon-link"><i class="fa-solid fa-location-dot"></i></a> 
        <a href='' class="icon-link"><i class="fab fa-facebook-f"></i></a>
        <a href='' class="icon-link"><i class="fab fa-twitter"></i></a>
        <a href='' class="icon-link"><i class="fab fa-instagram"></i></a>
        <p>17# mig, 2nd Stage, Khb Colony, Kuvempu Nagara, Mysuru, Karnataka 570023</p>
    </div>
    <div class="abouts">
    <h4>Our Services Include:</h4>
    <ul>
        <li>GPS with panic mode</li>
        <li>GPS with Basic Device</li>
        <li>Android Music System</li>
        <li>Speakers</li>
        <li>Power Window</li>
        <li>Floor Mat</li>
        <li>Seat Covers</li>
        <li>Back Camera</li>
        <li>Upper Module</li>
        <li>Central Lock System</li>
        <li>Mobile Holder</li>
        <li>AMP with Woofer</li>
        <li>Interior wrapping</li>
        <li>Speed Governor</li>
        <li>Parking Sensor</li>
        <li>Fog Lamp</li>
    </ul>
    </div>
    </section>


    <section id="contact">
    <div class="contactus">
            <h2>Contact Us</h2>
            <p>070229 27265</p>
    </section>

    <footer>
        <p>&copy; 2023 Gear Tech Car Accessories Co.</p>
    </footer>
</body>
</html>
