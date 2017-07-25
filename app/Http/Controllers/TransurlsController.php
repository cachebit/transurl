<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Transurl;
use App\Fileurl;

class TransurlsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', [
        'only' => ['index']
      ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transurls = Transurl::all();
        return view('transurls.index',compact('transurls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('transurls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'name' => 'required|max:50',
        'email' => 'required|email|unique:transurls|max:255',
        'type' => 'required'
      ]);

      Transurl::create($request->all());

      return redirect()->route('transurls.see');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function see()
    {
      $url = Fileurl::where('taken','=',false)->first();
      if($url){
        $url->taken = true;
        $url->save();
      }
      
      return view('transurls.show', compact('url'));
    }
}
