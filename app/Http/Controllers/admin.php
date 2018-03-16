<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\artifact;

class admin extends Controller
{

    private $states = ['commission', 'Contract'];

    function __construct(){
      $this->middleware('auth');
    }

    public function view_dash(Request $req){
      if(!$req->isMethod('post'))
        return view("admin.dash");

      foreach($this->states as $e){
        $state = \App\state::where('name', $e)->first();
        $state->open = ($req->get($e) ? true : false);
        $state->save();
      }
      return view('admin.dash');
    }

    public function make_post(Request $e){

      if(!$e->isMethod('post'))
        return view("admin.post");

      if(!Validator::make($e->all(), [
              'name' => 'required|string|max:255|required',
              'type' => 'same:artwork|same:template|same:video|required',
              'thumb' => 'file|image|required',
              'desc'  => 'required'
          ]))
          return  view("admin.post", ["Failure"=>"Failed to post"]);
      $Art = new artifact();
      $Art->name = $e->get('name');
      $Art->type = $e->get('type');
      $Art->description = $e->get('desc');
      $Art->thumb = Storage::putFile('public', $e->file('thumb'));
      $Art->save();
      return view("admin.post");
    }
}
