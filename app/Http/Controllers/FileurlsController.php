<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fileurl;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FileurlsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', [
        'only' => ['index', 'create','store','show']
      ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $urls = Fileurl::all()->sortByDesc('created_at');
      return view('fileurls.index',compact('urls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('fileurls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'title' => 'required',
        'description' => 'required',
        'url' => 'required',
        'password' => 'required',
      ]);

      Fileurl::create($request->all());

      return redirect()->route('fileurls.index');
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
      return view('fileurls.show', compact('url'));
    }

    public function reset()
    {
      $urls = Fileurl::where('taken','=',true)->get();

      if($url->count()){
        foreach($urls as $url){
          $url->taken = false;
          $url->save();
        }
      }

      return redirect()->route('fileurls.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
