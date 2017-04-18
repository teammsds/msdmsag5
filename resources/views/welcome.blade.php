@extends('layouts.app')
@section('content')
<header> 

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
        
            <div class="page-header">
            <h1 style= "color: red"></style> <img src="images/logo.jpg" class="img-rounded" height="100" width="200">  Missouri Soccer Association </h1>
                       
        </div>
         <i class="fa fa-futbol-o" style="font-size: 30px;color:red"></i>
           <a style= "color: white;text-shadow: 2px 2px 4px #000000" href="{{ action('MatchController@index')}}" class="glow">Visit ongoing matches</a>
           <br>
           <br>
           <i class="fa fa-futbol-o" style="font-size: 30px;color:Green"></i>
           <a style= "color: white;text-shadow: 2px 2px 4px #000000" href="{{ action('TournamentController@index')}}" class="glow">Tournament List</a>
            <<!-- div class="panel panel-default"> -->
                <!-- <div class="panel-heading">Missouri Soccer Association ALive and Kickin!!!</div> -->
           <!--   <div style="text-align: left;"><img src="images/soccer.jpg" height="100" width="500"></div> -->
             <div class="panel-body">
                <video width="320" height="240" controls>
                     <source src="images/soccer promo.mp4" type="video/mp4">
                     
                    Your browser does not support the video tag.
                </video>
                

                   </div>
            </div>
        </div>
    </div>
</div>
</header>
@endsection
