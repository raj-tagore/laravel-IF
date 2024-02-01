@component('components.app')



  @include('components.header')
  @include('components.pageheading', ['title'=>'Requirements', 'subtitle'=>'Requirements listed here'])

  @component('components.smalltiles-notitle')
    @foreach($requirements as $req)
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