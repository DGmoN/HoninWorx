<?php

namespace App\Http\Controllers;

use \App\artifact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latestArt = artifact::where("type", "artwork")->orderBy('created_at', 'desc')->first();
        $latestTemp = artifact::where("type", "template")->orderBy('created_at', 'desc')->first();
        $latestVid = artifact::where("type", "video")->orderBy('created_at', 'desc')->first();
        return view('welcome', ["_latest_art_"=>$latestArt, "_latest_temp_"=>$latestTemp, "_latest_vid_"=>$latestVid]);
    }

    public function view_post($id){
      $artifact = artifact::where("id", $id)->first();
      return view('post', ["post" => $artifact]);
    }

    public function view_art(){
      $Art = artifact::where("type","=", "artwork")->get();
      return view('elements.gallery', ['artifacts'=>$Art, "Title"=>"Artworks"]);
    }

    public function view_templates(){
      $Art = artifact::where("type","=", "template")->get();
      return view('elements.gallery', ['artifacts'=>$Art, "Title"=>"Templates"]);
    }

    public function view_videos(){
      $Art = artifact::where("type","=", "video")->get();
      return view('elements.gallery', ['artifacts'=>$Art, "Title"=>"Videos"]);
    }

    public function logout(){
      Auth::logout();
      return redirect('/');
    }
}
