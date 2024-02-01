<section class="wrapper bg-light">
	<div class="container py-14 py-md-16">
		<div class="row text-center">
			<div class="col-xl-10 mx-auto">
				<h2 class="fs-15 text-uppercase text-primary mb-3">{{ $subtitle }}</h2>
				<h3 class="display-4 mb-10 px-xxl-15">{{ $title }}</h3>
			</div>
			<!-- /column -->
		</div>
		<!-- /.row -->
		<div class="row gy-6">

      {{ $slot }}

		</div>
		<!--/.row -->
		<div class="row mt-11">
			<div class="col-lg-6 col-xl-5 mx-auto text-center">
				<a href="{{$url}}" class="btn btn-primary rounded-pill">See All</a>
			</div>
			<!-- /column -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>
<!-- /section -->