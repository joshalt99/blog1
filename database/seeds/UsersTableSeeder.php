<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user_one = new User();
        $user_one->role_id = 1;
        $user_one->name = 'Joshua Altmann';
        $user_one->email = 'josh.alt99@gmail.com';
        $user_one->password = bcrypt('password');
        $user_one->save();
    }
}
