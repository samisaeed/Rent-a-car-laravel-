@extends('layouts.mastar')

@section('content')

  {{-- <div class="row formmargin">
    <div class="col-lg-5 col-12 " style="width:1000px; margin:0 auto; margin-top:100px;" >
      <div class="">
        <h3>Add new car here</h3> <hr>
      </div>

      {!! Form::open(['action' => ['CompanyController@postnewlocation',  $company->id, $company->companyname]]) !!}
      <div class="row">
        <div class="col-lg-10 col-12">
          @include('inc.messages')
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-5">
        {!! Form::label('from', 'From', ['class' => 'btn btn-info formbtn']) !!}
      </div>
        <div class="col-lg-6 col-7">
        {!! Form::text('from', '', ['class' => 'form-control'])!!}
      </div></div>
        @if ($errors->has('from'))
          <span class="help-block" style="color:red">{!! $errors->first('from') !!}</span> <br>
        @endif
        <div class="row">
          <div class="col-lg-4 col-5">
        {!! Form::label('to', 'To',['class' => 'btn btn-info formbtn']) !!}
      </div>
      <div class="col-lg-6 col-7">
        {!! Form::text('to', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('to'))
          <span class="help-block" style="color:red">{!! $errors->first('to') !!}</span> <br>
        @endif <br>
        <div class="row">
          <div class="col-lg-4 col-5">
        {!! Form::label('cost', 'Cost',['class' => 'btn btn-info formbtn']) !!}
      </div>
      <div class="col-lg-6 col-7">
        {!! Form::text('cost', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('cost'))
          <span class="help-block" style="color:red">{!! $errors->first('cost') !!}</span> <br>
        @endif <br>




        <div class="row">

          <div class="col-lg-10 col-12" style="margin-top:-15px;margin-bottom:15px;">
        {!! Form::submit('Add Location', ['class' => 'btn btn-block btn-info']) !!}
      </div> </div>


      {!! Form::close() !!}


  </div>

</div> --}}


  <div class="row no-container">
    <div class="col-md-12 pb-5">
      @include('inc.navdark') <br> <br> <br><br>

    </div>
  </div>
  <div class="row offset-md-1no-container">

  </div>

<div class="row justify-content-center no-container">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header bg-faded">
        <p class="font-weight-bold text-muted text-center display-5">Add new location</p>
      </div>
      <div class="card-body bg-light">
        {!! Form::open(['action' => ['CompanyController@postnewlocation',  $company->id, $company->companyname], 'data-parsley-validate'=>'']) !!}
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
              <input class="form-control form-control-lg" name="from" required='' placeholder="From" type="text">
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Email</label> --}}
              <input class="form-control form-control-lg" name="to" required='' placeholder="To" type="text">
            </div>
        </div>

        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Password</label> --}}
              <input class="form-control form-control-lg" name="cost" required='' placeholder="Location Cost" type="text">
            </div>
        </div>



        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {!! Form::submit('Add Location', ['class' => 'btn btn-outline-primary btn-block']) !!}
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
