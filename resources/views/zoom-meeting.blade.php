<!DOCTYPE html>

<head>
  <title>Zoom Thiqa</title>
  <meta charset="utf-8" />
  <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.9.1/css/bootstrap.css" />
  <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.9.1/css/react-select.css" />
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="origin-trial" content="">

  <style>
    body {
      background-size: cover;
      background-color: #ffffff;
      background-repeat: no-repeat;
      background-position: center center;
    }

    #zmmtg-root {
      position: relative !important;
      top: 50% !important;
      left: 50% !important;
      width: 65% !important;
      height: unset !important;
      min-height: 550px !important;
      max-height: 600px !important;
      border-radius: 0.25rem !important;
      -ms-transform: translateX(-50%) translateY(-50%);
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
        overflow: hidden;
    }


    #wc-loading {
      width: 100% !important;
      height: unset !important;
      min-height: 550px !important;
      background: #222;
      position: relative;
      text-align: center;
    }
    #notificationManager{
        display: none;
    }
    .gallery-video-container__video-frame.react-draggable{
        position: absolute !important;
        top: 50% !important;
        left: 50% !important;
        width: 100% !important;
        height: 100% !important;

        border-radius: 0.25rem !important;
        -ms-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .gallery-video-container__main-view{
        margin: 0;
        max-height: 600px;
    }
    .gallery-video-container__wrap{
        position: absolute !important;
        top: 50% !important;
        left: 50% !important;
        width: 100% !important;
        height: 100% !important;

        border-radius: 0.25rem !important;
        -ms-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    .gallery-video-container__canvas{
        position: absolute !important;
        top: 50% !important;
        left: 50% !important;
        width: 100% !important;
        height: 100% !important;

        border-radius: 0.25rem !important;
        -ms-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    .gallery-video-container__video-frame.react-draggable{
        position: absolute !important;
        top: 50% !important;
        left: 50% !important;
        width: 100% !important;
        height: 100% !important;

        border-radius: 0.25rem !important;
        -ms-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%) !important;
    }
    .video-avatar__avatar{
        position: absolute !important;
        top: 50% !important;
        left: 50% !important;
        width: 100% !important;
        height: 100% !important;

        border-radius: 0.25rem !important;
        -ms-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    .speak-view-video{
        width: 100%;
    }
    .speaker-bar-container__horizontal-view-wrap{
        display: none;
    }
    .sharee-container__viewport.react-draggable{
        width: 100% !important;
        height: 100% !important;
        touch-action: none;
        margin:0 !important;

    }
    .sharee-container{
        width: 100%;
        height: 100%;
    }
    .sharing-layout{
        height: 100% !important;
    }
    #wc-footer{
        display: none;
    }
    .full-screen-icon{
        display: none;
    }
    .sharee-container__indicator{
        display: none !important;
    }
    .speak-view-video{
        width: 100% !important;
    }
    .speaker-bar-container__horizontal-view-wrap + div{
        width: 100% !important;
        height: 600px !important;
    }
    .speaker-active-container__video-frame{
        width: 100% !important;
        height: 100% !important;
    }
    .speak-view-video{
        width: 100% !important;
        height: 100% !important;
    }
    .speaker-view__canvas{
        width: 100% !important;
        height: 100% !important;
    }

    /* .sharee-container__viewport {
         width: 100 !important;
       } */

    /*#zmmtg-root .meeting-app {*/
    /*  width: 100% !important;*/
    /*  height: unset !important;*/
    /*  min-height: 550px !important;*/
    /*}  */

    /* .meeting-client-inner {
      width: 65% !important;
      height: 100%;
      position: fixed;
      top: 0;
      left: 0;
    }
 */

 .join-dialog{
  width: 100% !important;
     z-index: 111;
}

    /*

    .speaker-view__canvas {
      position: absolute;
      width: 65% !important;
      left: 0;
      top: 0;
    } */

    .join-audio-by-phone__press-tip,
    .join-audio-by-phone__steps,
    .meeting-info-container,
    .zmu-paper .meeting-info-icon__meeting-paper {
      display: none !important;
    }

  </style>
</head>

<body style="background-image: url({{ asset('img/bg.jpg') }})">
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
