<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user=[
              'id'=>'1',
              'Name'=>'dev',
              'email'=>'dev@gmail.com',
              'password'=>bcrypt('dev@1234')
        ];
        DB::table('users')->insert($user);
    }
}
