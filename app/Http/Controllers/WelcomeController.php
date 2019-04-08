<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class WelcomeController extends Controller
{
  public function index(){
      $location = Location::all();
      return view('landing')->with(['locations' => $location, 'error'=> '']);
  }
}
