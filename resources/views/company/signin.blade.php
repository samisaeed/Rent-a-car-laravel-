



{{--

  <div class="row formmargin">
    <div class="col-lg-5 col-12 "  style="width:1000px; margin:0 auto; margin-top:100px;" >
      <div class="">
        <h3>Get Signed in here</h3> <hr>
      </div>

      {!! Form::open(['action' => 'CompanyController@getsignin']) !!}
      <div class="row">
        <div class="col-lg-4 col-5">
        {!! Form::label('email', 'Email', ['class' => 'btn btn-info formbtn']) !!}
      </div>
        <div class="col-lg-6 col-7">
        {!! Form::email('email', '', ['class' => 'form-control'])!!}
      </div></div>
        @if ($errors->has('email'))
          <span class="help-block" style="color:red">{!! $errors->first('email') !!}</span> <br>
        @endif
        <div class="row">
          <div class="col-lg-4 col-5">
        {!! Form::label('password', 'Password',['class' => 'btn btn-info formbtn']) !!}
      </div>
      <div class="col-lg-6 col-7">
        {!! Form::text('password', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('password'))
          <span class="help-block" style="color:red">{!! $errors->first('password') !!}</span> <br>
        @endif <br>
        <div class="row">
          <div class="col-lg-6 col-7">

          </div>
          <div class="col-lg-4 col-5" style="margin-top:-15px;margin-bottom:15px;">
        {!! Form::submit('Sign in', ['class' => 'btn btn-block btn-info']) !!}
      </div> </div>
      <div class="row" style="margin-bottom:15px">
        <div class="col-lg-10 col-12">
        <a href="#" class="btn btn-block btn-info">not registered??</a>
        </div>
   </div>
   <div class="row">
     <div class="col-lg-10 col-12">
     <a href="/companysignup" class="btn btn-block btn-info">get registered here !!</a>
     </div>
</div>


      {!! Form::close() !!}


  </div>

</div> --}}
@extends('layouts.mastar')

@section('content')
  <div class="row no-container">
    <div class="col-md-12 pb-5">
      @include('inc.navdark') <br> <br> <br><br>

    </div>
  </div>
  <div class="row offset-md-1 no-container">

  </div>

<div class="row justify-content-center no-container">
  <div class="col-md-6">
    @if (session('error'))
      <div class="card card-header">
        @include('inc.messages')
      </div>
    @endif

    <div class="card">
      <div class="card-header bg-faded">
        <p class="font-weight-bold text-muted text-center display-5">Please Sign In</p>
      </div>
      <div class="card-body bg-light">
        {!! Form::open(['action' => 'CompanyController@getsignin', 'data-parsley-validate'=>'']) !!}

        <div class="col-sm-12 col-md-12">
          <div class="form-group">
            <a href="#" class="btn btn-primary btn-block font-weight-bold">LOG-IN WITH FACEBOOK</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
            <a href="#" class="btn btn-danger btn-block font-weight-bold">LOG-IN WITH GOOGLE+</a>
            </div>
        </div>
        <p class="text-center font-weight-bold text-secondary">OR</p>
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Email</label> --}}
              <input class="form-control form-control-lg" name="email"required='' placeholder="Your email" type="text">
            </div>
        </div>
        @if ($errors->has('email'))
          <span class="help-block" style="color:red">{!! $errors->first('email') !!}</span>
        @endif

        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Password</label> --}}
              <input class="form-control form-control-lg" name="password" required='' placeholder="Password" type="password">
            </div>
        </div>
        @if ($errors->has('password'))
          <span class="help-block" style="color:red">{!! $errors->first('password') !!}</span>
        @endif

        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {!! Form::submit('Sign In', ['class' => 'btn btn-outline-primary btn-block']) !!}
          </div>
        </div>
        {!! Form::close() !!}

        <div class="col-sm-12 col-md-12">
          <div class="form-group">
            <a href="/companysignup" class="btn btn-block btn-info">Not registered?? !!</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
