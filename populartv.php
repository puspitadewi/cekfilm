<?php include('template/head.php') ?>
   <!-- Header Section Begin -->
   <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
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
                                        <li><a href="topanime.php">TOP Anime Airing</a></li>
                                        <li><a href="./anime-details.html">TOP Anime Upcoming</a></li>
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
                        <li><a href=""> Trending All</a>
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
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>TOP Anime Upcoming</h4> -->
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/trending/trend-1.jpg">
                                        <div class="ep"> <?php echo $data[0]['episodes'] ?></div>
                                        <div class="comment"> <?php echo $data[0]['members'] ?> <i class="fa fa-comments"></i> 11</div>
                                        <div class="view"> <?php echo $data[0]['score'] ?> <i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Anime</li>
                                        </ul>
                                        <h5><a href="#"> <?php echo $data[0]['title'] ?> </a></h5>
                                    </div>
                                </div>
                            </div>

    <?php include('template/footer.php') ?>