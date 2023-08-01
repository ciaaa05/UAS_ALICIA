<?php

namespace Database\Seeders;
use App\Models\UserHobby;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserHobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        for ($i=1; $i < 11; $i++) {
            for ($j=0; $j < 3; $j++) {
                UserHobby::create([
                    'user_id' => $i,
                    'hobby_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7])
                ]);
            }

        }
    }
}
