<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function __construct()
  {

   // $this->middleware('auth', ['except' => ['getIndex',getRooms','getAbout',getReservation]]);
  }

  public function getIndex(){
    $title = 'WELCOME TO OUR PENSION';
    $subTitle = 'A Best Place To Stay';

    return view('pages.index')->with('title',$title)->with('subTitle',$subTitle);
  }

  public function getRooms(){
    $title = 'Rooms';
    $subTitle = 'We provide the most comfortable rooms at the best price';
    return view('pages.rooms')->with('title',$title)->with('subTitle',$subTitle);
  }

  public function getAbout(){
    $title = 'About Us';
    $subTitle = 'At Pension Buchner our first priority is guest satisfaction and we go all out to make sure your stay is as comfortable and stress-free as possible';

    return view('pages.about')->with('title',$title)->with('subTitle',$subTitle);
  }



  public function getReservation(){
    $title = 'Reservation Form';
    $subTitle = 'A Best Place To Stay';

    return view('pages.reservation')->with('title',$title)->with('subTitle',$subTitle);
  }


}
