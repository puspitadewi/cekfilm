<head>
    <meta charset="UTF-8">
    <meta name="description" content="CekFilm">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CekFilm</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php
    $url = file_get_contents('https://api.jikan.moe/v3/top/anime/1/airing');
    //$url2 = file_get_contents('https://api.jikan.moe/v3/top/anime/1/upcoming');
    //$url3 = file_get_contents('https://api.themoviedb.org/3/movie/top_rated?api_key=f1686bf1bdcaee68ae40af9fd8662412&language=en-US&page=1');
    //$url4 = file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key=f1686bf1bdcaee68ae40af9fd8662412&language=en-US&page=1');

    //$url5 = file_get_contents('https://api.themoviedb.org/3/trending/all/day?api_key=f1686bf1bdcaee68ae40af9fd8662412');\
    //$url6 = file_get_contents('https://api.themoviedb.org/3/tv/popular?api_key=f1686bf1bdcaee68ae40af9fd8662412&language=en-US&page=1');
    //$url7 = file_get_contents('https://api.themoviedb.org/3/tv/top_rated?api_key=f1686bf1bdcaee68ae40af9fd8662412&language=en-US&page=1');


    $data = json_decode($url, true);
    //$data2 = json_decode($url, true);
    //$data3 = json_decode($url, true);
    //$data4 = json_decode($url, true);
    ?>