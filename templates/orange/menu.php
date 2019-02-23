<?php
$inner = (isset($_GET['page']) && $_GET['page'] !== '') ? SITE_URL : '';
?>

<nav class="navbar navbar-light fixed-top bg-white navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="<?php echo SITE_URL;?>">
            <img src="<?php echo RESOURCES_URL?>images/logo1.png" width="40" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" id="<?php echo $inner; ?>home-page-menu">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $inner; ?>#app">Kangaroo Cabs App <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $inner?>#airport_tr">Airport Transfer & Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $inner; ?>#fleet">Our Fleet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $inner; ?>#manage-booking">Manage Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $inner; ?>#contact">Contact Us</a>
                </li>
            </ul>
            <!--<form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>-->
            <ul class="navbar-nav ml-auto" id="booking-forms-tabs">
                <li class="nav-item" data-link="quick-booking-form">
                    <a class="nav-link" href="<?php echo $inner?>#home-banner"><i class="far fa-clock mx-1"></i> Quick Booking</a>
                </li>
                <li class="nav-item" data-link="airport-booking-form">
                    <a class="nav-link" href="<?php echo $inner?>#home-banner"><i class="fas fa-plane-departure mx-1"></i> Airport Transfers</a>
                </li>
            </ul>
        </div>
    </div>
</nav>