<?php
namespace App\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          "name" => "William Gourley",
          "email" => "William@honinworx.co.za",
          "password" => Hash::make('password')
      ]);
      DB::table('role')->insert(['name'=>'Admin']);
      DB::table('user_role')->insert(['user_id' => 1, 'role_id' => 1]);
    }
}
