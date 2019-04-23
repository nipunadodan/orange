<!doctype html>
<html>
    <head>
        <link rel="icon" type="image/png" href="<?php echo RESOURCES_URL; ?>images/logo.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="apple-itunes-app" content=""/>
        <meta name="google-play-app" content="">
        <meta name="author" content="Nipuna Dodantenna">
        <meta name="theme-color" content="#FDB940" />

        <title><?php echo SITE_NAME; ?></title>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,900&amp;subset=latin-ext" rel="stylesheet">
        <link href="<?php echo RESOURCES_URL; ?>fonts/7s/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="<?php echo RESOURCES_URL; ?>fonts/7s/css/helper.css" rel="stylesheet">
        <link href="<?php echo TEMPLATE_URL; ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo TEMPLATE_URL; ?>css/intlTelInput.min.css" rel="stylesheet">
        <link href="<?php echo TEMPLATE_URL; ?>css/datetimepicker.min.css" rel="stylesheet">
        <link href="<?php echo TEMPLATE_URL; ?>css/swiper.min.css" rel="stylesheet">
        <link href="<?php echo TEMPLATE_URL; ?>css/styles.css" rel="stylesheet">
        <link href="<?php echo TEMPLATE_URL; ?>css/fontawesome.min.css" rel="stylesheet" />
        <link href="<?php echo TEMPLATE_URL; ?>css/all.min.css" rel="stylesheet" />


        <script src="<?php echo INC_URL; ?>js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo TEMPLATE_URL; ?>js/bootstrap.bundle.min.js"></script>
        <script>var site_url = "<?php echo SITE_URL; ?>"</script>
        <script src="<?php echo INC_URL; ?>js/ajax.js"></script>
        <script src="<?php echo TEMPLATE_URL; ?>js/intlTelInput-jquery.min.js"></script>
        <script src="<?php echo TEMPLATE_URL; ?>js/datetimepicker.min.js"></script>
        <script src="<?php echo TEMPLATE_URL; ?>js/swiper.min.js"></script>
        <script src="<?php echo TEMPLATE_URL; ?>js/scripts.js"></script>
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