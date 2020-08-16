<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Nitikorn Kanta";
        $user->email = "kooncakeza55@gmail.com";
        $user->password = bcrypt("1234");
        $user->save();
    }

}
