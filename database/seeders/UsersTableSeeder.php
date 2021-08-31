<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            
            'role'=>'admin',
            'name'=>'Admin',
            'email'=>'shima@gmail.com',
            'address'=>'House 16, Road 05, Sector 04, Uttara',
            'phone'=>'01630141516',
            'password'=>bcrypt('123ABC'),
            
            
            
 
         ]);
    }
}
