@extends('layouts.mastar')

@section('content')
  {{-- <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/" class="fa fa-home"></a>

    <a href="#" class="fa fa-search"></a>
    <a href="#"class="fa fa-envelope"></a>
    <a href="#" class="fa fa-globe"></a>
    <a href="#" class="fa fa-trash"></a>
    <a class="logout">
      @if (Auth::check())
        <a href="/logout" class="fa fa-sign-out"></a>
      @endif
    </a>
  </div>

  <div id="main" class="jumbotron">
    <span style="font-size:30px;cursor:pointer; color:#ffff; width:150px;" onclick="openNav()">&#9776; </span>

    <div class="heading">
      <center>
      <h1>Rent A Car</h1>
      <p>Dashboard</p>
  </center>
    </div> --}}


      {{-- <div class="logout" style="margin-left:1200px;margin-top:-180px;">
        @if (Auth::check())
          <a href="/logout" class="btn btn-md btn-info">Log Out</a>
        @endif
      </div> --}}







  {{-- <div class="row">
     <div class="col-lg-6">

     </div>
     <div class="col-lg-6 col-12">
       <div class="row">
         <div class="col-lg-4 col-4">
           <a href="/addnewcar/{{$company->id}}/{{$company->companyname}}" class="btn profilebtn bg-danger" id="">Add new car</a>

         </div>
         <div class="col-lg-4 col-4">
           <a href="/addnewlocation/{{$company->id}}/{{$company->companyname}}" class="btn profilebtn bg-secondary" id="">Add new location</a>

         </div>

       </div>
       <div class="row">
         <div class="col-lg-4 col-4">
              <a href="/checkorders/{{$company->id}}" class="btn profilebtn bg-primary" id="">Check Orders ({{$orders}})</a>
         </div>
         <div class="col-lg-4 col-4">

           <a href="/bookedcars/{{$company->id}}" class="btn profilebtn bg-success" id="">Booked Cars({{$book }})</a>
         </div>

       </div>
       <div class="row">
         <div class="col-lg-4 col-4">
           <a href="/addnewcar" class="btn profilebtn bg-info" id="">Add new car</a>

         </div>
         <div class="col-lg-4 col-4">
           <a href="/addnewcar" class="btn profilebtn bg-warning" id="">Add new car</a>
         </div>

       </div>

     </div>

  </div> --}}
  <div class="row no-container">
    <div class="col-md-12 pb-5">
      @include('inc.navdark')

    </div>
  </div>
  <div class="row offset-md-1 no-container">

  </div>

  <div class="row mt-5 no-container justify-content-center no-container">
   	 <div class="col-md-4 align-self-center">
     	 	<div class="container">

     	 		{{-- <img src="img/26828374_969594433192697_1787058789_o_Fotor_Fotor.jpg" class="img-fluid"> --}}
          <h3 class="text-muted font-weight-bold"> Company Dahboard</h3>
     	 	</div>


   	 </div>
     <div class="col-md-4 align-self-center ">

            <h3 class="heading mb-3">{{$company->companyname}}</h3>
            <div class="container">
              <p class="location"><i class="fa fa-map-marker"></i> {{$company->location}}
              </p>
               <p class="block"><i class="fa fa-phone"></i>{{ $company->phoneNumber}}</p>
               <p class="block"><i class="fa fa-envelope"></i> {{$company->email}}</p>
            </div>
     </div>

   </div>
   <div class="row no-container justify-content-center  mt-5">
     <div class="col-md-8">
       <div class="row no-container justify-content-between">
         <div class="col-md-4 companyProfile">
            <a href="/checkorders/{{$company->id}}" target="_blank">
              <div class="card">
                   <div class="card-header">
                     <h3 class="text-center  text-muted">Check Orders</h3>
                   </div>
                   <div class="card-body bg-info">
                     <h1 class="text-white text-center">{{$orders}}</h1>
                   </div>
              </div>
            </a>
         </div>

         <div class="col-md-4 companyProfile">
          <a href="/bookedcars/{{$company->id}}" target="_blank">
           <div class="card">
             <div class="card-header">
               <h3 class="text-center text-muted">Booked Cars</h3>
             </div>
             <div class="card-body bg-danger">
               <h1 class="text-white text-center">{{$book}}</h1>
             </div>
           </div>
           </a>
         </div>
         <div class="col-md-4 companyProfile">
           <div class="card">
             <div class="card-header">
               <h3 class="text-center text-muted">Total Cars</h3>
             </div>
             <div class="card-body bg-info">
               <h1 class="text-white text-center">{{$total}}</h1>
             </div>
           </div>
         </div>

         <div class="col-md-4 companyProfile">
           <a href="/addnewcar/{{$company->id}}/{{$company->companyname}}" target="_blank">
           <div class="card">
             <div class="card-header">
               <h3 class="text-center text-muted">Add New Cars</h3>
             </div>
             <div class="card-body bg-danger">
               <h1 class="font-italic text-white">new cars to the squad</h1>
             </div>
           </div>
         </a>
         </div>
         <div class="col-md-4 companyProfile">
           <a href="/addnewlocation/{{$company->id}}/{{$company->companyname}}" target="_blank">
           <div class="card">
             <div class="card-header">
               <h3 class="text-center text-muted">Add New Location</h3>
             </div>
             <div class="card-body bg-danger">
               <h1 class="font-italic text-white">explore new location</h1>
             </div>
           </div>
           </a>
         </div>
       </div>
     </div>
   </div>




@endsection
