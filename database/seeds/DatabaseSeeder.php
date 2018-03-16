<?php
require("stateSeed.php");
require("admin.php");

use Illuminate\Database\Seeder;
use \App\seeds\stateSeed;
use \App\seeds\admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(stateSeed::class);
        $this->call(admin::class);

    }
}
