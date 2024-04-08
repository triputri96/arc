<?php
// TODO: bikin autoload lah, biar start sessionnya bisa langsung dijalannin
include 'services/cek-login.php';
?>
<!-- TODO: tambahin efek biar pas muncul ada ease in apalah gitu, plus setelah beberapa detik di section bawah dari hero bikin dia dissapeared, swipe up -->
<header>
    <nav id="navbar" class="d-flex w-100 ">
        <div class="col-4">
            <a href="/"><img src="assets/imgs/anime-arcadia-logo.png" alt="Anime Arcadia Logo" width="160"></a>
        </div>
        <ul class="nav-links d-flex justify-content-center col-4 align-center">
            <li class="col-4"><a href="index.php" class="nav-link">Home</a></li>
            <li class="col-4">
                <div id="menuDropdown" class="">
                    <!-- TODO: ketika close dropdown efeknya nggak muncul -->
                    <button id="dropDownBtn" <?php if (!isset($_SESSION['username'])) {
                                      echo 'disabled';
                                    } ?> type="button" href="" onclick="dropMenu()" class="nav-link">Menu</button>
                </div>
                <div id="menuList" class="absolute menu-list d-none overflow-hidden">
                    <ul class="p-3">
                        <li class="mb-2"><a href="index.php#videoTrailer" onclick="dropMenu()" class="nav-link">Video
                                Multimedia</a></li>
                        <li class="mb-2"><a href="input-array.php" class="nav-link">Array</a></li>
                        <li class="mb-2"><a href="pengakses-file.php" class="nav-link">Pengakses File</a></li>
                    </ul>
                </div>
            </li>
            <li id="aboutUsLink" class="col-4"><a href="index.php#aboutUs" class="<?php if (!isset($_SESSION['username'])) {
                                                                              echo 'disabled';
                                                                            } ?> nav-link">About Us</a></li>
        </ul>
        <div class="col-4 d-flex justify-content-end align-center">
            <div class="nav-links">
                <?php if (!isset($_SESSION['username'])) { ?>
                <a href="login.php" class="btn login-btn">Log In</a>
                <?php } else { ?>
                <form action="services/logout.php" method="post">
                    <button type="submit" class="btn logout nav-link">Log Out</button>
                </form>
                <?php } ?>
            </div>
        </div>
    </nav>
</header>