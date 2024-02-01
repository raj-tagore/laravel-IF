@component('components.app')



  @include('components.header')

  <section class="wrapper image-wrapper bg-image bg-content text-white min-vh-100" data-image-src="Sandbox/img/photos/bg4.jpg">
    <div class="container pt-18 pb-16">
        <div class="row justify-content-center">
            <div class="col-md-8 bg-white rounded-4">
                <table class="table table-hover ">
                    <tbody>
                    <tr>
                        <th scope="row">Diameter</th>
                        <td id="dia">{{$dia}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Length</th>
                        <td id="len">{{$len}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Value</th>
                        <td id="val">{{$value}}</td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-hover ">
                    <tbody>
                    <tr>
                        <th scope="row">Convert Kg/s to Pc/s</th>
                        <td><input type="number" name="kg" id="kg"></td>
                        <td>=</td>
                        <td><div class="pcval" id="pcval"></div></td>
                        <td><button class="btn-primary" onclick="calculatekg2pc()">Calculate</button></td>
                    </tr>
                    <tr>
                        <th scope="row">Convert Pc/s to Kg/s</th>
                        <td><input type="number" name="pc" id="pc"></td>
                        <td>=</td>
                        <td><div class="kgval" id="kgval"></div></td>
                        <td><button class="btn-primary" onclick="calculatepc2kg()">Calculate</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </section>

  <script>
    
    var val =  {{$value ?? 0}};    
    function calculatekg2pc() {
        let kg = document.getElementById("kg").value;
        document.getElementById("pcval").innerHTML =  (val/50)*kg;
    }

    function calculatepc2kg() {
        let pc = document.getElementById("pc").value;
        document.getElementById("kgval").innerHTML =  (50/val)*pc;
    }
    
</script>


@endcomponent