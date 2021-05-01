<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  public function index()
  {
    return view('home');
  }



  public function zoomMeeting(Request  $request)
  {
      $request->validate([
         'username' => 'required',
         'email' => 'required|email'
      ]);
    $data = [
      'apiKey' => 'CJZjEGmUS76Lz6pgYfhHPw',
      'apiSecret' => 'vDEzXFvNKdRmjvd2qwLL9Ek24xbXkjKlLifm',
      'meetingNumber' => '95021334632',
      'userName' => $request->input('username'),
      'passWord' => '360600',
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
