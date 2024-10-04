<?php
    session_start();
    require 'process/connect_dbshop.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/main.css">
    
    <title>Pet Care</title>
    <!-- <script src="newjs.js" defer></script> -->
    <script src="js/index.js" defer></script>
    <script src="js/main.js" defer></script>
</head>
<body>
    <!-- <div class="navbar">
        <div class="dropdown">
            <input type="button" onclick="toggleDropdown()" id="drop" value="Services">
            <div id="myDropdown" class="dropdown-content" style="display: none;">
                <a href="#service1">Grooming</a>
                <a href="#service2">Training</a>
                <a href="#service3">Pet Sitting</a>
            </div>
        </div>

        <form action="search.php" method="get" class="search-form">
            <input type="text" name="search" class="search" placeholder="Search...">
            <input type="submit" name="sb" class="sbutton" value="Search">
        </form>

        <a href="#signup" class="signin">Sign Up</a>
        <a href="#signin" class="signup">Sign In</a>
    </div> -->

    <?php require 'include/header.php' ?>

<div class="content">
    <section class="header-home">
        <img src="assets/images/dog.jpg" alt="Pet Care" class="hero-image">
        <h1 id="def">We look after your pets with Expert Care</h1>
        <p>Your pet's happiness and health are our top priorities. Our experienced team is dedicatd to providing quality care for your furry friends.</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <div class="service" id="service1">
            <h3>Grooming</h3>
            <p>We offer a full range of grooming services to keep your pets looking their best. Frm bathing and brushing to nail trimming and ear cleaning, we take care of everything.</p>
        </div>
        <div class="service" id="service2">
            <h3>Training</h3>
            <p>Our training programs are designed to help your pet learn essential skills and commands. We offer both group and individual sessions tailored to your pet's needs.</p>
        </div>
        <div class="service" id="service3">
            <h3>Pet Sitting</h3>
            <p>We provide reliable pet sitting services to ensure your furry friend is cared for while you're away. Our trained staff will look after your pets in a comfortable environment.</p>
        </div>
    </section>

    <section id="last">
        <h2>What Our Clients Say</h2>
        <blockquote>
            <p>"The best pet care service I have ever used! My dog always comes back happy and well-groomed." - Sarah J.</p>
        </blockquote>
        <blockquote>
            <p>"I trust the team with my pets completely. Their training methods are effective and gentle." - Tom L.</p>
        </blockquote>
    </section>
</div>
    <!-- <script src="indexnew.js"></script> -->
</body>
</html>

