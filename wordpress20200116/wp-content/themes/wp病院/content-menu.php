        <!-- トップメニュー(ナビ) -->
        <nav id="top-nav">
            <!-- <ul class="top-nav">
                <li>
                    <a href="index.php">病院概要</a>
                    <a href="index.php">外来・入院案内</a>
                    <ul class="nav-content">
                      <li><a href="#">外来の方</a></li>
                      <li><a href="#">入院の方</a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.php">診療案内</a>
                    <ul class="nav-content">
                        <li><a href="#">内科</a></li>
                        <li><a href="#">外科</a></li>
                    </ul>
                </li>
                <li><a href="index.php">お問い合わせ</a></li>
                <li><a href="index.php">アクセス</a></li>
            </ul> -->
            <?php wp_nav_menu(array(
                'theme_location'=>'mainmenu',
                'container'     =>'',
                'menu_class'    =>'',
                'items_wrap'     =>'<ul class=top-nav>%3$s</ul>'
                ));
            ?>
        </nav>

