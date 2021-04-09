window.addEventListener('DOMContentLoaded', function(event) {
    console.log('DOM fully loaded and parsed');
    websdkready();
  });
  
  function websdkready() {
    // var testTool = window.testTool;
    
    // get meeting args from url
    // var tmpArgs = testTool.parseQuery();

    var meetingConfig = {
      apiKey: document.getElementById('apiKey').value,
      meetingNumber: document.getElementById('meetingNumber').value,
      userName: document.getElementById('userName').value,
      passWord: document.getElementById('passWord').value,
      leaveUrl: document.getElementById('leaveUrl').value,
      role: document.getElementById('role').value,
      userEmail: document.getElementById('userEmail').value,
      lang: document.getElementById('lang').value,
      signature: '',
      china: false,
    };

// console.log('roleeeeeeeeee' +meetingConfig.role)
    var signature = ZoomMtg.generateSignature({
      meetingNumber: meetingConfig.meetingNumber,
      apiKey: meetingConfig.apiKey,
      apiSecret: document.getElementById('apiSecret').value,
      role: meetingConfig.role,
      success: function (res) {
        console.log(res.result);
        meetingConfig.signature = res.result;       
      },
    });
    // console.log('signatureeeeeeeeeeeeeeeeeeeeeeee'+signature);
    meetingConfig.signature = signature;
  
    // a tool use debug mobile device
    // if (testTool.isMobileDevice()) {
    //   vConsole = new VConsole();
    // }
    console.log(JSON.stringify(ZoomMtg.checkSystemRequirements()));
  
    // it's option if you want to change the WebSDK dependency link resources. setZoomJSLib must be run at first
    // ZoomMtg.setZoomJSLib("https://source.zoom.us/1.9.0/lib", "/av"); // CDN version defaul
    if (meetingConfig.china)
      ZoomMtg.setZoomJSLib("https://jssdk.zoomus.cn/1.9.0/lib", "/av"); // china cdn option
    ZoomMtg.preLoadWasm();
    ZoomMtg.prepareJssdk();
    function beginJoin(signature) {
      ZoomMtg.init({
        leaveUrl: meetingConfig.leaveUrl,
        webEndpoint: meetingConfig.webEndpoint,
        success: function () {
          console.log(meetingConfig);
          console.log("signature", signature);
          ZoomMtg.i18n.load(meetingConfig.lang);
          ZoomMtg.i18n.reload(meetingConfig.lang);
          ZoomMtg.join({
            meetingNumber: meetingConfig.meetingNumber,
            userName: meetingConfig.userName,
            signature: signature,
            apiKey: meetingConfig.apiKey,
            userEmail: meetingConfig.userEmail,
            passWord: meetingConfig.passWord,
            success: function (res) {
              console.log("join meeting success");
              console.log("get attendeelist");
              ZoomMtg.getAttendeeslist({});
              ZoomMtg.getCurrentUser({
                success: function (res) {
                  console.log("success getCurrentUser", res.result.currentUser);
                },
              });
            },
            error: function (res) {
              console.log("not joining"+res);
            },
          });
        },
        error: function (res) {
          console.log(res);
        },
      });
  
      ZoomMtg.inMeetingServiceListener('onUserJoin', function (data) {
        console.log('inMeetingServiceListener onUserJoin', data);
      });
    
      ZoomMtg.inMeetingServiceListener('onUserLeave', function (data) {
        console.log('inMeetingServiceListener onUserLeave', data);
      });
    
      ZoomMtg.inMeetingServiceListener('onUserIsInWaitingRoom', function (data) {
        console.log('inMeetingServiceListener onUserIsInWaitingRoom', data);
      });
    
      ZoomMtg.inMeetingServiceListener('onMeetingStatus', function (data) {
        console.log('inMeetingServiceListener onMeetingStatus', data);
      });
    }
  
    beginJoin(meetingConfig.signature);
  };