<nav class="navbar-dark bg-dark p-3">
    <a class="navbar-brand w-100 text-center" href="<?php echo SITE_URL; ?>">
        <h1><?php echo SITE_NAME?></h1>
    </a>

    <button class="menu-toggler d-block d-md-none bg-dark border rounded float-right">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-none d-md-block min-vh-100 text-small" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php if($current_user->checkPerm(8)){?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo SITE_URL.'users/'?>">Users</a>
                </li>
            <?php } ?>
            <?php if($current_user->login_check()){?>
                <li class="nav-item text-small" style="border-top: 1px solid #888888">

                    <a class="nav-link" href="<?php echo SITE_URL.'logout/'?>">Logout</a>
                </li>
            <?php } ?>
        </ul>
        <!--<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
    </div>
</nav>
