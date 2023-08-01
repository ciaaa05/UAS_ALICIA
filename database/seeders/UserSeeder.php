<?php

namespace Database\Seeders;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
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
        for ($i=0; $i < 10; $i++) {
            $gender = $faker->randomElement(['male', 'female']);

            User::create([
                'name' => $faker->name(),
                'dob' => $faker->date(),
                'gender' => $gender,
                'email' => $faker->email(),
                'phone' => $faker->randomNumber(9,true).$faker->randomNumber(3,true),
                'instagram'=>$faker->word(),
                'image' => $faker->imageUrl(),
                'password'=> $faker->password()
            ]);
        }
    }
}
