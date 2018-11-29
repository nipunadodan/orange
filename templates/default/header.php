<!doctype html>
<html>
    <head>
        <link rel="icon" type="image/png" href="<?php echo RESOURCES_URL; ?>images/logo.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="We cater to our clients with 27 years of experience under our belt. From the moment you request a ride to the moment you reach your destination with your safety and comfort in mind.">
        <meta name="keywords" content="Kangaroo, Cabs, taxi, Sri Lanka, driver, hybrid, safety and comfort, Booking, Airport, Pickup, Cabs, Taxi Rates, 2588588, reliable, cost, effective, comfortable, Toyota Prius Hybrid, Toyota Prius V (wagon), Toyota Axio Hybrid, Honda">
        <meta name="apple-itunes-app" content="app-id=480762729"/>
        <meta name="google-play-app" content="app-id=kangaroo.lk.clientapp">
        <meta name="author" content="Kangaroo Cabs">
        <meta name="theme-color" content="#FDB940" />

        <title>Kangaroo Cabs</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Overpass:100,200" rel="stylesheet">
        <link href="<?php echo RESOURCES_URL; ?>fonts/7s/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="<?php echo RESOURCES_URL; ?>fonts/7s/css/helper.css" rel="stylesheet">
        <link href="<?php echo TEMPLATE_URL; ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo TEMPLATE_URL; ?>css/jquery-ui.min.css" rel="stylesheet">
        <link href="<?php echo TEMPLATE_URL; ?>css/intlTelInput.min.css" rel="stylesheet">
        <link href="<?php echo TEMPLATE_URL; ?>css/datetimepicker.min.css" rel="stylesheet">
        <link href="<?php echo TEMPLATE_URL; ?>css/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
    
    <body>
        <div class="navbar_main fixed-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="logo col-6">
                        <a href="<?php echo SITE_URL; ?>">
                            <img class="img-fluid" src="<?php echo RESOURCES_URL; ?>images/logo.png" />
                        </a>
                    </div>
                    <div class="col-6 align-self-end text-right">
                        <i class="pe-7s-menu pe-3x pe-va" id="menu_icon"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-push"></div>
    <?php
        echo '<div id="height-const">';
        include_once TEMPLATE_PATH.'menu.php'?>