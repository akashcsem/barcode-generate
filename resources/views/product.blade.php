<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Generate Barcode</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style media="screen">
      .row {
        margin: 0px;
      }
    </style>
  </head>
  <body>

    <div class="container">
      <h1 class="text-center bg-primary text-light">Products Barcode</h1>
      <div class="row my-5">

        @foreach ($products as $key => $product)
          <div class="col-md-2">
              <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG('11', 'C39')}}" alt="">

              {{-- {!! DNS1D::getBarcodeHTML($product->barcode, 'C128A', 2, 80, 'red') !!} --}}
              {{-- {!! DNS1D::getBarcodeHTML($product->barcode, 'C128A') !!} --}}
              <p>{{ $key+1 }}. {{ $product->name }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </body>
</html>
