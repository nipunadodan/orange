<nav class="navbar-dark bg-dark p-3">
    <h2 id="user-disp-name" class="h1 m-0 pb-0 pt-3" style="padding-left: 40px;"><span id="hello">Hello</span>, <?php echo (isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Guest')?></h2>
    <!--<p class="text-muted" style="padding-left: 40px;"><span id="lang">English</span> &bull; <span id="country">UK</span></p>-->

    <ul class="main-menu">
        <div class="row">
            <?php
            $json = file_get_contents(TEMPLATE_URL.'menu_json.php');
            $obj = json_decode($json);
            foreach ($obj as $column) {
                echo '<div class="col">';
                foreach ($column as $item) {
                    $arrow = '';
                    if (is_object($item->sub)) {
                        $arrow = ' <i class="la la-angle-down float-right nav-sub-icon"></i>';
                    }
                    echo '<li>
                        <a href="' . $item->link . '"><i class="la la-' . $item->icon . '"></i> ' . $item->name .$arrow.'</a>';
                    if (is_object($item->sub)) {
                        echo '<ul class="sub-menu">';
                        foreach ($item->sub->subs as $sub) {
                            echo '<a href="' . $sub->link . '"><li>' . $sub->name . '</li></a>';
                        }
                        echo '</ul>';
                    }
                    echo '</li>';
                }
                echo '</div>';
            }
            ?>
        </div>
        <li class="text-small text-muted">v2.0.0.001 <?php if(!PRODUCTION) echo 'RC'; ?></li>
    </ul>

</nav>