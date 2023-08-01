<?php

namespace Database\Seeders;

use App\Models\Hobby;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Hobby::create([
            'name' => 'Traveling'
        ]);
        Hobby::create([
            'name' => 'Sport'
        ]);
        Hobby::create([
            'name' => 'Painting'
        ]);
        Hobby::create([
            'name' => 'Dancing'
        ]);
        Hobby::create([
            'name' => 'Singing'
        ]);
        Hobby::create([
            'name' => 'Reading'
        ]);
        Hobby::create([
            'name' => 'Writting'
        ]);
    }
}
