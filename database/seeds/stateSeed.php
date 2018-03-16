<?php
namespace App\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class stateSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('states')->insert([
          "name" => "commission",
          "open" => false
      ]);
      DB::table('states')->insert([
          "name" => "Contract",
          "open" => false
      ]);
    }
}
