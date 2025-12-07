<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPanelController extends Controller
{
      public function post_page()
    {
        return view('mainpanel.post_page'); // make sure this view exists
    }
}
