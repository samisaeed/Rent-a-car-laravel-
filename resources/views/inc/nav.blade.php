<nav class="navbar navbar-expand-sm navbar-dark fixed-top">
    <div class="container">
      <a href="/" class="navbar-brand">RentACarBD</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="/" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#explore-head-section" class="nav-link">Explore</a>
          </li>
          <li class="nav-item">
            <a href="#create-head-section" class="nav-link">Create</a>
          </li>
          <li class="nav-item">
            <a href="#share-head-section" class="nav-link">Share</a>
          </li>
          @if (Auth::check())
            <li class="nav-item ml-auto">
              <a href="/logout" class="nav-link btn btn-md btn-primary text-white ml-md-5" style="opacity:0.9">COMPANY LOG OUT</a>
            </li>
          @elseif (Auth::guard('customers')->check())
            <li class="nav-item">
              <a href="/customerlogout" class="nav-link btn btn-md btn-primary text-white ml-md-5" style="opacity:0.9">CUSTOMER LOG OUT</a>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
