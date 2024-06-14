<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class WebController extends Controller
{
  public function home()
  {
    return view('welcome');
  }

  public function about($name)
  {
    return "Hallo friend $name";
  }

  public function contact()
  {
    return "It's contact page";
  }
}