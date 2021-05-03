<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dar Aldawa</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <style>
    body {
      background-color: #bec7d6;
    }

    .logo {
      text-align: center;
      padding-top: 1rem;
    }

    .logo img {
      max-height: 280px;
    }

    .timer .head {
      text-align: center
    }

    .zoom-form {
      width: 30%;
      margin: 3% auto;
    }

    .zoom-form .card {
      border: none;
    }

    .zoom-form .card-header {
      background-color: #008166;
      border-color: #008166;
      color: #fff;
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

    @media (max-width: 1200px) {
      .zoom-form {
        width: 36%;
      }
    }

    @media (min-width: 768px) and (max-width: 992px) {
      .zoom-form {
        width: 44%;
      }
    }

    @media (max-width: 768px) {
      .logo {
        padding-top: 4rem;
      }

      .zoom-form {
        width: 80%;
      }
    }

    @media (max-width: 576px) {
      .zoom-form {
        margin: 10% auto;
      }
    }

  </style>
</head>

<body>
  <div class="logo">
    <img class="img-fluid" src="{{ asset('img/dar-aldawa.png') }}" alt="dar-aldawa">
  </div>


  <div class="timer">
    <div class="head">
      <h3>Welcome to our webinar</h3>
      <p>It will be available in</p>
    </div>

    <div class="countdown">
      <!-- DIAS -->
      <div class="bloc-time days" data-init-value="7">
        <span class="count-title">Days</span>

        <div class="figure days days-1">
          <span class="top">9</span>
          <span class="top-back">
            <span>9</span>
          </span>
          <span class="bottom">9</span>
          <span class="bottom-back">
            <span>9</span>
          </span>
        </div>

        <div class="figure days days-2">
          <span class="top">9</span>
          <span class="top-back">
            <span>9</span>
          </span>
          <span class="bottom">9</span>
          <span class="bottom-back">
            <span>9</span>
          </span>
        </div>
      </div>
      <!-- HORAS -->
      <div class="bloc-time hours" data-init-value="24">
        <span class="count-title">Hours</span>

        <div class="figure hours hours-1">
          <span class="top">2</span>
          <span class="top-back">
            <span>2</span>
          </span>
          <span class="bottom">2</span>
          <span class="bottom-back">
            <span>2</span>
          </span>
        </div>

        <div class="figure hours hours-2">
          <span class="top">4</span>
          <span class="top-back">
            <span>4</span>
          </span>
          <span class="bottom">4</span>
          <span class="bottom-back">
            <span>4</span>
          </span>
        </div>
      </div>
      <!-- MINUTOS -->
      <div class="bloc-time min" data-init-value="0">
        <span class="count-title">Minutes</span>

        <div class="figure min min-1">
          <span class="top">5</span>
          <span class="top-back">
            <span>5</span>
          </span>
          <span class="bottom">5</span>
          <span class="bottom-back">
            <span>5</span>
          </span>
        </div>

        <div class="figure min min-2">
          <span class="top">9</span>
          <span class="top-back">
            <span>9</span>
          </span>
          <span class="bottom">9</span>
          <span class="bottom-back">
            <span>9</span>
          </span>
        </div>
      </div>
      <!-- SEGUNDOS -->
      <div class="bloc-time sec" data-init-value="0">
        <span class="count-title">Seconds</span>

        <div class="figure sec sec-1">
          <span class="top">5</span>
          <span class="top-back">
            <span>5</span>
          </span>
          <span class="bottom">5</span>
          <span class="bottom-back">
            <span>5</span>
          </span>
        </div>

        <div class="figure sec sec-2">
          <span class="top">9</span>
          <span class="top-back">
            <span>9</span>
          </span>
          <span class="bottom">9</span>
          <span class="bottom-back">
            <span>9</span>
          </span>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="zoom-form">
    <div class="card">
      <div class="card-header">
        <h3>Wellcome to our meeting</h3>
      </div>
      <div class="card-body">
        <form class="form" action="" method="POST">
          @csrf
          <div1 class="form-group">
            <label for="inputName">Your Name</label>
            <input type="text" class="form-control" name="username" required id="inputName">
          </div1>

          <div class="form-group">
            <label for="inputEmail">Email address</label>
            <input type="email" class="form-control" name="email" required id="inputEmail">
          </div>

          <button type="submit" class="btn btn-primary" disabled>Submit</button>
        </form>
      </div>
    </div>
  </div> --}}

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>

  <!-- JAVASCRIPT (if you have an error "tweenmax is not defined") -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/TweenMax.min.js"></script>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
