<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RUMC Clubs') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- index -->


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <!--index.blade.php-->



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<header>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

<!--welcome.blade-->


        <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--<footer></footer>-->

                                          <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                                          <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                                          <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                          <!------ Include the above in your HEAD tag ---------->

    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            dots:false,
            nav:true,
            mouseDrag:false,
            autoplay:true,
            animateOut: 'slideOutUp',
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
        $('#myCarousel').carousel({
            interval: 3000,
        });
    </script>

    <style media="screen">
/*footer*/

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {
  padding: 40px 0;
  margin:px;
}

section .section-title {
  text-align: center;
  color: #007b5e;


  text-transform: uppercase;
}
#footer {
  background: black !important;
  height:160px;
  width:100%;
}
#footer h5{
padding-left: 10px;
  border-left: 3px solid #eeeeee;
  padding-bottom: 6px;

  color:#ffffff;
}
#footer a {
  color: #ffffff;
  text-decoration: none !important;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
padding: 3px 0;
}
#footer ul.social li a i {
  margin-right: 5px;
font-size:25px;
-webkit-transition: .5s all ease;
-moz-transition: .5s all ease;
transition: .5s all ease;
}
#footer ul.social li:hover a i {
font-size:30px;
margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
color:#ffffff;
}
#footer ul.social li a:hover{
color:#eeeeee;
}
#footer ul.quick-links li{
padding: 3px 0;
-webkit-transition: .5s all ease;
-moz-transition: .5s all ease;
transition: .5s all ease;
}
#footer ul.quick-links li:hover{
padding: 3px 0;
margin-left:5px;
font-weight:700;
}
#footer ul.quick-links li a i{
margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
  font-weight: 700;
}

@media (max-width:50px){
#footer h5 {
  padding-left: 0;
  border-left: transparent;
  padding-bottom: 0px;

}
}



/*  Event Front  */

.eventd{

}
header .item {
height: 70vh;
position: relative;
}
header .item img {
  width: 600px;
  height: 499px;
object-fit: cover;
}
header .item .cover {
padding: 75px 0;
position: absolute;
width: 100%;
height: 100%;
top: 0;
left: 0;
background: rgba(0, 0, 0, 0.6);
display: flex;
align-items: center;
}
header .item .cover .header-content {
position: relative;
padding: 56px;
overflow: hidden;
}
header .item .cover .header-content .line {
content: "";
display: inline-block;
width: 100%;
height: 100%;
left: 0;
top: 0;
position: absolute;
border: 9px solid #fff;
-webkit-clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
}
header .item .cover .header-content h2 {
font-weight: 300;
font-size: 35px;
color: #fff;
}
header .item .cover .header-content h1 {
font-size: 56px;
font-weight: 600;
margin: 5px 0 20px;
word-spacing: 3px;
color: #fff;
}
header .item .cover .header-content h4 {
font-size: 24px;
font-weight: 300;
line-height: 36px;
color: #fff;
}
header .owl-item.active h1 {
-webkit-animation-duration: 1s;
animation-duration: 1s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
animation-name: fadeInDown;
animation-delay: 0.3s;
}
header .owl-item.active h2 {
-webkit-animation-duration: 1s;
animation-duration: 1s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
animation-name: fadeInDown;
animation-delay: 0.3s;
}
header .owl-item.active h4 {
-webkit-animation-duration: 1s;
animation-duration: 1s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
animation-name: fadeInUp;
animation-delay: 0.3s;
}
header .owl-item.active .line {
-webkit-animation-duration: 1s;
animation-duration: 1s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
animation-name: fadeInLeft;
animation-delay: 0.3s;
}
header .owl-nav .owl-prev {
position: absolute;
left: 15px;
top: 43%;
opacity: 0;
-webkit-transition: all 0.4s ease-out;
transition: all 0.4s ease-out;
background: rgba(0, 0, 0, 0.5) !important;
width: 40px;
cursor: pointer;
height: 40px;
position: absolute;
display: block;
z-index: 1000;
border-radius: 0;
}
height
header .owl-nav .owl-prev span {
font-size: 1.6875rem;
color: #fff;
}
header .owl-nav .owl-prev:focus {
outline: 0;
}
header .owl-nav .owl-prev:hover {
background: #000 !important;
}
header .owl-nav .owl-next {
position: absolute;
right: 15px;
top: 43%;
opacity: 0;
-webkit-transition: all 0.4s ease-out;
transition: all 0.4s ease-out;
background: rgba(0, 0, 0, 0.5) !important;
width: 40px;
cursor: pointer;
height: 40px;
position: absolute;
display: block;
z-index: 1000;
border-radius: 0;
}
header .owl-nav .owl-next span {
font-size: 1.6875rem;
color: #fff;
}
header .owl-nav .owl-next:focus {
outline: 0;
}
header .owl-nav .owl-next:hover {
background: #000 !important;
}
header:hover .owl-prev {
left: 0px;
opacity: 1;
}
header:hover .owl-next {
right: 0px;
opacity: 1;
}

/* index.blade.php      front */
/* start slider main css */
.preview-slider .arrow.hide,.preview-slider .preview::before{
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    pointer-events:none
}
.preview-slider{
    height:100%;
    overflow:hidden;
    position:relative;
    background:#333
}
.preview-slider .slider-item{
    background-repeat:no-repeat;
    -webkit-background-size:cover;
    background-size:cover;
    background-position:center;
    height:100%;
    width:100%;
    text-align:center;
    display:-webkit-box;
    display:-webkit-flex;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-pack:center;
    -webkit-justify-content:center;
    -ms-flex-pack:center;
    justify-content:center;
    -webkit-box-align:center;
    -webkit-align-items:center;
    -ms-flex-align:center;
    align-items:center;
    -webkit-flex-shrink:0;
    -ms-flex-negative:0;
    flex-shrink:0;
    position:relative;
    -webkit-transition:all 2s ease-in-out;
    -o-transition:all 2s ease-in-out;
    transition:all 2s ease-in-out
}
.preview-slider .slider-item::before{
    content:'';
    position:absolute;
    top:0;
    right:0;
    left:0;
    bottom:0;
    opacity:.5;
    -webkit-transition:background 1s ease-in-out,opacity .5s ease-in-out;
    -o-transition:background 1s ease-in-out,opacity .5s ease-in-out;
    transition:background 1s ease-in-out,opacity .5s ease-in-out
}
.preview-slider .slider-wrapper{
    width:100%;
    height:100%;
    display:-webkit-box;
    display:-webkit-flex;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-align:center;
    -webkit-align-items:center;
    -ms-flex-align:center;
    align-items:center;
    -webkit-box-sizing:content-box;
    box-sizing:content-box;
    position:relative;
    -webkit-transform:translate3d(0,0,0);
    transform:translate3d(0,0,0);
    -webkit-transition:all 1s ease-in-out;
    -o-transition:all 1s ease-in-out;
    transition:all 1s ease-in-out
}
.preview-slider .slider-wrapper.zoom .slider-item::before{
    background:#000
}
.preview-slider .slider-wrapper.zoom .slider-item:hover::before{
    opacity:0
}
.preview-slider .arrow{
    position:absolute;
    top:50%;
    -webkit-transform:translateY(-50%) scale(1);
    -ms-transform:translateY(-50%) scale(1);
    transform:translateY(-50%) scale(1);
    z-index:1;
    cursor:pointer;
    -webkit-transition:all .5s ease-in-out;
    -o-transition:all .5s ease-in-out;
    transition:all .5s ease-in-out;
    width:220px;
    height:110px
}
.preview-slider .arrow::before{
    content:'';
    position:absolute;
    top:50%;
    left:50%;
    -webkit-border-radius:50%;
    border-radius:50%;
    width:100px;
    height:100px;
    border:3px solid #333;
    opacity:0;
    -webkit-transition:all .4s ease-in-out;
    -o-transition:all .4s ease-in-out;
    transition:all .4s ease-in-out
}
.preview-slider .arrow.hide{
    opacity:0;
    user-select:none
}
.preview-slider .arrow.animate .preview::before{
    -webkit-transition:all 2s ease-in-out;
    -o-transition:all 2s ease-in-out;
    transition:all 2s ease-in-out;
    width:0%
}
.preview-slider .arrow.animate.arrow-right .counter{
    -webkit-transition:-webkit-transform 2s ease-in-out;
    -o-transition:transform 2s ease-in-out;
    transition:transform 2s ease-in-out;
    transition:transform 2s ease-in-out,-webkit-transform 2s ease-in-out;
    -webkit-transform:translateX(170px);
    -ms-transform:translateX(170px);
    transform:translateX(170px);
    opacity:1
}
.preview-slider .arrow.animate.arrow-left .counter{
    -webkit-transition:-webkit-transform 2s ease-in-out;
    -o-transition:transform 2s ease-in-out;
    transition:transform 2s ease-in-out;
    transition:transform 2s ease-in-out,-webkit-transform 2s ease-in-out;
    -webkit-transform:translateX(-170px);
    -ms-transform:translateX(-170px);
    transform:translateX(-170px);
    opacity:1
}
.preview-slider .arrow-left{
    left:0;
    background:url("https://alikinvv.github.io/previewSlider/demo/img/arrow-left.svg") 30% 50% no-repeat;
    -webkit-background-size:30px 30px;
    background-size:30px
}
.preview-slider .arrow-left::before{
    -webkit-transform:translate(-80%,-50%) scale(.5);
    -ms-transform:translate(-80%,-50%) scale(.5);
    transform:translate(-80%,-50%) scale(.5)
}
.preview-slider .arrow-left.show,.preview-slider .arrow-left:hover{
    background:url("https://alikinvv.github.io/previewSlider/demo/img/arrow-left.svg") 35% 50% no-repeat;
    -webkit-background-size:0 0;
    background-size:0
}
.preview-slider .arrow-left.show::before,.preview-slider .arrow-left:hover::before{
    -webkit-transform:translate(-80%,-50%) scale(.9);
    -ms-transform:translate(-80%,-50%) scale(.9);
    transform:translate(-80%,-50%) scale(.9);
    -webkit-animation:blink .4s ease-in-out 0s forwards;
    animation:blink .4s ease-in-out 0s forwards
}
.preview-slider .arrow-left.show .grid,.preview-slider .arrow-left:hover .grid{
    -webkit-transform:translateX(0);
    -ms-transform:translateX(0);
    transform:translateX(0);
    opacity:1
}
.preview-slider .arrow-left.show .preview,.preview-slider .arrow-left:hover .preview{
    opacity:1;
    -webkit-transform:translateX(0);
    -ms-transform:translateX(0);
    transform:translateX(0)
}
.preview-slider .arrow-left.show .arrow-link,.preview-slider .arrow-left:hover .arrow-link{
    opacity:1;
    -webkit-transform:translateX(0) translateY(-50%);
    -ms-transform:translateX(0) translateY(-50%);
    transform:translateX(0) translateY(-50%)
}
.preview-slider .arrow-left .grid{
    right:0;
    -webkit-transform:translateX(-15px);
    -ms-transform:translateX(-15px);
    transform:translateX(-15px)
}
.preview-slider .arrow-left .grid span{
    right:52px;
    text-align:right
}
.preview-slider .arrow-left .grid::before{
    right:15px
}
.preview-slider .arrow-left .preview{
    -webkit-transform:translateX(-140px);
    -ms-transform:translateX(-140px);
    transform:translateX(-140px);
    left:0;
    right:50px
}
.preview-slider .arrow-left .preview::before{
    left:0
}
.preview-slider .arrow-left .arrow-link{
    right:63px;
    -webkit-transform:translateX(-50px) translateY(-50%);
    -ms-transform:translateX(-50px) translateY(-50%);
    transform:translateX(-50px) translateY(-50%)
}
.preview-slider .arrow-left .counter{
    right:43px
}
.preview-slider .arrow-right{
    right:0;
    background:url("https://alikinvv.github.io/previewSlider/demo/img/arrow-right.svg") 70% 50% no-repeat;
    -webkit-background-size:30px 30px;
    background-size:30px
}
.preview-slider .arrow-right::before{
    -webkit-transform:translate(-22%,-50%) scale(.5);
    -ms-transform:translate(-22%,-50%) scale(.5);
    transform:translate(-22%,-50%) scale(.5)
}
.preview-slider .arrow-right.show,.preview-slider .arrow-right:hover{
    background:url("https://alikinvv.github.io/previewSlider/demo/img/arrow-right.svg") 65% 50% no-repeat;
    -webkit-background-size:0 0;
    background-size:0
}
.preview-slider .arrow-right.show::before,.preview-slider .arrow-right:hover::before{
    -webkit-transform:translate(-23%,-50%) scale(.9);
    -ms-transform:translate(-23%,-50%) scale(.9);
    transform:translate(-23%,-50%) scale(.9);
    -webkit-animation:blink .4s ease-in-out 0s forwards;
    animation:blink .4s ease-in-out 0s forwards
}
.preview-slider .arrow-right.show .grid,.preview-slider .arrow-right:hover .grid{
    -webkit-transform:translateX(0);
    -ms-transform:translateX(0);
    transform:translateX(0);
    opacity:1
}
.preview-slider .arrow-right.show .preview,.preview-slider .arrow-right:hover .preview{
    opacity:1;
    -webkit-transform:translateX(0);
    -ms-transform:translateX(0);
    transform:translateX(0);
    right:0;
    left:50px
}
.preview-slider .arrow-right.show .arrow-link,.preview-slider .arrow-right:hover .arrow-link{
    opacity:1;
    -webkit-transform:translateX(0) translateY(-50%);
    -ms-transform:translateX(0) translateY(-50%);
    transform:translateX(0) translateY(-50%)
}
.preview-slider .arrow-right .grid{
    left:0;
    -webkit-transform:translateX(15px);
    -ms-transform:translateX(15px);
    transform:translateX(15px)
}
.preview-slider .arrow-right .grid::before{
    left:15px
}
.preview-slider .arrow-right .grid span{
    left:52px
}
.preview-slider .arrow-right .preview{
    -webkit-transform:translateX(140px);
    -ms-transform:translateX(140px);
    transform:translateX(140px)
}
.preview-slider .arrow-right .preview::before{
    right:0
}
.preview-slider .arrow-right .arrow-link{
    left:63px;
    -webkit-transform:translateX(50px) translateY(-50%);
    -ms-transform:translateX(50px) translateY(-50%);
    transform:translateX(50px) translateY(-50%)
}
.preview-slider .arrow-right .counter{
    left:43px
}
.preview-slider .grid{
    display:inline-block;
    height:100%;
    width:50px;
    position:absolute;
    top:0;
    opacity:0;
    -webkit-transition:all .2s ease-in-out;
    -o-transition:all .2s ease-in-out;
    transition:all .2s ease-in-out;
    -webkit-transition-delay:.4s;
    -o-transition-delay:.4s;
    transition-delay:.4s;
    overflow:hidden;
    background:#fff;
    z-index:2
}
.preview-slider .grid span,.preview-slider .grid::before{
    top:50%;
    -webkit-transform:translateY(-50%);
    -ms-transform:translateY(-50%);
    position:absolute
}
.preview-slider .grid:hover{
    width:130px
}
.preview-slider .grid::before{
    content:'';
    width:20px;
    height:20px;
    transform:translateY(-50%);
    background:url("https://alikinvv.github.io/previewSlider/demo/img/grid.svg") center no-repeat
}
.preview-slider .grid span{
    text-transform:uppercase;
    white-space:nowrap;
    line-height:1.3;
    transform:translateY(-50%);
    pointer-events:none;
    color:#333
}
.preview-slider .preview{
    position:absolute;
    top:0;
    height:100%;
    background-position:center;
    -webkit-background-size:cover;
    background-size:cover;
    opacity:0;
    -webkit-transition:all .4s ease-in-out;
    -o-transition:all .4s ease-in-out;
    transition:all .4s ease-in-out;
    -webkit-transition-delay:.4s;
    -o-transition-delay:.4s;
    transition-delay:.4s
}
.preview-slider .preview::before{
    content:'';
    position:absolute;
    top:0;
    width:100%;
    height:100%;
    background:#000;
    opacity:.5;
    user-select:none;
    -webkit-transition:all 1s ease-in-out;
    -o-transition:all 1s ease-in-out;
    transition:all 1s ease-in-out
}
.preview-slider .arrow-link{
    z-index:1;
    position:absolute;
    top:50%;
    -webkit-transform:translateY(-50%);
    -ms-transform:translateY(-50%);
    transform:translateY(-50%);
    color:#fff;
    font-size:20px;
    opacity:0;
    -webkit-transition:all .4s ease-in-out;
    -o-transition:all .4s ease-in-out;
    transition:all .4s ease-in-out;
    -webkit-transition-delay:.4s;
    -o-transition-delay:.4s;
    transition-delay:.4s;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none;
    pointer-events:none;
    text-transform:uppercase
}
.preview-slider .counter{
    position:absolute;
    top:-30px;
    font-size:24px;
    z-index:1;
    -webkit-transition:-webkit-transform 1s ease-in-out;
    -o-transition:transform 1s ease-in-out;
    transition:transform 1s ease-in-out;
    transition:transform 1s ease-in-out,-webkit-transform 1s ease-in-out;
    opacity:0
}
@-webkit-keyframes blink{
    0%,100%{
        opacity:0
    }
    50%{
        opacity:1
    }
}
@keyframes blink{
    0%,100%{
        opacity:0
    }
    50%{
        opacity:1
    }
}





html,
body {
    width: 100%;
    height: 100%; }

body {
    font-family: 'Playfair Display', serif; }

.slider-desc {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center; }
.slider-desc .title {
    font-size: 95px;
    font-weight: bold;
    margin: 0 0 10px; }
.slider-desc .desc {
    font-size: 18px;
    line-height: 1.4; }


/*POST*/
.postd{
    background-color: ;
    padding: 100px;
}
.post {
    background-color: whitesmoke;
    margin-top: 40px;
    margin-bottom: 40px;
    text-align: center;
    height: 350px;
    width: 800px;
}
.imgd{
    float: left;
}
.capd{

    text-align: ;
}


.cp {
    color: whitesmoke;
    background-color: black;
    height: 20px;
}

.navp{
    color:orangered;
    -webkit-transform:color 1s;
}
.navp:hover{
    color: #1d2124;
}
.navd{
    margin-bottom: 10px;
}
#navbar{

    background-color: #1d2124;
    -webkit-transform:background-color 1s;
}
#navbar:hover{
    background-color: cornflowerblue;
}

/*welcome.blade*/


/*event.show*/


</style>
</head>
<body>
    <div id="app">
<div class="navd">
        <nav id="sidebar-wrapper" class="navbar navbar-dark bg-dark header-top fixed-top navbar-expand-md navbar-expand-lg navbar-expand-xl" >

                    <span class="navbar-toggler-icon leftmenutrigger"></span>
                    <a class="navbar-brand" href="#">Home</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarItems" aria-controls="navbarItems" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse show" id="navbarItems">
                        <!--flex-column-->
                        <ul class="navbar-nav animate side-nav">




                            <li class="nav-item dropdown">
                                <a id="dashboardForDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                                    Educational Clubs<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">


                                        <li id="navbar" class="nav-item dropdown-item" aria-labelledby="dashboardForDropdown" style="background-color: lightgoldenrodyellow;">
                                            <a class="dropdown-item" href="#"><p class="navp">Rajuk College Physics Club </p></a>
                                            <a class="dropdown-item" href="#"><p class="navp">Rajuk College Chemistry Club </p></a>
                                            <a class="dropdown-item" href="#"><p class="navp">Rajuk College Math Club</p></a>
                                            
               
                                        </li>

                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="dashboardForDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                                    Extra-curricular Clubs<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">


                                    <li class="nav-item dropdown-item" aria-labelledby="dashboardForDropdown" style="background-color: lightgoldenrodyellow">
                                        <a class="dropdown-item" href="#"><p class="navp">Rajuk College Tech Club</p></a>
										   <a class="dropdown-item" href="#"><p class="navp">Rajuk College Islamic Study Circle </p></a>
                                        <a class="dropdown-item" href="#"><p class="navp">Rajuk College Debating Club</p></a>
                                        <a class="dropdown-item" href="#"><p class="navp">Rajuk College PhotoGraphy Club</p></a>
                                        <a class="dropdown-item" href="#"><p class="navp">Rajuk College Arts Club</p></a>
                                        <a class="dropdown-item" href="#"><p class="navp">Rajuk College  Earth & Nature Club</p></a>
                                        <a class="dropdown-item" href="#"><p class="navp">Rajuk College Literature Club</p></a>
                                     
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="dashboardForDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                                    Sports Clubs<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">


                                    <li class="nav-item dropdown-item" aria-labelledby="dashboardForDropdown" style="background-color: lightgoldenrodyellow ">
                                        <a class="dropdown-item" href="#"><p class="navp">Rajuk College Cricket Club </p></a>
                                        <a class="dropdown-item" href="#"><p class="navp">Rajuk College Football Club </p></a>
                                        <a class="dropdown-item" href="#"><p class="navp">Rajuk College Chess Club</p></a>
              
                                    </li>

                                </ul>
                            </li>

                        </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                </nav>
</div>

      </div>






        <main class="py-4">
            @yield('content')

            <footer>

              <section id="footer" style="margin-top: 10px;width:100%;">

                    <div class="container">

                      <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                          <li class="cp">This site is developed by Al-Amin Rabbi Jony</li>
                          <li class="cp">Copy Rights Preserved by Al-Amin Rabbi Jony & RCTC</li>
                      </ul>

                    </div>
                    </hr>
                  </div>
                  
                </div>
            </footer>

        </main>
    </div>
</body>
</html>
