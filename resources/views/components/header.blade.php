<header class="wrapper bg-soft-primary">
    <nav class="navbar navbar-expand-lg classic transparent position-absolute navbar-dark">
      <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
          <a href="/"> 
            <img style="width:200px;" class="logo-dark p-5" src="img/logo-black.png" srcset="img/logo-black@2x.png 2x" alt="" />
            <img style="width:200px;" class="logo-light p-5" src="img/logo-white.png" srcset="img/logo-white@2x.png 2x" alt="" />
          </a>
        </div>
        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
          <div class="offcanvas-header d-lg-none">
            <h3 class="text-white fs-30 mb-0">Sandbox</h3>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
            <ul class="navbar-nav">
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Weigh Count</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a href="weighcount" class="dropdown-item">Inch</a></li>
                  <li class="nav-item"><a href="weighcount" class="dropdown-item">Metric</a></li>
                </ul>
              </li>  --}}
              <li class="nav-item"><a class="nav-link" href="weighcount">Weigh Counts</a></li>
              <li class="nav-item"><a class="nav-link" href="diagrams">Diagrams</a></li>
              <li class="nav-item"><a class="nav-link" href="businesses">Businesses</a></li>
              <li class="nav-item"><a class="nav-link" href="requirements">Requirements</a></li>
            </ul>
          </div>
        </div>
        <div class="navbar-other ms-lg-4">
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item d-none d-md-block">
              <a href="https://play.google.com/store/apps/details?id=com.indiafastener" class="btn btn-sm btn-white rounded-pill">Download the App</a>
            </li>
            @auth
            <li class="nav-item dropdown">
              <a class="btn btn-sm btn-white rounded-pill">Logged in as {{Auth::user()->first_name}}</a>
                <ul class="dropdown-menu">
                  
                  <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </li>
                  <li class="nav-item"><a class="dropdown-item" href="addbusiness">Add Your Business</a></li>  
                </ul>
            </li>
            @else
            <li class="nav-item dropdown">
              <a href="{{ route('login') }}" class="btn btn-sm btn-white rounded-pill">Login</a>
            </li>
            @endauth
          </ul>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>