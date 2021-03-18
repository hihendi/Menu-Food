<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'name' => 'Administrator',
            'email' => 'administrator@raasaa.co.id',
            'password' => bcrypt('admin@123'),
            'created_at' => Carbon::now(),
        ];

        User::insert($users);
    }
}
