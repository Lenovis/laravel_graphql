<?php

use App\Business;
use App\User;
use Illuminate\Database\Seeder;

class BusinessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Business::truncate();
        // Business::unguard();
        Business::query()->delete();

        $faker = \Faker\Factory::create();

        User::all()->each(function ($user) use ($faker) {
            foreach (range(1, 2) as $i) {
                
                $temp = $faker->randomFloat(5,54,56);
                $temp .= " ";
                $temp .= $faker->randomFloat(5,20,27);

                Business::create([
                    'user_id' => $user->id,
                    'name' => $faker->sentence,
                    'description' => $faker->text(50),
                    'address' => $faker->address,
                    'location' => $temp,
                    'phone' => $user->phone,
                    'work_m_f' => '8:00 - 16:00',
                    'work_sat' => '10:00 - 15:00',
                    'work_sun' => '',
                    'currency' => $faker->currencyCode,
                    'show_tips' => $faker->boolean,
                    'logo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRV0I6VDKQ3vmT9y2QFvx7UZ4aTK_HZUbbHyIvmr_sgoa3sIBB6cg&s',
                    'price_percent' => $faker->numberBetween(0, 50),
                ]);
            }
        });
    }
}
