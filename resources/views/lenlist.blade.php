@component('components.app')



  @include('components.header')

  <section class="wrapper image-wrapper bg-image bg-content text-white min-vh-100" data-image-src="Sandbox/img/photos/bg4.jpg">
    <div class="container pt-18 pb-16">
        <div class="row justify-content-center">
            <div class="col-md-8 bg-white rounded-4">
                <table class="table table-hover ">
                    <thead>
                    <tr class="align-middle">
                        <th scope="col">#</th>
                        <th scope="col">Length (inch)</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lenlist as $len)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$len->len}}</td> 
                        <td><a href="values!{{$tableid}}!{{$len->diaid}}!{{$len->id}}!{{$len->value}}" class="btn-primary btn border rounded-2">Select</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </section>


@endcomponent