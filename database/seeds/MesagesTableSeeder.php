<?php

use App\Business;
use App\Message;
use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class MesagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::query()->delete();

        $faker= Factory::create();
        $bcount = Business::all()->count();

        User::all()->each(function ($user) use ($faker, $bcount) {
            foreach (range(1,random_int(5,20)) as $i) {
                Message::create([
                    'user_id' => $user->id,
                    'business_id' => $faker->numberBetween(1, $bcount),
                    'sender' => 'user',
                    'content' => $faker->text(50),
                ]);
            }
        });
    }
}
