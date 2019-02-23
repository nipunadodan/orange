<nav id="main_nav" class="align-middle hidden">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-6">
                <img class="d-none d-md-block mx-auto img-fluid" src="<?php echo RESOURCES_URL; ?>images/menu_image.jpg" id="menu-img" />
                <?php //TODO: Facilitate uploading menu image from a settings page ?>
            </div>
            <div class="col-md-5 offset-md-1 align-self-center  ">
                <ul>
                    <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
                    <li><a href="<?php echo PAGE_URL.'#'; ?>">Menu item #1</a></li>
                    <li><a href="<?php echo PAGE_URL.'#'; ?>">Menu item #2</a></li>
                    <li><a href="<?php echo PAGE_URL.'#'; ?>">Menu item #3</a></li>
                    <li><a href="<?php echo PAGE_URL.'#'; ?>">Menu item #4</a></li>
                    <?php if(!login_check()){ ?>
                        <li><a href="<?php echo PAGE_URL.'login'; ?>">Login</a></li>
                    <?php
                    }else{
                        ?>
                        <li><a href="<?php echo PAGE_URL.'site-settings'; ?>">Site Settings</a></li>
                        <li><a href="<?php echo PAGE_URL.'logout'; ?>">Logout</a></li>
                        <?php
                    }?>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php //TODO: Integrate  with a db and get menu items from the db ?>