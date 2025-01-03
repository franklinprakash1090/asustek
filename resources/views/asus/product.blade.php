<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
</head>


<body>
  <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
    <div class="container-fluid">
      <img src="pngegg.png" alt="" width="30" height="24">
      <a class="navbar-brand" href="#">ROG</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="registration.html">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="loginpage_0.html">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.html">products</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  <section id="product">
    <div class="container m-5">
      <h1 class="text-center my-5">OUR PRODUCTS</h1>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width: 18rem;">
            <img src="product.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>
          <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width: 18rem;">
            <img src="product2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width: 18rem;">
            <img src="product3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
          </div>
          <div class="col-lg-3 col-md-3 col-12">
          <div class="card" style="width: 18rem;">
            <img src="product4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">ASUS ROG Ally</h5>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>



</body>

</html>
