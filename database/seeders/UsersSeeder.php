<?php
namespace Database\Seeders;
use ExtensionsValley\Dashboard\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{

    public function run()
    {

        $result = User::create([
            'name' => 'Admin',
            'email' => 'rajesh@dishacompuworld.com',
            'password' => bcrypt('123456'),
            'groups' => '1',
            'status' => '1',
        ],
        [
            'name' => 'Saurabh',
            'email' => 'saurabh@dishacompuworld.com',
            'password' => bcrypt('123456'),
            'groups' => '2',
            'status' => '1',
        ]);


    }
}
