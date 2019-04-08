@extends('layouts.mastar')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/" class="fa fa-home"></a>

    <a href="#" class="fa fa-search"></a>
    <a href="#"class="fa fa-envelope"></a>
    <a href="#" class="fa fa-globe"></a>
    <a href="#" class="fa fa-trash"></a>
  </div>

  <div id="main" class="jumbotron">
    <span style="font-size:30px;cursor:pointer; color:#ccfced" onclick="openNav()">&#9776; </span>
    <div class="heading">
      <center>
      <h1>Rent A Car</h1>
      <p>Get your perfect choice at door
  Be safe, Save money
  </p>
  </center>
    </div>
    <center>



       {!! Form::open(['action' => 'CustomerController@searchcar', 'method' => 'GET']) !!}
           {!! Form::text('from', '', ['class' => 'searchinput btn btn-md', 'id' => 'ajax', 'placeholder'=>'From']) !!}
           {!! Form::text('to', '', ['class' => 'searchinput btn btn-md', 'id' => 'ajaxTo', 'placeholder'=>'To']) !!}


      {!! Form::submit('Search', ['class' => 'searchinput btn btn-md']) !!}
</center>
<div class="logout" style="margin-left:1200px;margin-top:-180px;">
  @if (Auth::guard('customers')->check())
    <a href="/customerlogout" class="btn btn-md btn-info">Log Out</a>
  @endif
</div>
</div>

  <div class="container">
<div class="row">
  <div class="col-lg-6 col-5">
<div class="card img-fluid" style="width:500px">
  <img class="card-img-top" src="https://rentalcarsuae.com/wp-content/uploads/2017/09/Top-6-Suggestions-When-Rent-A-Car-500x306.jpg" alt="Card image" style="width:100%">
  <div class="card-img-overlay">
    <div class="cardbtn1">
      Top rated
    </div><br>
    <div class="cardbtn2">
      Search For Cars
    </div>
  </div>
</div>
</div>
<div class="col-lg-6 col-5">
  <div class="card img-fluid" style="width:500px">
    <img class="card-img-top" src="https://rentalcarsuae.com/wp-content/uploads/2017/09/Top-6-Suggestions-When-Rent-A-Car-500x306.jpg" alt="Card image" style="width:100%">
    <div class="card-img-overlay">
      <div class="cardbtn1">
        Top rated
      </div><br>
      <div class="cardbtn2">
        Search For Cars
      </div>
    </div>
  </div>
</div>

</div>
  </div>

  <script >
    $( document ).ready(function() {
$( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#ajax" ).autocomplete({
      source: "{{asset('daybooking/searchajax')}}"
    });
  } );});

   $( document ).ready(function() {
$( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#ajaxTo" ).autocomplete({
      // source: 'http://rentacarbd.ml/daybooking/searchajaxTo'
      source: "{{asset('daybooking/searchajaxTo')}}"

    });
  } );});
  </script>

@endsection
