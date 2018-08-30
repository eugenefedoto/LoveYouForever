<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Amagai SS - Tsukasa Ayatsuji</title>

        {{-- Stylesheets --}}
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
        
        {{--  Fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800,300" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        {{-- Prevents grid images overlay problem. Must load before images. --}}
        <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>  
    </head>
<body>
    <div id="app">
        <div class="bio-nav-container">
        <nav class="nav">
            <ul class="nav__menu">
                <li class="nav__menu-item">
                    <h1 class="name">Tsukasa Ayatsuji <i id="caret" class="fa fa-caret-down" aria-hidden="true"></i></b></h1>
                    <ul class="nav__submenu">
                        <li class="nav__submenu-item"> <a>Tsukasa Ayatsuji</a></li>
                        <li class="nav__submenu-item"> <a>Rihoko Sakurai</a></li>
                        <li class="nav__submenu-item"> <a>Sae Nakata</a></li>
                        <li class="nav__submenu-item"> <a>Kaoru Tanamachi</a></li>
                        <li class="nav__submenu-item"> <a>Haruka Morishima</a></li>
                        <li class="nav__submenu-item"> <a>Ai Nanasaki</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="biography">
        <p>Kanji Name: 絢辻 詞</p>
        <p>Age: 17</p>
        <p>Described as a hard worker, she is one of the best and most popular students of Kibitou High School. Her innocent behavior is just an act to cover up her true self which is very manipulative and cunning, to the extreme of blackmailing the main character in the PS2 game.</p>
    </div>
        </div>
        
    <div class="grid">
        <div class="gutter-sizer"></div>
            <div class="grid-sizer"></div>
            <div class="grid-item"><img class="vert-portrait" src="/img/tsukasa/media/1.jpg" width="266px" alt="Tsukasa"></div>
            <div class="grid-item"><img class="vert-portrait" src="/img/tsukasa/media/2.jpg" width="266px" alt="Tsukasa"></div>
            <div class="grid-item"><img class="vert-portrait" src="/img/tsukasa/media/3.jpg" width="266px" alt="Tsukasa"></div>
            <div class="grid-item"><img class="vert-portrait" src="/img/tsukasa/media/4.jpg" width="266px" alt="Tsukasa"></div>
            <div class="grid-item"><img class="vert-portrait" src="/img/tsukasa/media/5.jpg" width="266px" alt="Tsukasa"></div>
            <div class="grid-item"><img class="vert-portrait" src="/img/tsukasa/media/6.jpg" width="266px" alt="Tsukasa"></div>
            <div class="grid-item"><img class="vert-portrait" src="/img/tsukasa/media/7.jpg" width="266px" alt="Tsukasa"></div>
            <div class="grid-item"><img class="vert-portrait" src="/img/tsukasa/media/8.jpg" width="266px" alt="Tsukasa"></div>
            <div class="grid-item"><img class="vert-portrait" src="/img/tsukasa/media/9.jpg" width="266px" alt="Tsukasa"></div>
            <div class="grid-item"><img class="vert-portrait" src="/img/tsukasa/media/10.jpg" width="266px" alt="Tsukasa"></div>
        </div>
    </div>
    
<!-- <script src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script> -->
<script src="https://unpkg.com/packery@2/dist/packery.pkgd.js"></script>
<script src="/js/app.js"></script>

<script type="text/javascript">

// element argument can be a selector string
//   for an individual element
var pckry  = new Packery( '.grid', {
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true,
    gutter: '.gutter-sizer'
});
</script>

</body>
</html>

