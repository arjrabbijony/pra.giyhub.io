@extends('layouts.app')

@section('content')

<style media="screen">
  .img{
    height: 500px;
    width: 700px;
    margin: 10px auto;
    text-align: center;
    background-color: #b7b7b7;
  }
  .but{
    margin: 50px auto;

  }
  .n{
    float: left;
  }
  .prize{
    float: right;
  }
  .com{
      text-align: center;
    width: 100%;
    background-color: ;
  }
  .post{
    margin-top: 5px;
    margin-bottom: 5px;

  }
  .des{
    margin: 20px auto;

    background-color: #d3d3d3;
  }
  .desh1{
    float: left;
  }
  .desp{
    text-align: center;
  }
  .she{
    background-color: #d3d3d3;
  }
  .sh1{

    cursor:cell;
    color:black;
    width: 400px;
    text-align: center;
  }
  .news{
    background-color: antiquewhite;
  }
  .cp{
    margin: 19px;
    background-color: beige;
  }


                      /*navbar*/


.navd{ background:#000; margin:0px; }
div#menubar1{ padding: 24px; border:#999 1px dashed; }
div#menubar1 > a{
    font-family:Arial, Helvetica, sans-serif;
    font-size:17px;
    background: #333;
    padding: 12px 24px;
    color:#999;
    margin-right: 10px;
    text-decoration:none;
    border-radius: 3px;
    transition: background 0.3s linear 0s, color 0.3s linear 0s;
}
div#menubar1 > a:hover{
    background: aquamarine;
    color:#FFF;
}

/*Extra*/
.sh1{
	color:#000;
	height:30px;
	-webkit-transparent:color 1s,height 1s;
}
.sh1:hover{
	color:#fff;
	height:40px
}
.dh1{
	background-color:#fff;
	margin-top:10px;
	text-align:center;
	opacity:.5;
	width:100%;
	height:50px;
	-webkit-transparent:background-color 1s,height 1s,opacity 1s;
}
.dh1:hover{
	background-color:aquamarine;
	opacity:1;
	height:60px;
}

</style>

<div class="container" style="border-left: 1px solid black; border-right: 1px solid black;">
<div class="container" style=" margin-top: 20px;">
  <div class="img">
      <img src="/storage/{{$events->image}}" alt="" height="440px" width="100%">
  </div>

  <div class="container-fluid m-3">

      </div>
      <div class="row">
          <nav class="navbar navbar-light bg-light">
              <a class="navbar-brand" href="#">
              <img src="/storage/img/d1.jpg" width="50" height="50" alt="">
              <h2>Fest</h2>
            </a>
          </nav>
		  

  <div class="prize">
    <button class="btn btn primary" type="" name="button">Prize money</button>
  </div>
</div>
    <div class="row" style="margin-top:20px;">
          <nav class="navbar navbar-light bg-light">
              <a class="navbar-brand" href="#">
              <img src="/storage/img/d2.png" width="50" height="50" alt="">
              <h2>Description</h2>
            </a>
          </nav>
<div class="des">

  <p class="desp">Each month, our jury selects the winning short films for each <br>
    category: Best Film, Best Director, Best Cinematography, Best Screenplay,<br>
     Best Editing, Best Narrative Short, Best Student Short, Best Young Director,<br>
      Best Documentary Short, Best Animation Short, Best Experimental Short, Best Music<br>
       Video, Best Amateur Short, Special Jury Award</p>
</div>

  <div class="post">
	 <div class="row" style="margin-top:20px;">
          <nav class="navbar navbar-light bg-light">
              <a class="navbar-brand" href="#">
              <img src="/storage/Koala.jpg" width="30" height="30" alt="">
              <h2>Posts</h2>
            </a>
          </nav>
			
        <div class="postimg">
		<div class="dh1"><h3 class="sh1">Posts</h3></div>
          <img class="" src="https://upload.wikimedia.org/wikipedia/en/e/e8/RAJUK_Uttara_Model_College_academic_building.jpg" alt=""height="400px" width="500px">
        </div>
        </div>
	
	 <div class="row" style="margin-top:20px;">
        <div class="com">
            <p>the world is a vampire</p>
        </div>

	</div>	
  </div>

	 <div class="row" style="margin-top:20px;">
          <nav class="navbar navbar-light bg-light">
              <a class="navbar-brand" href="#">
              <img src="/storage/Koala.jpg" width="30" height="30" alt="">
             <h2>Contacts</h2>
            </a>
          </nav>
    <div style="text-align:center">
      <p style="color:green;">r_bit@gmail.com || 021812338823 ||www.facebook/r_bit.com</p>
	</div>  
    </div>
	
     
   <div class="row" style="
    margin-top:20px;
    width: 300px;
">
          <nav class="navbar navbar-light bg-light">
              <a class="navbar-brand" href="#">
              <img src="/storage/Koala.jpg" width="30" height="30" alt="">
              <h2>Schedule</h2>
            </a>
          </nav>
		<p>Schedule</p>
		  
	</div>	  

</div>
</div>

</div>