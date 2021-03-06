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

    .timer .card {
      border: none;
      margin-top: 2rem;
    }

    .timer .card-header {
      background-color: #008166;
      border-color: #008166;
      text-align: center;
      color: #fff;
    }

    .timer .card-header h2 {
      font-size: 1.5rem;
    }

    .timer .card .card-body {
      background-color: #eee;
    }

    .countdown .bloc-time {
      margin-bottom: 1rem;
    }

    .countdown .count-title {
      margin-bottom: 10px;
    }

    .zoom-form {
      /*width: 30%;*/
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

    .zoom-form .form .btn,
    .zoom-form .join {
      background: linear-gradient(to right, #2bbba0, #11705c);
      width: 100%;
      margin-top: 1.5rem;
    }

    .zoom-form .form .btn:focus,
    .zoom-form .join.btn:focus {
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
      /*.zoom-form {*/
      /*    width: 36%;*/
      /*}*/
    }

    @media (min-width: 768px) and (max-width: 992px) {
      /*.zoom-form {*/
      /*    width: 44%;*/
      /*}*/
    }

    @media (max-width: 768px) {
      .timer .card {
        margin: 2rem 1.125rem 0;
      }

      .logo {
        padding-top: 4rem;
      }

      /*.zoom-form {*/
      /*    width: 80%;*/
      /*}*/
    }

    @media (max-width: 576px) {
      /*.zoom-form {*/
      /*    margin: 10% auto;*/
      /*}*/
    }

    .form-group label {
      margin: 5px 0 10px;
    }

    .body {
      height: 100vh;
      position: relative;
      background-image: url("/img/dar-bg.jpg");
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
    }

    .dar-logo {
      position: fixed;
      right: 50px;
      top: 20px;
      width: 150px;
    }

    .pelco-logo {
      position: fixed;
      right: 50px;
      bottom: 40px;
    }

    .word-logo {
      position: fixed;
        right: 20px;
      top: 100px;
    }

    .zoom-form {
      position: fixed;
      left: 10%;
      bottom: 15%;
    }

    .zoom-form .speaker-join {
      text-transform: capitalize;
      font-size: 1.75rem;
    }

    @media only screen and (max-width: 768px) {
      .zoom-form {
        position: unset;

      }

      .zoom-form .speaker-join {
        font-size: 1.5rem;
      }
    }

  </style>
</head>

<body style="overflow: hidden;" class="body">
  <div class="logo">
    <img class="dar-logo" src="{{ asset('img/dar-aldawa.png') }}" alt="dar-aldawa">
    <img class="pelco-logo" src="{{ asset('img/pelco.png') }}" alt="dar-aldawa">
     <img class="word-logo" src="{{ asset('img/word.png') }}" alt="dar-aldawa">
  </div>
  <div class="row justify-content-center px-3 pt-5 mt-5">
    <div class="col-md-5 zoom-form pt-5 mt-5">
      <div class="card">
        <div class="card-header py-3">
          <h2 class="mb-0">Welcome Panelist to our webinar</h2>
        </div>
        <div class="card-body">
          <h2 class="mb-0 speaker-join">You are invited to a Zoom webinar</h2>

          <a href="https://pomyst.zoom.us/w/98969037681?tk=pkSYIYf1kt9z3qqKnAeFtWXCgFDDLLR1EibQVOs9jwA.DQIAAAAXCwOrcRZSNnZyOE83NlNQNk41djJncjFhalh3AAAAAAAAAAAAAAAAAAAAAAAAAAAA&pwd=UVg2UFQ2YlQrZ2cvY24wb29uK3BnZz09"
            class="btn btn-primary join">Click Here to Join</a>
          {{-- <form class="form" action="{{ route('speaker.waiting') }}" method="get">

                    <div1 class="form-group">
                        <label for="inputName">Your Name</label>
                        <input type="text" class="form-control" name="username" required id="inputName">
                    </div1>

                    <div class="form-group">
                        <label for="inputEmail">Email address</label>
                        <input type="email" class="form-control" name="email" required id="inputEmail">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form> --}}
        </div>
      </div>
    </div>
  </div>


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
