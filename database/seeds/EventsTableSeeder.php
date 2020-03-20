<?php

use App\Event;
use App\Service;
use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    // Message::query()->delete();

    //     $faker= Factory::create();

    //     User::all()->each(function ($user) use ($faker) {
    //         $bcount = Business::all()->count();
    //         foreach (range(1,random_int(5,30)) as $i) {
    //             Message::create([
    //                 'user_id' => $user->id,
    //                 'business_id' => $faker->numberBetween(1, $bcount),
    //                 'sender' => 'user',
    //                 'content' => $faker->text(50),
    //             ]);
    //         }
    //     });

    public function run()
    {
        Event::query()->delete();

        $faker = Factory::create();

        $sCount = Service::all()->count();

        User::all()->each(function ($user) use ($faker, $sCount)
        {
            $duration = [30,60,90,120];
            $status = ["waiting", "accepted", "declined"];
            foreach (range(1, random_int(0,5)) as $i){
                Event::create([
                    'user_id' => $user->id,
                    'service_id' => random_int(0, $sCount),
                    'date' => $faker->date,
                    'time' => $faker->time,
                    'duration' => $duration[rand(0,3)],
                    'real_price' => random_int(10,100),
                    'tips' => random_int(0,10),
                    'status' => $status[rand(0,2)],
                ]);
            }
        });
    }
}
