<?php

use App\User;
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
        // User::query()->delete();

        $faker = \Faker\Factory::create();
        $password = bcrypt('secret');

        // User::create([
        //     'name'     => $faker->name,
        //     'email'    => 'graphql@test.com',
        //     'password' => $password,
        //     'phone' => $faker->phoneNumber,
        //     'photo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRV0I6VDKQ3vmT9y2QFvx7UZ4aTK_HZUbbHyIvmr_sgoa3sIBB6cg&s'
        // ]);

        for ($i = 0; $i < 2000; ++$i) {
            User::create([
                'name'     => $faker->name,
                'email'    => $faker->email.$faker->text(5),
                'password' => $password,
                'phone' => $faker->phoneNumber,
                'photo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRV0I6VDKQ3vmT9y2QFvx7UZ4aTK_HZUbbHyIvmr_sgoa3sIBB6cg&s'
            ]);
        }
    }
}
