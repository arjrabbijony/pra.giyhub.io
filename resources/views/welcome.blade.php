<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rajuk Clubs</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- index -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Front  -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">

        <!--  Footer  -->

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">



        <script type="text/javascript">
                    $('#myCarousel').carousel({
             interval: 3000,
            })
        </script>

        <!-- Styles -->
<style>

/*front*/

body {
  background: #eee;
}

.flexslider {
  width: 100%;
  margin: 0 auto;
  box-shadow: none;
}

.flexslider li {
  position: relative;
}

.flexslider li .meta {
  position: absolute;
  bottom: 20px;
  left: 20px;
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  font-family: 'Roboto', sans-serif;
}

.flexslider li h1 {
  background: #45b3e0;
  padding: 12px 18px 12px;
  margin-bottom: 0;
  font-size: 1.8em;
  font-weight: 300;
}

.flexslider li h2 {
  background: #45b3e0;
  padding: 13px 18px 11px;
  font-size: 1.1em;
  margin-bottom: 0;
  font-weight: 300;
}

.flexslider li .category {
  display: flex;
  flex-direction: row;
}

.flexslider li .category p {
  background: #FF3333;
  margin-right: 7px;
  font-size: 1.1em;
  padding: 12px 18px 10px;
  font-weight: 300;
}

.flexslider li .category span {
  background: #FF3333;
  margin-top: 17px;
  padding: 8px 12px 0;
  font-size: 0.9em;
  font-weight: 300;
  height: 26px;
}

.flexslider li h1,
.flexslider li h2,
.flexslider li .category p,
.flexslider li .category span {
  -webkit-animation-duration: .6s;
  animation-duration: .6s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation-name: fadeOutLeft;
  animation-name: fadeOutLeft;
}

.flexslider li.flex-active-slide .meta h1,
.flexslider li.flex-active-slide .meta h2,
.flexslider li.flex-active-slide .meta .category p,
.flexslider li.flex-active-slide .meta .category span {
  -webkit-animation-delay: .4s;
  animation-delay: .4s;
  -webkit-animation-duration: .6s;
  animation-duration: .6s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
}

.flexslider li.flex-active-slide .meta h2 {
  -webkit-animation-delay: .5s;
  animation-delay: .5s;
}

.flexslider li.flex-active-slide .meta .category p {
  -webkit-animation-delay: .6s;
  animation-delay: .6s;
}

.flexslider li.flex-active-slide .meta .category span {
  -webkit-animation-delay: .8s;
  animation-delay: .8s;
}
@-webkit-keyframes fadeInLeft {
  0% {
      opacity: 0;
      -webkit-transform: translate3d(-100%, 0, 0);
      transform: translate3d(-100%, 0, 0);
  }
  100% {
      opacity: 1;
      -webkit-transform: none;
      transform: none;
  }
}

@keyframes fadeInLeft {
  0% {
      opacity: 0;
      -webkit-transform: translate3d(-100%, 0, 0);
      transform: translate3d(-100%, 0, 0);
  }
  100% {
      opacity: 1;
      -webkit-transform: none;
      transform: none;
  }
}

@-webkit-keyframes fadeOutLeft {
  0% {
      opacity: 1;
  }
  100% {
      opacity: 0;
      -webkit-transform: translate3d(-100%, 0, 0);
      transform: translate3d(-100%, 0, 0);
  }
}

@keyframes fadeOutLeft {
  0% {
      opacity: 1;
  }
  100% {
      opacity: 0;
      -webkit-transform: translate3d(-100%, 0, 0);
      transform: translate3d(-100%, 0, 0);
  }
}




/*cards*/



  .row {
    max-width: 114rem;
    margin: 0 auto; }
    .row::after {
      content: '';
      clear: both;
      display: table; }
    .row [class^="col-"] {
      float: left; }
      .row [class^="col-"]:not(:last-child) {
        margin-right: 6rem; }
    .row:not(:last-child) {
      margin-bottom: 6rem; }
    .row .col-1-of-2 {
      width: calc((100% - 6rem) / 2); }
    .row .col-1-of-3 {
      width: calc((100% - 2 * 6rem) / 3);
      border-left: 5px solid aqua;
      border-right: 5px solid aqua;
    }
    .row .col-1-of-4 {
      width: calc((100% - 3 * 6rem) / 4); }
    .row .col-2-of-4 {
      width: calc(2 * ((100% - 3 * 6rem) / 4) + 6rem); }
    .row .col-3-of-4 {
      width: calc(3 * ((100% - 3 * 6rem) / 4) + 2 * 6rem); }


  .section-tours {
    background-color: #f7f7f7;
    border-top: 5px solid aqua;
    margin-top: 5px;
   }

  .card {
    perspective: 150rem;
    -moz-perspective: 150rem;
    position: relative;
    height: 400px; }
    .card__side {
      height: 400px;
      transition: all .8s ease;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      backface-visibility: hidden;
      border-radius: 3px;
      overflow: hidden;
      box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15); }



      .card__side--front {
        background-color: #fff; }
      .card__side--back {
        transform: rotateY(180deg); }
        .card__side--back-1 {
          background-image: linear-gradient(to right bottom, black, red); }
        .card__side--back-2 {
          background-image: linear-gradient(to right bottom, #000428, #004e92); }
        .card__side--back-3 {
          background-image: linear-gradient(to right bottom, #2998ff, #5643fa); }
    .card:hover .card__side--front {
      transform: rotateY(-180deg); }
    .card:hover .card__side--back {
      transform: rotateY(0); }
    .card__picture {
      background-size: cover;
      height: 23rem;
      background-blend-mode: screen;
      clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%); }
      .card__picture--1 {
        background-image: linear-gradient(to right bottom, lightseagreen,coral), url(/storage/img/rcpc3.png); }
      .card__picture--2 {
        background-image: linear-gradient(to right bottom, #000000, #000000), url(/storage/img/rctc.jpg); }
      .card__picture--3 {
        background-image: linear-gradient(to right bottom, #2998ff, #5643fa), url(/storage/img/rcdci.jpg); }



    .card__heading {
      font-size: 2.8rem;
      text-transform: uppercase;
      color: #fff;
      font-weight: 300;
      position: absolute;
      top: 12rem;
      right: 2rem;
      text-align: right;
      width: 74%; }
    .card__heading-span {
      padding: .5rem 1.5rem;
      -webkit-box-decoration-break: clone;
      box-decoration-break: clone; }
      .card__heading-span--1 {
        background-image: linear-gradient(to right bottom, rgba(255, 185, 0, 0.85), rgba(255, 119, 48, 0.85)); }
      .card__heading-span--2 {
        background-image: linear-gradient(to right bottom, rgba(0, 4, 40, 0.85), rgba(0, 78, 146, 0.85)); }
      .card__heading-span--3 {
        background-image: linear-gradient(to right bottom, rgba(41, 152, 255, 0.85), rgba(86, 67, 250, 0.85)); }
    .card__details {
      padding: 3rem; }
      .card__details ul {
        list-style: none;
        width: 80%;
        margin: 0 auto; }
        .card__details ul li {
          text-align: center;
          font-size: 1.5rem;
          padding: 1rem; }
          .card__details ul li:not(:last-child) {
            border-bottom: 1px solid #eee; }
    .card__cta {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%); }
    .card__price-box {
      color: #fff;
      text-align: center;
      margin-bottom: 8rem; }
    .card__price-only {
      font-size: 1.4rem;
      text-transform: uppercase; }
    .card__price-value {
      font-size: 3rem;
      font-weight: 50; }


  .btn--animated {
    animation: fadeInUp .5s ease-out;
    animation-fill-mode: backwards; }

  .btn:link, .btn:visited {
    text-transform: uppercase;
    padding: 1.5rem 4rem;
    display: inline-block;
    transition: all .2s;
    color: initial;
    position: relative;
    font-size: 1.6rem; }

  .btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2); }

  .btn:active {
    transform: translateY(-1px);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2); }

  .btn::after {
    content: '';
    display: inline-block;
    height: 100%;
    width: 100%;
    border-radius: 10rem;
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
    transition: all .2s; }

  .btn::after {
    background: #fff; }

  .btn:hover::after {
    transform: scaleX(1.4) scaleY(1.6);
    opacity: 0; }

  .btn--white {
    background-color: #fff;
    border-radius: 10rem; }

  .btn--blue {
    background-color: #004e92;
    border-radius: 10rem;
    color: #fff !important; }

  .text-center {
    text-align: center; }






/* show */
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


/* End slider main css*/

/* main css start */




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



                                          /*footer*/



.navd{
  height: 50px;
  text-align: center;

}



        </style>
    </head>
    <body>
@extends('layouts.app')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">



      <div class="flexslider left" >
      	<ul class="slides">
      		<li>
      			<img src="/storage/img/rctc.jpg" height="600px">
      			<div class="meta">
      				<h1>RCTC</h1>
      				<h2></h2>
      				<div class="category">
      					<p>TecH</p>
      					<span>Titans</span>
      				</div>
      			</div>
      		</li>
      		<li>
      			<img src="/storage/img/rcpc3.png" height="600px">
      			<div class="meta">
      				<h1>RCPC</h1>
      				<h2>Rajuk College Photography Club</h2>
      				<div class="category">
      					<p>Pic</p>
      					<span>World</span>
      				</div>
      			</div>
      		</li>
      		<li>
      			<img src="/storage/img/rcdc.jpg" height="600px">
      			<div class="meta">
      				<h1>RCDC</h1>
      				<h2>Rajuk College Debating Club</h2>
      				<div class="category">
      					<p>The</p>
      					<span>Debaters</span>
      				</div>
      			</div>
      		</li>
      		<li>
        
      			<img src="/storage/img/rcac.jpg" height="600px">
      			<div class="meta">
      				<h1>RCAC</h1>
      				<h2>The Artists </h2>
      				<div class="category">
      					<p>Art </p>
      					<span>World</span>
      				</div>
      			</div>
      		</li>
      	</ul>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/jquery.flexslider-min.js"></script>
      <script>
           $('.flexslider').flexslider({
      	animation: "slide",
      	controlNav: false
      });
      </script>
      </div>




<div class="container">



<section class="section-tours">
            <div class=" text-center  u-margin-bottom-medium">
                <br>  <br>  <h2 class="heading-secondary">
                    clubs
                </h2>
                <br>  <br>
            </div>
            <div class="row">



                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                 
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">RCPC</span>

                            </h4>
                            <div class="card__details">
                                <ul>

                                </ul>
                            </div>
                        </div>

                        <div class="card__side card__side--back card__side--back-1">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">
                                        We are the best Club
                                    </p>
                                    <p class="card__price-value">Selfie</p>
                                </div>
                                <a href="/profile/2" class="btn btn--white">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--2">RCTC</span>

                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>We are the best Club</li>

                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-2">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">We are the best Club</p>
                                    <p class="card__price-value">Tech Kings</p>
                                </div>
                                <a href="/profile/1" class="btn btn--white">Join us</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">
                                 
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--3">RCDC</span>

                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>RCDC</li>
                                    <li>Voice Your Voices</li>

                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-3">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">
                                      We are the best club.

                                    </p>
                                    <p class="card__price-value">Debate</p>
                                </div>
                                <a href="#0" class="btn btn--white">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
</div>






<!-- Footer -->

</body>
</html>
