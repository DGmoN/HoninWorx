<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class state extends Model
{

  public $timestamps = false;

    function isOpen(){
      return $this->open;
    }

    public static function get_state($name){
      $thing = DB::table('states')->get()->where("name", "=", $name)->first();
      return ($thing ? $thing->open:0);
    }
}
