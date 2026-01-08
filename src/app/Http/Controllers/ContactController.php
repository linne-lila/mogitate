<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function catalog()
  {
    return view('catalog');
  }

  public function register()
  {
    return view('register');
  }
}
