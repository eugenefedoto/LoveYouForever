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
        /* important defaults */
        img {
            width: 100%;
            height: auto;
        }
        /* end important defaults  */



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
                display: grid;
                grid-template-columns: repeat(6, 1fr);
                grid-template-rows: 1fr auto 1fr;
                grid-template-areas:
                    ". . . . amagami-title amagami-title"
                    "portraits-container portraits-container portraits-container portraits-container portraits-container portraits-container"
                    ". . . . . .";
            }



#amagami-title {
    justify-self: end;
    grid-area: amagami-title;
}

#tsukasa-portrait{
    grid-area:tsukasa-portrait;
}
#rihoko-portrait{
    grid-area:rihoko-portrait;
} 
#sae-portrait{
    grid-area:sae-portrait;
}
#kaoru-portrait{
    grid-area:kaoru-portrait;
}
#haruka-portrait{
    grid-area:haruka-portrait;
} 
#ai-portrait{
    grid-area:ai-portrait;
}    

     .vert-portrait:hover {
         box-sizing: border-box;
	border: 4px solid #f5b869;
}


/* ================  */
/* Media Queries     */
/* ================  */
@media only screen {
    #portraits-container {
        display:grid;
        grid-template-columns: repeat(13,1fr);
        grid-area: portraits-container;
        grid-template-areas:
        ". tsukasa-portrait . rihoko-portrait . sae-portrait . kaoru-portrait . haruka-portrait . ai-portrait .";
    }
 }

@media only screen and (max-width: 1024px)  {
    #portraits-container {
        display:grid;
        grid-template-columns: repeat(12,1fr);
        grid-area: portraits-container;
        grid-template-areas:
        "tsukasa-portrait . rihoko-portrait . sae-portrait . kaoru-portrait . haruka-portrait . ai-portrait";
    }
 }

@media only screen and (max-width: 768px)  {
    #portraits-container {
        display:grid;
        grid-template-columns: repeat(8,1fr);
        grid-area: portraits-container;
        grid-template-areas:
        "tsukasa-portrait . rihoko-portrait . sae-portrait . kaoru-portrait"
        ". haruka-portrait . ai-portrait . . .";
    }
 }

 @media only screen and (max-width: 375px)  {
    #portraits-container {
        grid-template-columns: repeat(6,1fr);
        grid-area: portraits-container;
        grid-template-areas:
        "tsukasa-portrait . rihoko-portrait . sae-portrait ."
        ". kaoru-portrait . haruka-portrait . ai-portrait";
    }
 }


/* @media only screen and (max-width: 500px)  {
    .wrapper {

        grid-template-columns: 20% auto;
        grid-template-areas:
    "header   header"
        "sidebar  content"
        "sidebar2 sidebar2"
        "footer   footer";
    }
    }

    @media only screen and (max-width: 768px)   {
        #portraits-container{
         grid-column-gap:25px;
         grid-row-gap: 25px;

     }
     #portraits-container{
         grid-template-columns:repeat(4,2fr);
         grid-template-rows:repeat(2,1fr);

     }
     #app {
                grid-template-columns: 1fr 1fr 1fr 1fr ; 
                grid-template-rows: 1fr 4fr; 
            }
    } */
/* ================  */
/* End Media Queries     */
/* ================  */

        </style>
    </head>
    <body>
    <div id="app">
    
    <img id="amagami-title"  src="/img/amagami-ss-title.png" width="800" alt="">
    <div id="portraits-container">
    <a href="/tsukasa-ayatsuji" id="tsukasa-portrait" ><img  class="vert-portrait" src="/img/tsukasa-vert.png" width="266"  alt=""></a>
    
    <a href="" id="rihoko-portrait"><img  class="vert-portrait" src="/img/rihoko-vert.png" width="266" alt=""></a>
    <a href="" id="sae-portrait" ><img class="vert-portrait" src="/img/sae-vert.png" width="266" alt=""></a>
    <a href="" id="kaoru-portrait" ><img class="vert-portrait" src="/img/kaoru-vert.png" width="266"  alt="">
</a>
<a href="" id="haruka-portrait" ><img class="vert-portrait" src="/img/haruka-vert.png" width="266"  alt="">
</a>
<a href="" id="ai-portrait" ><img class="vert-portrait" src="/img/ai-vert.png" width="266"  alt="">
</a>
    </div>

</div>
    </body>
</html>
