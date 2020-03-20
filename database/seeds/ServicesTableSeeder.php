<?php

use App\Business;
use App\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Service::truncate();
        // Service::unguard();

        Service::query()->delete();

        $faker = \Faker\Factory::create();

        Business::all()->each(function ($business) use ($faker) {
            foreach (range(1, 2) as $i) {
                
                $temp = $faker->randomFloat(5,54,56);
                $temp .= " ";
                $temp .= $faker->randomFloat(5,20,27);

                Service::create([
                    'business_id' => $business->id,
                    'logo_url_0' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRV0I6VDKQ3vmT9y2QFvx7UZ4aTK_HZUbbHyIvmr_sgoa3sIBB6cg&s',
                    'logo_url_1' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRV0I6VDKQ3vmT9y2QFvx7UZ4aTK_HZUbbHyIvmr_sgoa3sIBB6cg&s',
                    'logo_url_2' => '',
                    'name' => $faker->sentence,
                    'description' => $faker->text(50),
                    'address' => $faker->address,
                    'location' => $temp,
                    'phone' => $business->phone,
                    'price' => $faker->numberBetween(0,500),
                    'duration' => 60,
                    'work_hours' => $business->work_m_f,
                    'break_hours' => '12:00 - 13:00',
                    'visible' => $faker->boolean,
                ]);
            }
        });
    }
}
