@component('components.app')



  @include('components.header')
  @include('components.pageheading', ['title'=>'Businesses', 'subtitle'=>'Businesses listed here'])
  @component('components.bigtiles-notitle')
    @foreach($businesses as $business) 
        <div class="col-md-6 col-xl-3">
            <div class="card">
            <div class="card-body">
                <img style="height:100px;" src="http://admin.indiafasteners.com/{{$business->company_logo}}">
                <h4>{{$business->company_name}}</h4>
                <a href="{{$business->company_website}}" class="more hover link-primary">Learn More</a>
            </div>
            <!--/.card-body -->
            </div>
            <!--/.card -->
        </div>
    @endforeach
  @endcomponent


@endcomponent