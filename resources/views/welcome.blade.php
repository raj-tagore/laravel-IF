@component('components.app')



  @include('components.header')
  @include('components.hero')

  @component('components.bigtiles', ['title'=>'Businesses', 'subtitle'=>'Businesses listed here', 'url'=>'businesses'])
    @foreach($sliced_businesses as $business) 
      <div class="col-md-6 col-xl-3">
        <div class="card">
          <div class="card-body">
            <div class="icon btn-lg btn-primary pe-none mb-3"><img class="w-50" src="http://admin.indiafasteners.com/{{$business->company_logo}}"></div>
            <h4>{{$business->company_name}}</h4>
            {{-- <p class="mb-2">{{$business->head_office_address}}, {{$business->city}}, {{$business->pincode}}</p>
            <p class="mb-2"><strong>Tel:</strong> {{$business->company_phone_no}},<br> {{$business->company_email}}</p> --}}
            <a href="{{$business->company_website}}" class="more hover link-primary">Learn More</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
    @endforeach
  @endcomponent

  @component('components.smalltiles', ['title'=>'Requirements', 'subtitle'=>'Requirements listed here', 'url'=>'requirements'])
    @foreach($sliced_requirements as $req)
      <div class="col-md-6 col-lg-4">
        <a href="#" class="card shadow-lg lift h-100">
            <div class="card-body p-5 d-flex flex-row">
                <div>
                    <span class="badge bg-pale-blue text-blue rounded py-1 mb-2">{{$req->name}}</span>
                    <h4 class="mb-1">{{$req->product_name}}</h4>                        
                    <p class="mb-0 text-primary"><Strong>Description: </Strong>{{$req->product_description}}</p>
                    <p class="mb-0 text-danger"><Strong>Quantity: </Strong>{{$req->qty}}</p>
                </div>
            </div>
        </a>
      </div>
    @endforeach    
  @endcomponent



@endcomponent