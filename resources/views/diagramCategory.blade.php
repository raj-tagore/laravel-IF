@component('components.app')



  @include('components.header')
  @component('components.pageheading')
    @slot('title')
        {{ $categoryname }}
    @endslot
    @slot('subtitle')
        View the available diagrams related to  {{$categoryname}}
    @endslot
  @endcomponent

  @component('components.bigtiles-notitle')
    @foreach($diagrams as $d) 
      <div class="col-md-6 col-xl-4">
        <div class="card">
          <div class="card-body">
            <h4>{{$d->name}}</h4>
            <a href="diaunit{{$d->id}}" class="mt-7 btn btn-purple rounded-pill">View Diagram in Detail</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
    @endforeach  
  @endcomponent 

  

@endcomponent