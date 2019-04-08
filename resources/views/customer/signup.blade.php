@extends('layouts.mastar')

@section('content')

      {{--
      {!! Form::open(['action' => ['CustomerController@postsignup', $carnumber,$from,$to]]) !!}
      <div class="row">
        <div class="col-lg-4 col-5">
        {!! Form::label('email', 'Email',['class' => 'btn btn-info formbtn']) !!}
      </div>
      <div class="col-lg-6 col-7">
        {!! Form::email('email', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('email'))
          <span class="help-block" style="color:red">{!! $errors->first('email') !!}</span> <br>
        @endif
        <div class="row">
        <div class="col-lg-4 col-5">
        {!! Form::label('name', 'Name',['class' => 'btn btn-info formbtn']) !!} </div>
        <div class="col-lg-6 col-7">
        {!! Form::text('name', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('name'))
          <span class="help-block" style="color:red">{!! $errors->first('name') !!}</span> <br>
        @endif


        <div class="row">
        <div class="col-lg-4 col-5">
        {!! Form::label('password', 'Password',['class' => 'btn btn-info formbtn']) !!} </div>
        <div class="col-lg-6 col-7">
        {!! Form::text('password', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('password'))
          <span class="help-block" style="color:red">{!! $errors->first('password') !!}</span> <br>
        @endif <br>

        {!! Form::token()!!}
        <div class="row">
        <div class="col-lg-10 col-12">
        {!! Form::submit('Sign Up', ['class' => 'btn btn-block btn-info']) !!}
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
        <p class="font-weight-bold text-muted text-center display-5">Please Sign Up</p>
      </div>
      <div class="card-body bg-light">
        {!! Form::open(['action' => ['CustomerController@postsignup', $carnumber,$from,$to], 'data-parsley-validate'=>'']) !!}
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
            <a href="#" class="btn btn-primary btn-block font-weight-bold">REGISTER WITH FACEBOOK</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
            <a href="#" class="btn btn-danger btn-block font-weight-bold">REGISTER WITH GOOGLE+</a>
            </div>
        </div>
        <p class="text-center font-weight-bold text-secondary">OR</p>
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Email</label> --}}
              <input class="form-control form-control-lg" name="email" required='' placeholder="Your email" type="text">
            </div>
        </div>
        @if ($errors->has('email'))
          <span class="help-block" style="color:red">{!! $errors->first('email') !!}</span>
        @endif
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Email</label> --}}
              <input class="form-control form-control-lg" name="name" required='' placeholder="Your Name" type="text">
            </div>
        </div>
        @if ($errors->has('name'))
          <span class="help-block" style="color:red">{!! $errors->first('name') !!}</span>
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
              {!! Form::submit('Sign Up', ['class' => 'btn btn-outline-primary btn-block']) !!}
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
