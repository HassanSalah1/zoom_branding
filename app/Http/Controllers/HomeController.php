<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  public function index()
  {
    return view('dar-aldawa.index');
  }

  public function waitingPage()
  {
    return view('dar-aldawa.timer');
  }
  public function speakersForm()
  {
    return view('dar-aldawa.index-speaker');
  }

  public function waitingPageSpeaker(Request  $request)
  {
    if ($request->input('email') !== 'speaker@admin.com') {
      return view('dar-aldawa.timer-speaker');
    }
    return view('dar-aldawa.join-speaker');
  }

  public function msPharma()
  {
    return view('home');
  }


  public function zoomMeeting(Request  $request)
  {
    $request->validate([
      'username' => 'required',
      'email' => 'required|email'
    ]);
    // if ($request->input('email') !== 'admin@admin.com') {
    //   return view('dar-aldawa.timer');
    // }
    $data = [
      'apiKey' => 'CJZjEGmUS76Lz6pgYfhHPw',
      'apiSecret' => 'vDEzXFvNKdRmjvd2qwLL9Ek24xbXkjKlLifm',
      'meetingNumber' => '98671429079',
      'userName' => $request->input('username'),
      'passWord' => '693031',
      'leaveUrl' => url('/'),
      'role' => 0,
      'userEmail' => $request->input('email'),
      'lang' => 'en_US',
      'signature' => '',
      'china' => false
    ];

    return view('zoom-meeting', compact('data'));
  }

  /* public function zoomMeeting()
  {
    return view('zoom-meeting');
  } */
}
