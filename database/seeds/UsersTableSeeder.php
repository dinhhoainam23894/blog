<?php

use Illuminate\Database\Seeder;

use App\User;
use Faker\Factory as faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        // 		"email" 		=> 	"Hoainam94@gmail.com",
        // 		"first_name"	=> 	"Nam",
        // 		"last_name"		=> 	"Dinh Hoai",
        // 		"password"		=>	bcrypt("123"),
        // 		"mobile"		=>	"012312312"
        // 	]);
        $faker  = faker::create();
        for($i=0;$i<2;$i++){
            $user = new User;
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = bcrypt("123");
            $user->save();
        }
    }
}
