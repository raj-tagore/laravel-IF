<section class="wrapper bg-light">
    <div class="container py-14 pt-md-17 pb-md-5">
      <div class="row text-center">
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
          <h2 class="fs-15 text-uppercase text-primary mb-3">{{$subtitle}}</h2>
          <h3 class="display-4 mb-10 px-xl-10">{{$title}}</h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="position-relative">
        <div class="shape rounded-circle bg-soft-primary rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.5rem; z-index: 0;"></div>
        <div class="shape bg-dot primary rellax w-16 h-10" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
        <div class="row gx-md-5 gy-5 text-center">
  
          {{ $slot }}
  
          <!--/column -->
        </div>
        {{-- button --}}
        <div class="row mt-11">
          <div class="col-lg-6 col-xl-5 mx-auto text-center">
            <a href="{{$url}}" class="btn btn-primary rounded-pill">See All</a>
          </div>
          <!-- /column -->
        </div>
  
        <!--/.row -->
      </div>
    </div>
    <!-- /.container -->
</section>