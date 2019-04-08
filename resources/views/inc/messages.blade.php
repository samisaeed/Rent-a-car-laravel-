@if(session('success'))

  <h5 class="text-info text-center  text-white">{{session('success')}}</h5>

@endif

@if(session('error'))

  <h5 class="text-danger text-center text-white">{{session('error')}}</h5>

@endif
