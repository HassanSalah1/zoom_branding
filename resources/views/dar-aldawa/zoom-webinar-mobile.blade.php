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
    body {
      position: relative !important;
    }

    @media (max-width: 824px) {
      .dar-logo {
        position: fixed !important;
        z-index: 999 !important;
        width: 135px !important;
        left: 15% !important;
        bottom: 1% !important;
      }

      .pelco-logo {
        position: fixed !important;
        z-index: 999 !important;
        width: 135px !important;
        right: 15% !important;
        bottom: 3% !important;
      }
    }

    @media (max-width: 412px) {
      .dar-logo {
        position: fixed !important;
        z-index: 999 !important;
        width: 137px !important;
        left: 1% !important;
        bottom: 10% !important;
      }

      .pelco-logo {
        position: fixed !important;
        z-index: 999 !important;
        width: 135px !important;
        right: 1% !important;
        bottom: 12% !important;
      }
    }

  </style>
</head>

<body style="overflow: hidden;" class="body">

  <img class="dar-logo" src="{{ asset('img/dar-aldawa.png') }}" alt="dar-aldawa">
  <img class="pelco-logo" src="{{ asset('img/pelco.png') }}" alt="dar-aldawa">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous"></script>
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
