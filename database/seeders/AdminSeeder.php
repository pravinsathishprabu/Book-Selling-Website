<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=[
              'id'=>'1',
              'Name'=>'Admin',
              'Admin_id'=>'12300',
              'password'=>bcrypt('Admin123')
        ];
        DB::table('admins')->insert($admin);
    }
}
