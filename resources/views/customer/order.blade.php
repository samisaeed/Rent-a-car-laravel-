@extends('layouts.mastar')

@section('content')

  {{-- <div class="row">
    <div class="col-lg-5 col-12" style="width:1000px; margin:0 auto; margin-top:100px;" >
      <div class="">
        <h3>Order {{$carnumber}} </h3> <hr>
        @include('inc.messages')
      </div>

      {!! Form::open(['action' => ['OrderController@postorder', $carnumber]]) !!}
      <div class="row">
        <div class="col-lg-4 col-4">
        {!! Form::label('email', 'Email',['class' => 'btn btn-info formbtn']) !!}
      </div>
      <div class="col-lg-6 col-6">
        {!! Form::email('email', Auth::guard('customers')->user()->email, ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('email'))
          <span class="help-block" style="color:red">{!! $errors->first('email') !!}</span> <br>
        @endif
        <div class="row">
          <div class="col-lg-4 col-4">
          {!! Form::label('from', 'From',['class' => 'btn btn-info formbtn']) !!}
        </div>
        <div class="col-lg-6 col-6">
          {!! Form::text('from', $from, ['class' => 'form-control'])!!}
        </div> </div>

        <div class="row">
          <div class="col-lg-4 col-4">
          {!! Form::label('to', 'To',['class' => 'btn btn-info formbtn']) !!}
        </div>
        <div class="col-lg-6 col-6">
          {!! Form::text('to', $to, ['class' => 'form-control'])!!}
        </div> </div>
        <div class="row">
          <div class="col-lg-4 col-4">
          {!! Form::label('date', 'Date',['class' => 'btn btn-info formbtn']) !!}
        </div>
        <div class="col-lg-6 col-6">
          {!! Form::date('date', '', ['class' => 'form-control'])!!}
        </div> </div>
        <div class="row">
          <div class="col-lg-4 col-4">
          {!! Form::label('releasedate', 'ReleaseDate',['class' => 'btn btn-info formbtn']) !!}
        </div>
        <div class="col-lg-6 col-6">
          {!! Form::date('releasedate', '', ['class' => 'form-control'])!!}
        </div> </div>
        <div class="row">
        <div class="col-lg-4 col-4">
        {!! Form::label('pickupAddress', 'PickUp address',['class' => 'btn btn-info formbtn']) !!} </div>
        <div class="col-lg-6 col-6">
        {!! Form::textarea('pickupAddress', '', ['class' => 'form-control'])!!}
      </div> </div>

        @if ($errors->has('pickupAddress'))
          <span class="help-block" style="color:red">{!! $errors->first('pickupAddress') !!}</span> <br>
        @endif

        <div class="row">
        <div class="col-lg-4 col-4">
        {!! Form::label('pickupTime', 'PickUp Time',['class' => 'btn btn-info formbtn']) !!} </div>
        <div class="col-lg-6 col-6">
        {!! Form::text('pickupTime', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('pickupTime'))
          <span class="help-block" style="color:red">{!! $errors->first('pickupTime') !!}</span> <br>
        @endif


        {!! Form::token()!!}
        <div class="row">
        <div class="col-lg-10 col-10">
        {!! Form::submit('Order Now', ['class' => 'btn btn-block btn-info']) !!}
      </div></div>


      {!! Form::close() !!}

  </div>

</div> --}}

<div class="row no-container">
  <div class="col-md-12 pb-5">
    @include('inc.navdark') <br> <br> <br><br>

  </div>
</div>
<div class="row offset-md-1 no-container">

</div>

<div class="row justify-content-center no-container">
<div class="col-md-6">
  <div class="card">
    <div class="card-header bg-faded">
      <p class="font-weight-bold text-muted text-center display-5">Please Sign In</p>
    </div>
    <div class="card-body bg-light">
      {!! Form::open(['action' => ['OrderController@postorder', $carnumber], 'data-parsley-validate'=>'']) !!}

      @if (session('success'))
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
            <a href="#" class="btn btn-primary btn-block font-weight-bold text-white">@include('inc.messages')</a>
            </div>
        </div>
      @endif
      <div class="col-sm-12 col-md-12">
        <div class="form-group">
          <a href="#" class="btn btn-danger btn-block font-weight-bold">Order car {{$carnumber}}</a>
          </div>
      </div>

      <div class="col-sm-12 col-md-12">
        <div class="form-group">
            {{-- <label>Email</label> --}}
            <input class="form-control form-control-lg" name="email" required='' placeholder="Your email" type="email" value="{{Auth::guard('customers')->user()->email}}">
          </div>
      </div>
      <div class="col-sm-12 col-md-12">
        <div class="form-group">
            {{-- <label>Email</label> --}}
            <input class="form-control form-control-lg" name="from" value="{{$from}}" required='' placeholder="Your Name" type="text">
          </div>
      </div>

      <div class="col-sm-12 col-md-12">
        <div class="form-group">
            {{-- <label>Password</label> --}}
            <input class="form-control form-control-lg" name="to" value="{{$to}}" required='' placeholder="Password" type="text">
          </div>
      </div>
      <div class="col-sm-12 col-md-12">
        <div class="form-group">
            {{-- <label>Password</label> --}}
            <input class="form-control form-control-lg" name="date"  required=''  type="date">
          </div>
      </div>
      <div class="col-sm-12 col-md-12">
        <div class="form-group">
            {{-- <label>Password</label> --}}
            <input class="form-control form-control-lg" name="releasedate"  required=''  type="date">
          </div>
      </div>
      <div class="col-sm-12 col-md-12">
        <div class="form-group">
            {{-- <label>Password</label> --}}
            <input class="form-control form-control-lg" name="pickupTime"  required=''  type="time">
          </div>
      </div>
      <div class="col-sm-12 col-md-12">
        <div class="form-group">
            {{-- <label>Password</label> --}}
            <textarea name="pickupAddress" rows="8" cols="80" required=''></textarea>
          </div>
      </div>

      <div class="col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::submit('Order Car', ['class' => 'btn btn-outline-primary btn-block']) !!}
          </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
