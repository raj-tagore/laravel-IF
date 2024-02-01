@component('components.app')

  @include('components.header')
  @component('components.pageheading')
  @slot('title')
      {{ $dia->name }}
  @endslot
  @slot('subtitle')
      Hover mouse on diagram and scroll to view
  @endslot
  @endcomponent

  
  <div class="row justify-content-center align-content-center">
      <div class="col-md-6 pb-17">
        <div class="container justify-content-center">
          <iframe class="justify-content-center" frameborder="1" style="width:500px;height:500px;" src="https://admin.indiafasteners.com/{{$dia->html}}" allowfullscreen></iframe>
        </div>
      </div>
  </div>



@endcomponent