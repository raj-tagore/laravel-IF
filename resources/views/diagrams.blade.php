@component('components.app')



  @include('components.header')
  @include('components.pageheading', ['title'=>'Diagrams', 'subtitle'=>'Diagrams listed here'])

  @component('components.smalltiles-notitle')
  	@foreach($categories as $cat)
		@if($loop->index<6)
			<div class="col-md-6 col-lg-4">
				<a href="/diagram{{$cat->id}}" class="card shadow-lg lift h-100">
					<div class="card-body p-5 d-flex flex-row">
						<div>
							<span class="badge bg-pale-blue text-blue rounded py-1 mb-2">Click to view</span>
							<h4 class="mb-1">{{$cat->name}}</h4>
							<p class="mb-0 text-body"></p>
						</div>
					</div>
				</a>
			</div>
		@else
			<div class="col-md-6 col-lg-4">
				<a href="https://play.google.com/store/apps/details?id=com.indiafastener" class="card shadow-lg lift h-100">
					<div class="card-body p-5 d-flex flex-row">
						<div>
							<span class="badge bg-pale-red text-red rounded py-1 mb-2">Download app to unlock!</span>
							<h4 class="mb-1">{{$cat->name}}</h4>
							<p class="mb-0 text-body"></p>
						</div>
					</div>
				</a>
			</div>
		@endif
	@endforeach
  @endcomponent


@endcomponent