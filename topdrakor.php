<?php include('template/head.php') ?>
  <!-- Header Section Begin -->
 <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php">
                            <img src="img/cekfilm.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li ><a href="./index.php">Homepage</a></li>
                                <li class="active" ><a href="topanime.php">Anime <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="topanime.php">TOP Anime</a></li>
                                        <li><a href="./anime-details.html">Popular Anime</a></li>
                                       <!-- <li><a href="./anime-watching.html">Anime Watching</a></li>-->
                                       <!--  <li><a href="./blog-details.html">Blog Details</a></li>-->
                                    </ul>
                                </li>
                                <li><a href="">Tv Show <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="">TOP Tv Show </a></li>
                                    <li><a href="">Popular Tv Show</a></li>
                                   <!--  <li><a href="./anime-watching.html">Anime Watching</a></li>-->
                                   <!--  <li><a href="./blog-details.html">Blog Details</a></li>-->
                                </ul>
                            </li>
                            <li><a href="">Movie <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="">TOP Movie </a></li>
                                    <li><a href="">Popular Movie</a></li>
                                   <!--  <li><a href="./anime-watching.html">Anime Watching</a></li>-->
                                   <!--  <li><a href="./blog-details.html">Blog Details</a></li>-->
                            </ul>
                        </li>
                    <li><a href="">Drama Korea <span class="arrow_carrot-down"></span></a>
                        <ul class="dropdown">
                            <li><a href="">TOP Drakor </a></li>
                            <li><a href="">Popular Drakor</a></li>
                           <!--  <li><a href="./anime-watching.html">Anime Watching</a></li>-->
                           <!--  <li><a href="./blog-details.html">Blog Details</a></li>-->
                    </ul>
                </li>
                        </nav>
                    </div>
                </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <?php include('template/footer.php') ?>