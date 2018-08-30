<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            body {
                background-image: url("/img/bg-town.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center top;
                height: 100vh;
                margin: 0;
            }

            #app {
                height: 100%;
                display:grid;
                grid-template-columns: repeat(4, 1fr);
                grid-template-rows: 1fr 2fr; 
                /* align-items:stretch; */
                /* grid-column-gap: 100px; */
            }

#amagami-title {  
    grid-column: 2/span 2;
    /* grid-row: 1/span 1; */
    width: 100%;
    height: auto;
    /* justify-self: center; */
     }

     #rihoko-vert{
        /* grid-column: 2/span 2;
    grid-row: 2/span 3; */
    width: 100%;
    height: auto;
     } 
     #tsukasa-vert{
        /* grid-column: 4/span 2;
    grid-row: 2/span 3; */
    width: 100%;
    height: auto;
     } 
     #sae-vert{
        /* grid-column: 6/span 2;
    grid-row: 2/span 3; */
    width: 100%;
    height: auto;
     } 
     #kaoru-vert{
        /* grid-column: 8/span 1;
    grid-row: 2/span 3; */
    width: 100%;
    height: auto;
     } 
     #haruka-vert{
        /* grid-column: 10/span 1;
    grid-row: 2/span 3; */
    width: 100%;
    height: auto;
     } 
     #ai-vert{
        /* grid-column: 12/span 1;
    grid-row: 2/span 3; */
    width: 100%;
    height: auto;
     } 
     #portraits-container{
         display:grid;
         grid-template-columns:repeat(6,1fr);
         /* grid-column:1/span 4; */
         /* grid-template-rows:repeat(4,1fr);; */
         grid-column: 2/span 2;
         grid-column-gap:50px;

     }
        </style>
    </head>
    <body>
    <div id="app">
    <img id="amagami-title" src="/img/amagami-ss-title.png" width="800"; alt="">
    <div id="portraits-container">
 <img id="rihoko-vert" src="/img/rihoko-vert.png" width="266" alt="">
    <img id="tsukasa-vert" src="/img/tsukasa-vert.png" width="266"  alt="">
    <img id="sae-vert" src="/img/sae-vert.png" width="266" alt="">
    <img id="kaoru-vert" src="/img/kaoru-vert.png" width="266"  alt="">
    <img id="haruka-vert" src="/img/haruka-vert.png" width="266"  alt="">
    <img id="ai-vert" src="/img/ai-vert.png" width="266"  alt="">
    
    </div>
    

    </div>

    
    
    </body>
</html>
