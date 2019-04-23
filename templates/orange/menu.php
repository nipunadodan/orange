<?php
$inner = (isset($_GET['page']) && $_GET['page'] !== '') ? SITE_URL : '';
?>

<nav class="navbar navbar-light fixed-top bg-white navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="<?php echo SITE_URL;?>">
            <img src="<?php echo RESOURCES_URL?>images/logo.png" width="40" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" id="<?php echo $inner; ?>home-page-menu">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $inner; ?>#section1">Link 1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $inner?>#section2">Link 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $inner; ?>#section3">Link 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $inner; ?>#section4">Link 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $inner; ?>#section5">Link 5</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 orange-form">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

        </div>
    </div>
</nav>