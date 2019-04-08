
  {{-- <div class="row formmargin">
    <div class="col-lg-5 col-12 " style="width:1000px; margin:0 auto; margin-top:100px;" >
      <div class="">
        <h3>Add new car here</h3> <hr>
      </div>

      {!! Form::open(['action' => ['CompanyController@postnewcar',  $company->id, $company->companyname],'files'=>true]) !!}
      <div class="row">
        <div class="col-lg-10 col-12">
          @include('inc.messages')
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-5">
        {!! Form::label('carname', 'Car Name', ['class' => 'btn btn-info formbtn']) !!}
      </div>
        <div class="col-lg-6 col-7">
        {!! Form::text('carname', '', ['class' => 'form-control'])!!}
      </div></div>
        @if ($errors->has('carname'))
          <span class="help-block" style="color:red">{!! $errors->first('carname') !!}</span> <br>
        @endif
        <div class="row">
          <div class="col-lg-4 col-5">
        {!! Form::label('carmodel', 'Model',['class' => 'btn btn-info formbtn']) !!}
      </div>
      <div class="col-lg-6 col-7">
        {!! Form::text('carmodel', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('carmodel'))
          <span class="help-block" style="color:red">{!! $errors->first('carmodel') !!}</span> <br>
        @endif <br>
        <div class="row">
          <div class="col-lg-4 col-5">
        {!! Form::label('carnumber', 'Car Number',['class' => 'btn btn-info formbtn']) !!}
      </div>
      <div class="col-lg-6 col-7">
        {!! Form::text('carnumber', '', ['class' => 'form-control'])!!}
      </div> </div>

      @if ($errors->has('carmodel'))
        <span class="help-block" style="color:red">{!! $errors->first('carnumber') !!}</span> <br>
      @endif <br>
      <div class="row">
        <div class="col-lg-4 col-5">
      {!! Form::label('cartype', 'Car Type',['class' => 'btn btn-info formbtn']) !!}
    </div>
    <div class="col-lg-7">
      <select class="form-control" name="cartype">
        <option value="car">Car</option>
        <option value="Bus">Bus</option>
        <option value="Micro">Micro</option>

      </select>
    </div> </div> <br>
      <div class="row">
        <div class="col-lg-4 col-5">
      {!! Form::label('carimage', 'Upload Picture',['class' => 'btn btn-info formbtn']) !!}
    </div>
    <div class="col-lg-6 col-7">
      {{-- {!! Form::file('carimage', '', ['class' => 'form-control'])!!} --}}
      {{-- <input type="file" name="carimage" value="" class="form-control">
    </div> </div> <br>
        <div class="row">

          <div class="col-lg-10 col-12" style="margin-top:-15px;margin-bottom:15px;">
        {!! Form::submit('Add Car', ['class' => 'btn btn-block btn-info']) !!}
      </div> </div>


      {!! Form::close() !!}


  </div>

</div> --}}




  {{-- <div class="row formmargin">
    <div class="col-lg-5 col-12 " style="width:1000px; margin:0 auto; margin-top:100px;" >
      <div class="">
        <h3>Get Signedup here</h3> <hr>
      </div>

      {!! Form::open(['action' => 'CompanyController@storesignup']) !!}
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
        {!! Form::label('companyname', 'Company Name',['class' => 'btn btn-info formbtn']) !!} </div>
        <div class="col-lg-6 col-7">
        {!! Form::text('companyname', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('companyname'))
          <span class="help-block" style="color:red">{!! $errors->first('employee_id') !!}</span> <br>
        @endif
        <div class="row">
        <div class="col-lg-4 col-5">
        {!! Form::label('location', 'Location',['class' => 'btn btn-info formbtn']) !!} </div>
        <div class="col-lg-6 col-7">
        {!! Form::text('location', '', ['class' => 'form-control'])!!} </div> </div>
        @if ($errors->has('location'))
          <span class="help-block" style="color:red">{!! $errors->first('username') !!}</span> <br>
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
    <div class="card">
      <div class="card-header bg-faded">
        <p class="font-weight-bold text-muted text-center display-5">Add new Car to squad</p>
      </div>
      <div class="card-body bg-light">
        {!! Form::open(['action' => ['CompanyController@postnewcar',  $company->id, $company->companyname],'files'=>true, 'data-parsley-validate'=>'']) !!}
        @if (session('success'))
          <div class="col-sm-12 col-md-12">
            <div class="form-group">
              <a href="#" class="btn btn-primary btn-block font-weight-bold">@include('inc.messages')</a>
            </div>
          </div>
        @endif

        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Email</label> --}}
              <input class="form-control form-control-lg" name="carname" required='' placeholder="Car name" type="text">
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Email</label> --}}
              <input class="form-control form-control-lg" name="carmodel" required='' placeholder="Car model" type="text">
            </div>
        </div>

        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Password</label> --}}
              <input class="form-control form-control-lg" name="carnumber" required='' placeholder="Car Number" type="text">
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Password</label> --}}
              <select class="form-control" name="cartype">
                <option value="car">Car</option>
                <option value="Bus">Bus</option>
                <option value="Micro">Micro</option>

              </select>
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Password</label> --}}
              <input class="form-control form-control-lg" name="carimage" required='' placeholder="Password" type="file">
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Password</label> --}}
              <textarea name="description" rows="8" cols="80"></textarea>
            </div>
        </div>


        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {!! Form::submit('Add Car', ['class' => 'btn btn-outline-primary btn-block']) !!}
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
