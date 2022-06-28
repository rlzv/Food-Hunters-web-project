<?php
session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Enjoyers</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <!-- Nav bar -->
    
    
    <header>
        
        <a href="#" class="logo">Food <span>Hunters</span></a>
        <div class="toggle" onclick="toggleMenu();"></div>
        <ul class="menu" id="myTopnav">
            <li>
                <a href="#home" onclick="toggleMenu();">Home</a>
            </li>
            <li>
                <a href="#menu" onclick="toggleMenu();">Menu</a>
            </li>
            <li>
                <a href="#event" onclick="toggleMenu();">Events</a>
            </li>
            <li>
                <a href="#about" onclick="toggleMenu();">About</a>
            </li>
            <li>
                <a href="#gallery" onclick="toggleMenu();">Gallery</a>
            </li>
            <li>
                <a href="#contact" onclick="toggleMenu();">Contact</a>
            </li>
            <?php if(isset($_SESSION['username'])){?>
                <li>
                <a href="#" ><?php echo($_SESSION['username']) ?></a>
            </li>
            <li>
                <a href="logout.php" >Logout</a>
            </li>
            <?php }else{?>
            <li>
                <a href="register.php" >Register</a>
            </li>
            <li>
                <a href="login.php">Login</a>
            </li>
            <?php } ?>
        </ul>
        <a href="#" class="btn">Reserve Table</a>
    </header>


    <!--  home    BANNER ! -->
    <section class="banner" id="home">
        <div class="content">
            <h5>ENJOY YOUR FOOD AS U ENJOYED YOUR HUNT <span>!</span></h5>
            <h1>Feel Like a Hunter</h1>
            <a href="#" class="btn">Order Now</a>
        </div>
        <ul class="sci">
            <li>
                <a href="https://www.facebook.com/robertviorel.lazarov"><img src="images/facebook.png"></a>
            </li>
            <li>
                <a href="https://www.instagram.com/lazarov.robert/"><img src="images/instagram.png"></a>
            </li>

        </ul>
    </section>

    <!-- tabs selection -->
    <div id="menu" class="tab">
        <div class="btn-box">
            <button id="btn1" onclick="openBreakfast()">
                <img src="images/breakfast.png">Breakfast
            </button>
            <button id="btn2" onclick="openLaunch()">
                <img src="images/lunch.png">Lunch
            </button>
            <button id="btn3" onclick="openSnacks()">
                <img src="images/snacks.png">Snacks
            </button>
            <button id="btn4" onclick="openDinner()">
                <img src="images/dinner.png">Dinner
            </button>
        </div>
        
        <div class="text">
            <h3>Select Your <span>Food</span></h3>
        </div>
        <div id="breakfast" class="content">
            <div class="row">
                <div class="column">
                    <img src="images/breakfast1.jpg">
                    <img src="images/breakfast2.jpg">
                </div>
                <div class="column">
                    <img src="images/breakfast3.jpg">
                    <img src="images/breakfast4.jpg">
                </div>
            </div>
        </div>

        <div id="lunch" class="content">
            <div class="row">
                <div class="column">
                    
                    <img src="images/lunch2.jpg">
                </div>
                <div class="column">
                    <img src="images/lunch3.jpg">
                    <img src="images/lunch4.jpg">
                </div>
            </div>
        </div>

        <div id="snacks" class="content">
            <div class="row">
                <div class="column">
                    <img src="images/snacks1.jpg">
                    <img src="images/snacks2.jpg">
                    
                </div>
                <div class="column">
                    
                    <img src="images/snacks4.jpg">
                </div>
            </div>
        </div>
        <div id="dinner" class="content">
            <div class="row">
                <div class="column">
                    <img src="images/dinner1.jpg">
                    <img src="images/dinner2.jpg">
                </div>
                <div class="column">
                    <img src="images/dinner3.jpg">
                    
                </div>
            </div>
        </div>
    </div>



    <!-- events section -->

    <div class="content" id="event">
        <h2>Events</h2>
    </div>
    <div class="container1">
        <div class="row1">
            <div class="column-33">
                <img src="images/birthday.jpg" alt="Birthday" width="300" height="400">
            </div>
            <div class="column-66">
                <h1 class="l-font">
                    Birthday Partys
                </h1>

                <p>
                    We can rent for you the pub if you want to celebrate your birthday party <br> or maybe your team birthday party. <br>Call us, or send an email for a 
                    reservation!
                </p>
                <button class="btn">Read More</button>
            </div>
        </div>
    </div>
    </div>

    <div class="container1">
        <div class="row1">
            <div class="column-33">
                <img src="images/afterhunt.jpg" alt="Birthday" width="300" height="400">
            </div>
            <div class="column-66">
                <h1 class="l-font">
                    After Hunt Party
                </h1>

                <p>
                    We organize weekly some kind of parties with a different thematic each week. <br>We post the events on <a href="https://www.instagram.com/lazarov.robert/">instagram</a> where we post the photos from the party too!
                </p>
                <button class="btn">Read More</button>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="row1">
            <div class="column-33">
                <img src="images/nightcapture.jpg" alt="Birthday" width="300" height="400">
            </div>
            <div class="column-66">
                <h1 class="l-font">
                    Night Capture
                </h1>

                <p>
                    If u want to flex just a little bit with your capture from last hunt,<br>send us a picture with you and your prey and we will put you on the HUNTERS wall!
                </p>
                <button class="btn">Read More</button>
            </div>
        </div>
    </div>



    <!-- about us -->
    <section class="about" id="about">
        <div class="contentBx w50">
            <h3>About Us</h3>
            <p>We are a thing, a special thing and we offer for you, hunters, the best we can and we hope by foundating this, you client will have here everything you need. As a group who likes to hunt, not only for the adrenaline when an animal may kill
                you and you escape, we wanted to have a safe place, where everyone can be safe and everyone got a chance either to party, eat, discuss about hunt and maybe have a birthday party, who knows. Here, we have all of those mentionated above
                and we are glad to have as many hunters or even pasionates about hunt here, at Food Hunters.
            </p>
            <button class="btn">Read More</button>
        </div>
        <div class="w50">
            <img src="images/aboutus.jpg" class="img">
        </div>
    </section>



    <!-- gallery -->
    <section class="gallery" id="gallery">
        <div class="content">
            <h2>Our Gallery</h2>
        </div>
        <div class="imggrid">
            <div class="imgBx">
                <img src="images/food1.jpg">
                <h4>Cheefs speciality <br>we highly recommend you this</h4>
            </div>

            <div class="imgBx">
                <img src="images/food2.jpg">
                <h4>Big Burger cooked<br>in a good whiskey</h4>
            </div>

            <div class="imgBx">
                <img src="images/food3.jpg">
                <h4>Delicious Beef Steak<br>with some vegetables and fries</h4>
            </div>

            <div class="imgBx">
                <img src="images/food4.jpg">
                <h4>Here is our chef Salt Bae <br>yes yes, that one from the memes</h4>
            </div>
        </div>
        <div class="but">
            <a href="#" class="btn">View More</a>
        </div>
    </section>


    <!-- contact section -->

    <section class="contact" id="contact">
        <div class="content">
            <h2>Contact Us</h2>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Location</h3>
                        <p>Strada J. H. Pestalozzi, Timișoara, <br>305600</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Open Hours: </h3>
                        <p>Monday-Saturday<br>08:00AM-02:00PM</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Email: </h3>
                        <p>robert.lazarov02@e-uvt.ro</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Telephone: </h3>
                        <p>+40 712345678</p>
                    </div>
                </div>
            </div>

            <div class="contactForm">
                <form>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>

                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type Message</span>
                    </div>

                    <div class="inputBox">
                        <input type="submit" name="" value="send">
                    </div>
                </form>
            </div>
        </div>
    </section>






    <main>
        FOOD<span>HUNTERS</span>
    </main>
    <footer class="footer">
        <div class="footer-left">
            <h1>FOOD<span>HUNTERS</span></h1>
            <h2><span>We don't encourage 
                illegal hunting HERE!</span></h2>

        </div>
        <ul class="footer-right">
            <li>
                <h2>Best Beers We Recommend</h2>

                <ul class="box">
                    <li><a href="https://www.birramoretti.com/ro/ro/age-gate?returnUrl=https%3A%2F%2Fwww.birramoretti.com%2Fro%2Fro%2Fhomepage">Birra Moretti</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Miller_Brewing_Company">Miller</a></li>
                    <li><a href="https://www.salitos.com/en/beer">Salitos</a></li>
                    <li><a href="https://www.guinness.com/en-us/">Guinness</a></li>
                    <li><a href="https://www.worldofbeer.ro/nenea-iancu">Nenea Iancu</a></li>
                </ul>
            </li>
            <li class="features">
                <h2>Cool Stuff</h2>

                <ul class="box">
                    <li><a href="#">Network password at the bar</a></li>
                    <li><a href="#">Friendly bartenders</a></li>
                    <li><a href="#">Darts and Music by Request</a></li>
                </ul>
            </li>

            <li>
                <h2>Address</h2>

                <ul class="box">
                    <li><a href="https://www.google.com/maps/place/Strada+Johann+Heinrich+Pestalozzi,+Timi%C8%99oara/@45.7546105,21.2436383,17z/data=!3m1!4b1!4m5!3m4!1s0x4745676318acc7df:0xb3aa3dca3fa4a42b!8m2!3d45.7546105!4d21.2458323">Strada J. H. Pestalozzi, Timișoara</a></li>
                    <li><a href="#">Open Hours: <br>Monday-Saturday <br>08:00AM-02:00PM</a></li>
                    <li><a href="https://mail.google.com/mail/u/0/?tab=rm#inbox">robert.lazarov02@e-uvt.ro</a></li>
                    <li><a href="#">+40 712-345-678</a></li>
                </ul>
            </li>
        </ul>
    </footer>
    <div class="bottom">
        <h5>Copyright <span>&copy;</span>All rights reserved bla bla</h5>
    </div>





   




    <!-- navbar sticky script -->

    <script type="text/javascript">
        window.addEventListener('scroll', function() {
            var header = document.querySelector('header');
            header.classList.toggle('sticky', window.scrollY > 0);
        });
        function toggleMenu() {
            var menuToggle = document.querySelector('.toggle');
            var menu = document.querySelector('menu');
            menuToggle.classList.toggle('active');
            menu.classList.toggle('active');
        }
    </script>

    <!-- tabs script -->

    <script type="text/javascript">
        var breakfast = document.getElementById("breakfast");
        var lunch = document.getElementById("lunch");
        var snacks = document.getElementById("snacks");
        var dinner = document.getElementById("dinner");

        var btn1 = document.getElementById("btn1");
        var btn2 = document.getElementById("btn2");
        var btn3 = document.getElementById("btn3");
        var btn4 = document.getElementById("btn4");

        function openBreakfast() {
            breakfast.style.transform = "translateX(0)";
            lunch.style.transform = "translateX(100%)";
            snacks.style.transform = "translateX(100%)";
            dinner.style.transform = "translateX(100%)";

            btn1.style.color = "#ff0157";
            btn2.style.color = "#000";
            btn3.style.color = "#000";
            btn4.style.color = "#000";

            breakfast.style.transformDelay = "0.3s";
            lunch.style.transformDelay = "0s";
            snacks.style.transformDelay = "0s";
            dinner.style.transformDelay = "0s";
        }


        function openLaunch() {
            breakfast.style.transform = "translateX(100%)";
            lunch.style.transform = "translateX(0)";
            snacks.style.transform = "translateX(100%)";
            dinner.style.transform = "translateX(100%)";

            btn1.style.color = "#000";
            btn2.style.color = "#ff0157";
            btn3.style.color = "#000";
            btn4.style.color = "#000";

            breakfast.style.transformDelay = "0s";
            lunch.style.transformDelay = "0.3s";
            snacks.style.transformDelay = "0s";
            dinner.style.transformDelay = "0s";
        }

        function openSnacks() {
            breakfast.style.transform = "translateX(100%)";
            lunch.style.transform = "translateX(100%)";
            snacks.style.transform = "translateX(0)";
            dinner.style.transform = "translateX(100%)";

            btn1.style.color = "#000";
            btn2.style.color = "#000";
            btn3.style.color = "#ff0157";
            btn4.style.color = "#000";

            breakfast.style.transformDelay = "0s";
            lunch.style.transformDelay = "0s";
            snacks.style.transformDelay = "0.3s";
            dinner.style.transformDelay = "0s";
        }

        function openDinner() {
            breakfast.style.transform = "translateX(100%)";
            lunch.style.transform = "translateX(100%)";
            snacks.style.transform = "translateX(100%)";
            dinner.style.transform = "translateX(0)";

            btn1.style.color = "#000";
            btn2.style.color = "#000";
            btn3.style.color = "#000";
            btn4.style.color = "#ff0157";

            breakfast.style.transformDelay = "0s";
            lunch.style.transformDelay = "0s";
            snacks.style.transformDelay = "0s";
            dinner.style.transformDelay = "0.3s";
        }
    </script>


</body>

</html>