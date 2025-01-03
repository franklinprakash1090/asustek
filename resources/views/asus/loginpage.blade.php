<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark" id="navbar";>
    <div class="container-fluid">
      <img src="pngegg.png" alt="" width="30" height="24">
      <a class="navbar-brand" href="home.html">Rog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="registration.html">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="loginpage_0.html">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="product.html">product</a>
          </li>


        </ul>
      </div>
  </nav>

  <div class="container">
    <form>
      <h1>login</h1>
      <div class="mb-3">
        <label for="input-username" class="form-label">Username</label>
        <input type="username" class="form-control" id="input-username1" aria-describedby="usernamehelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <input type="checkbox" class="form-check-input" id="exampleinput1">
        <label class="form-check-label" for="example check1">check me out</label>
      </div>
      <div class="remember-forgot">
        <label>
          <input type="checkbox">
          Remember me
        </label>
        <a href="#"> Forgot Password?</a>
      </div>
      <div class="register-link">
        <p>Don't have an account? <a href="#">Register</a></p>
      </div>
      <center>
        <button type="submit" class="btn btn-primary">submit</button>
      </center>

  </div>
  </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>
