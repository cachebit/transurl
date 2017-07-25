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
        $transurls = Transurl::orderBy('created_at', 'desc')->all();
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

      $transurl = Transurl::create($request->all());

      $url = Fileurl::where('taken','=',false)->first();

      if($url){
        $url->taken = true;
        $transurl->fileurl()->save($url);

        return redirect()->route('transurls.show',$url->id);
      }else{
        $transurl->delete();
        return redirect()->route('transurls.outofurl');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $url = Fileurl::findOrFail($id);

      return view('transurls.show', compact('url'));
    }

     public function outofurl()
     {
       return view('transurls.outofurl');
     }

    public function update(Request $request, $id)
    {
      $transurl = Transurl::findOrFail($id);

      if($request->infoback == 'true'){
        $transurl->infoback = true;
      }else{
        $transurl->infoback = false;
      }

      $transurl->save();

      return redirect()->route('transurls.index');
    }
}
