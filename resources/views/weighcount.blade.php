@component('components.app')



  @include('components.header')
  @include('components.pageheading', ['title'=>'Weigh Counts', 'subtitle'=>'Select an appropriate option'])

  @component('components.list')
    @slot('inch')
      <h3 class="mb-4">Inch</h3>
      @foreach($inchvalues as $key => $val)
        <a href="dialist{{$val}}" class="card mb-4 lift">
          <div class="card-body p-5">
            <span class="row justify-content-between align-items-center">
              <span class="col-md-10 mb-2 mb-md-0 d-flex align-items-center text-body">
                <span class="avatar bg-red text-white w-9 h-9 fs-17 me-3">{{$loop->index}}</span> {{$key}} </span>
              <span class="d-none d-lg-block col-1 text-center text-body">
                <i class="uil uil-angle-right-b"></i>
              </span>
            </span>
          </div>
          <!-- /.card-body -->
        </a>
      @endforeach
    @endslot
    @slot('metric')
      <h3 class="mb-4">Metric</h3>
      @foreach($metricvalues as $key => $val)
        <a href="dialist{{$val}}" class="card mb-4 lift">
          <div class="card-body p-5">
            <span class="row justify-content-between align-items-center">
              <span class="col-md-10 mb-2 mb-md-0 d-flex align-items-center text-body">
                <span class="avatar bg-blue text-white w-9 h-9 fs-17 me-3">{{$loop->index}}</span> {{$key}} </span>
              <span class="d-none d-lg-block col-1 text-center text-body">
                <i class="uil uil-angle-right-b"></i>
              </span>
            </span>
          </div>
          <!-- /.card-body -->
        </a>
      @endforeach
    @endslot
  @endcomponent



@endcomponent