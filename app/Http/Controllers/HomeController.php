<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    return view('home');
  }


  /**
   * Init and join zoom for lecture.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function zoomMeeting()
  {
    $data = [
      'apiKey' => 'Zn6x4KjMQ2OSl9a3TRZcLw',
      'apiSecret' => 'jVz6Z88i17zvm1EDXlVTq9QHMnJ4ZOmnaPTF',
      'meetingNumber' => '86866205360',
      'userName' => 'Abdullah Sameh',
      'passWord' => '4GNXhj',
      'leaveUrl' => url('/'),
      'role' => 0,
      'userEmail' => 'abdomego@gamil.com',
      'lang' => 'en_US',
      'signature' => '',
      'china' => false
    ];
    return view('zoom-meeting', compact('data'));
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  /* public function zoomMeeting()
  {
    return view('zoom-meeting');
  } */
}
