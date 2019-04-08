@extends('layouts.mastar')

@section('content')
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/" class="fa fa-home"></a>

    <a href="#" class="fa fa-search"></a>
    <a href="#"class="fa fa-envelope"></a>
    <a href="#" class="fa fa-globe"></a>
    <a href="#" class="fa fa-trash"></a>

  </div>

  <div id="main" class="jumbotron">
    <span style="font-size:30px;cursor:pointer; color:#ffff; width:150px;" onclick="openNav()">&#9776; </span>
    <div class="heading">
      <center>
      <h1>Rent A Car</h1>
      <p>Sign In here
  </p>
  </center>
    </div>
    <div class="logout" style="margin-left:1200px;margin-top:-180px;">
      @if (Auth::guard('customers')->check())
        <a href="/customerlogout" class="btn btn-md btn-info">Log Out</a>
      @endif
    </div>
  </div>





  <div class="row formmargin">
    <div class="col-lg-5 col-12" style="width:1000px; margin:0 auto; margin-top:100px;" >
      <div class="">
        <h3>Send mail to {{$email}}</h3> <hr>
        @include('inc.messages')
      </div>

      {!! Form::open(['action' => ['CompanyController@sendemail', $carnumber,$email]]) !!}
      <div class="row">
        <div class="col-lg-4 col-5">
        {!! Form::label('email', 'Email', ['class' => 'btn btn-info formbtn']) !!}
      </div>
        <div class="col-lg-6 col-7">
        {!! Form::email('email', $email, ['class' => 'form-control'])!!}
      </div></div>
        @if ($errors->has('email'))
          <span class="help-block" style="color:red">{!! $errors->first('email') !!}</span> <br>
        @endif
        <div class="row">
          <div class="col-lg-4 col-5">
        {!! Form::label('subject', 'subject',['class' => 'btn btn-info formbtn']) !!}
      </div>
      <div class="col-lg-6 col-7">
        {!! Form::text('subject', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('subject'))
          <span class="help-block" style="color:red">{!! $errors->first('subject') !!}</span> <br>
        @endif <br>
        <div class="row">
          <div class="col-lg-4 col-5">
        {!! Form::label('message', 'message',['class' => 'btn btn-info formbtn']) !!}
      </div>
      <div class="col-lg-6 col-7">
        {!! Form::textarea('message', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('message'))
          <span class="help-block" style="color:red">{!! $errors->first('message') !!}</span> <br>
        @endif <br>
        <div class="row">
          <div class="col-lg-6 col-7">

          </div>
          <div class="col-lg-10 col-12" style="margin-top:-15px;margin-bottom:15px;">
        {!! Form::submit('Send Mail', ['class' => 'btn btn-block btn-info']) !!}
      </div> </div>

</div>


      {!! Form::close() !!}


  </div>

</div>
@endsection
