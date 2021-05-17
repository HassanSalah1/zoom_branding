<!DOCTYPE html>

<head>
  <title>Dar Aldawa</title>
  <meta charset="utf-8" />
  <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.9.1/css/bootstrap.css" />
  <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.9.1/css/react-select.css" />
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="origin-trial" content="">

  <style>
      .body{
          height: 100vh;
          position: relative;
          background-image: url("/img/dar-bg.jpg");
          background-size: cover;
          background-position: center center;
          background-repeat: no-repeat;
      }
      .dar-logo{
          position: fixed;
          right: 45%;
          top: 2px;
          width: 150px;
          z-index: 1;
      }
      .pelco-logo{
          position: fixed;
          right: 50px;
          bottom: 0px;
          z-index: 1;
      }
      .word-logo{
          position: fixed;
          left: 20px;
          bottom: 0px;
          z-index: 1;
      }
      @media only screen and (max-width: 600px) {
          .dar-logo{
              right: 38%;
          }
          .word-logo{
              display: none;
          }
      }
      #zmmtg-root{
          background: transparent !important;
      }
      .meeting-app, .webinar-client-inner,#wc-loading{
          width: 85% !important;
          height: 85% !important;
          margin: auto;
          margin-top: 5% !important;
      }

      .webinar-client-inner{
          width: 85% !important;
          height: 85% !important;
          margin: auto;

      }
      .join-dialog{
          width: 84% !important;
          left: 8% !important;
          bottom: 15% !important;
      }

  </style>
</head>

<body style="overflow: hidden;" class="body">

<div class="logo">
    <img class="dar-logo" src="{{ asset('img/dar-aldawa.png') }}" alt="dar-aldawa">
    <img class="pelco-logo" src="{{ asset('img/pelco.png') }}" alt="dar-aldawa">
    <img class="word-logo" src="{{ asset('img/word.png') }}" alt="dar-aldawa">
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script src="https://source.zoom.us/1.9.1/lib/vendor/react.min.js"></script>
  <script src="https://source.zoom.us/1.9.1/lib/vendor/react-dom.min.js"></script>
  <script src="https://source.zoom.us/1.9.1/lib/vendor/redux.min.js"></script>
  <script src="https://source.zoom.us/1.9.1/lib/vendor/redux-thunk.min.js"></script>
  <script src="https://source.zoom.us/1.9.1/lib/vendor/lodash.min.js"></script>
  <script src="https://source.zoom.us/zoom-meeting-1.9.1.min.js"></script>
  <script src="{{ asset('js/zoom/vconsole.min.js') }}"></script>
  <script src="{{ asset('js/zoom/index.js') }}"></script>
  @if (count($data) > 0)
    @foreach ($data as $key => $value)
      <input type="hidden" id="{{ $key }}" value="{{ $value }}">
    @endforeach
  @endif
  <script>
    const simd = async () => WebAssembly.validate(new Uint8Array([0, 97, 115, 109, 1, 0, 0, 0, 1, 4, 1, 96, 0, 0, 3, 2,
      1, 0, 10, 9, 1, 7, 0, 65, 0, 253, 15, 26, 11
    ]))
    simd().then((res) => {
      console.log("simd check", res);
    });

  </script>
</body>

</html>
