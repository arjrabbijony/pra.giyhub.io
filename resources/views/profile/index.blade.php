
@extends('layouts.app')

@section('content')




</style>
<div style="background-color: whitesmoke">





        <div class="" >
            <img src="{{ $user->profile->profileimage() }}" style="height: 600px;width: 100%;" alt="" >
        </div>




    <!-- Font--->




    <!-- Event -->
    <div class="container">

        <div class="container-fluid m-3">


                <div class="d-flex justify-content-between align-items-baseline">
                @can('update',$user->profile)
                    
                    <a class="btn btn-outline-secondary" href="/profile/{{ $user->id }}/edit">Edit Profile</a>
				@endcan
				@can('update',$user->profile)
				
                    <a class="btn btn-outline-success" href="/p/create">Add a POST</a>
				@endcan
                @can('update',$user->profile)
				
                    <a class="btn btn-outline-success" href="/c/create">Add a Event</a>
                @endcan

                </div>
                </div>


		<div    style="margin-top: 50px;">
        <div class="card mb-3" style="width: 200px;float: left;height: 200px;text-align: center">
            <div class="row no-gutters">

                <div class="col-md"style="padding-top: 40px;">
                    <div class="card-body">
                        <h2>Description</h2>
                    </div>
                </div>
            </div>
        </div>

        <div style="max-height: 200px;">
            <div class="jumbotron jumbotron-fluid"style="height: 200px;">
                <div class="container">
                    <p class="">{{ $user->profile->description }}</p>
                    <h5>Contacts:<br>
                    <a href="{{ $user->profile->url }}" >{{ $user->profile->url }}<a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
   


            <!--  Eventt Front -->
<nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="/storage/img/1.png" width="90" height="80" alt="">
                    <h2>Events</h2>
                </a>
            </nav>
  @foreach($user->events as $event)

  <div style="border-left:5px solid black;border-right:5px solid black;text-align:center;">
                                    <div class="ehead">
                                        <h1 class="eh1">Fest</h1>
                                    </div>



<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="/c/{{$event->id}}">  <img src="/storage/{{$event->image}}" style="height:400px;width:800px;">
      <div class="carousel-caption d-none d-md-block">
                                <h2>{{$user->name}}  Presents</h2>
                        <h1>{{$event->caption}}</h1>
                        <h4>{{$event->motive}}</h4>
      </div>
    </div>
    <div class="carousel-item">
		      <a href="/c/{{$event->id}}">  <img src="/storage/{{$event->image}}" style="height:400px;width:800px;">
      <div class="carousel-caption d-none d-md-block">
        <div class="line animated bounceInLeft"></div>
                        <h2>{{$user->name}}  Presents</h2>
                        <h1>{{$event->caption}}</h1>
                        <h4>{{$event->motive}}</h4>
                    </div>
      </div>
    </div>
    <div class="carousel-item">
      <a href="/c/{{$event->id}}">  <img src="/storage/{{$event->image}}" style="height:00px;width:800px;">
      <div class="carousel-caption d-none d-md-block">
                                <div class="line animated bounceInLeft"></div>
                        <h2>{{$user->name}} Presents</h2>
                        <h1>{{$event->caption}}</h1>
                          <h4>{{$event->motive}}</h4>
                    </div>
      </div>
    </div>
 
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

           @endforeach
            </div>







</div>
@foreach($user->posts as $post)
<div class="postd" style="text-align: center;"  >


    <div class="container" style="text-align: center;border-top:10px solid black;border-bottom:10px solid black ">


            <h1 style="text-align: center">Post</h1>
            <div class="post">
                <div class="imgd">
                    <img src="/storage/{{ $post->image }}" height="340px" width="550px" alt="">
                </div>

                <div class="capd">
                    <div class="card-body"style="
                    background-color:black;
                    height:340px;
                    
                    ">
                        <h3 style="float: left;margin: 2px;"><a href="" style="color:lightgreen;">{{ $user->Username }}</a></h3><br><br>
                        <p class="card-text" style="color:lightgreen;">{{ $post->caption }}</p>
                    </div>
                </div>

            </div>



    </div>
    @endforeach

</div>
 </div>
</div>

    @endsection
