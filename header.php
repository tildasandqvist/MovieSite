<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Startsida</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" rel="stylesheet">
    <!--Länk för Bulma-->
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" rel="stylesheet">
    <!--Font Awesome-->
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">  

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); //Hämtar CSS-reglarna för alla andra delar på webbplatsen (inte font awesome och bootstrap) ?>"> 
</head>

<body class="body-startpage">
<header>
<section class="hero is-warning">
<div class="hero-body">
    <div class="container">
        <h1 class="title">

        </h1>
        <h2 class="subtitle">
            <?php echo get_field('header', 'option'); ?>
        </h2>
    </div>
</div>
</section>
<!-- Header text -->

<nav class="navbar" role="navigation" aria-label="main navigation">
<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
    data-target="navbarBasicExample">
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
</a>

<div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
        <a class="navbar-item" href="<?php echo get_home_url();?> ">
            Startsida
        </a>

        <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
                Ålsersgräns
            </a>

            <div class="navbar-dropdown">
            <a class="navbar-item" href="<?php echo get_term_link ('4','agelimit');?>"> 4+ </a>
                    

            <a class="navbar-item" href="<?php echo get_term_link ('7','agelimit');?>"> 7+ </a>
           

            <a class="navbar-item" href="<?php echo get_term_link ('15','agelimit');?>"> 15+ </a>
          
         </div>
     </div>


    <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
            Genre
        </a>

        <div class="navbar-dropdown">
            <a class="navbar-item"  href="<?php echo get_term_link ('action','genre');?>"> Action </a>
                
            <a class="navbar-item" href="<?php echo get_term_link ('familj','genre');?>"> Familj </a>
            
            <a class="navbar-item" href="<?php echo get_term_link ('komedi','genre');?>"> Komedi </a>

            <a class="navbar-item" href="<?php echo get_term_link ('musikal','genre');?>"> Musikal </a>

            <a class="navbar-item" href="<?php echo get_term_link ('romantik','genre');?>"> Romantik </a>

            <a class="navbar-item" href="<?php echo get_term_link ('skrack','genre');?>"> Skrack </a>                            
        </div>
    </div>


    <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
            Produktionsbolag
        </a>

        <div class="navbar-dropdown">
            <a class="navbar-item" href="<?php echo get_term_link ('blumhouse-productions','produktionsbolag');?>"> Blumhouse Productions </a>
            
            <a class="navbar-item" href="<?php echo get_term_link ('dimension-films','produktionsbolag');?>"> Dimension Films </a>
            
            <a class="navbar-item" href="<?php echo get_term_link ('dream-works','produktionsbolag');?>"> DreamWorks </a>
            
            <a class="navbar-item" href="<?php echo get_term_link ('imagine-entertainment','produktionsbolag');?>"> Imagine Entertainment </a>

            <a class="navbar-item" href="<?php echo get_term_link ('lionsgate-entertainment','produktionsbolag');?>"> Lionsgate Entertainment </a>

            <a class="navbar-item" href="<?php echo get_term_link ('relativity-media-gold-circle-films','produktionsbolag');?>"> Relativity Media Gold Circle Films </a>

            <a class="navbar-item" href="<?php echo get_term_link ('sony-pictures-animation','produktionsbolag');?>"> Sony Pictures Animation </a>

            <a class="navbar-item" href="<?php echo get_term_link ('universal-pictures','produktionsbolag');?>"> Universal Pictures </a>

            <a class="navbar-item" href="<?php echo get_term_link ('walt-disney-pictures','produktionsbolag');?>"> Walt Disney Pictures </a>

            <a class="navbar-item" href="<?php echo get_term_link ('warner-bros','produktionsbolag');?>"> Warner Bros </a>
            
        </div>
    </div>
</div>
</div>
</nav>
<!-- Navbar -->
</header>