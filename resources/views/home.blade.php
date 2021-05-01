<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <style>
    body {
      background: rgb(10, 193, 162);
      background: linear-gradient(90deg, rgba(10, 193, 162, 1) 0%, rgba(5, 105, 85, 1) 68%);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center left;
    }

    .zoom-form {
      width: 30%;
      margin: 15% auto;
    }

    .zoom-form h3 {
      text-align: center;
    }

    .zoom-form .form label {
      margin-top: 0.5rem;
      font-weight: 600;
    }

    .zoom-form .form .btn {
      background: linear-gradient(to right, #2bbba0, #11705c);
      width: 100%;
      margin-top: 1.5rem;
    }

    .zoom-form .form .btn:focus {
      color: #fff;
      background-color: linear-gradient(to right, #2bbba0, #11705c);
      border-color: #2bbba0;
      box-shadow: 0 0 0 0.25rem rgb(49 132 253 / 50%);
    }

    .logo-top {
      position: absolute !important;
      top: 60px !important;
      left: 50% !important;

      -ms-transform: translateX(-50%) translateY(-50%);
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      overflow: hidden;
    }

    .logo-bottom {
      position: absolute !important;
      bottom: 0 !important;
      left: 50% !important;
      -ms-transform: translateX(-50%) translateY(-50%);
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      overflow: hidden;
    }

  </style>
</head>

<body style="background-image: url({{ asset('img/bg-2.jpg') }})">
  <div class="logo-top">
    <img src="{{ asset('img/logo-1.png') }}" width="400px" alt="">
  </div>
  <div class="logo-bottom">
    <img src="{{ asset('img/logo-2.png') }}" width="400px" alt="">
  </div>
  <div class="zoom-form">
    <div class="card">
      <div class="card-header">
        <h3>Wellcome to our meeting</h3>
      </div>
      <div class="card-body">
        <form class="form" action="{{ route('meeting') }}" method="POST">
          @csrf
          <div1 class="form-group">
            <label for="inputName">Your Name</label>
            <input type="text" class="form-control" name="username" required id="inputName">
          </div1>

          <div class="form-group">
            <label for="inputEmail">Email address</label>
            <input type="email" class="form-control" name="email" required id="inputEmail">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
</body>

</html>
