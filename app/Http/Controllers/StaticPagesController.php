<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Queue;
use Log;


class StaticPagesController extends Controller
{
    public function home()
    {
      return view('static_pages.home');
    }

}
