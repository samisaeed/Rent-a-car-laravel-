@extends('layouts.mastar')
@include('inc.nav')

@section('content')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" /> --}}
<link rel="stylesheet" href="{{asset('css/jquery-ui.mins.css')}}">
<script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>

    <header id="home-section">
      <div class="dark-overlay">
        <div class="home-inner">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 align-self-center">
                <h1 class="display-4 text-white">Build <strong>social profiles</strong> and gain revenue and <strong>profits</strong></h1>

                <a href="/companysign" target="_blank" class=" text-white btn btn-primary btn-md form-control-lg mt-3 mb-3" style="opacity:0.9">Car Company ??</a>
              </div>
              <div class="col-lg-4">
                <div class="card bg-primary text-center card-form">
                  <div class="card-body">
                    <h3 class="text-white">Find Your Car</h3>
                    @if ($error)
                        @if ($availableTypes->isEmpty())
                          <p class="text-danger font-weight-bold">
                            Service of this location is currently unavailable.
                          </p>

                        @else
                          <p class="text-danger font-weight-bold">{{$error}}</p>


                        <p class="text-danger font-weight-bold">
                          Please try
                            @foreach ($availableTypes as $types)
                              {{$types->type}},
                            @endforeach </p>
                         @endif

                    @else
                      <p class="text-white">Let us know from where will you start and what's your destination !!</p>
                    @endif
                    <form action= "searchcar" method="get" data-parsley-validate="">
                      <div class="form-group">
                        {{-- <input type="text" name="from" id="from" class="form-control form-control-lg" placeholder="from"> --}}
                        <select class="form-control form-control-lg" name="from" required="">
                          <option value="">Start From </option>
                          <option value="">------------------------------------</option>

                          @foreach ($locations as $location)
                            <option value="{{$location->from}}">{{$location->from}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        {{-- <input type="text"  name="to" id="ajaxTo" class="form-control form-control-lg" placeholder="to"> --}}
                        <select class="form-control form-control-lg" name="to" required="">
                          <option value="">End to </option>
                          <option value="">------------------------------------</option>

                          @foreach ($locations as $location)

                            <option value="{{$location->to}}">{{$location->to}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control form-control-lg" name="type" required="">
                          <option value="car">Car</option>
                          <option value="micro">Micro</option>
                          <option value="bike">Bike</option>
                          <option value="mini-bus">Mini-bus</option>

                        </select>
                      </div>

                      <input type="submit" class="btn btn-outline-light btn-block">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>








{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> --}}

@endsection
