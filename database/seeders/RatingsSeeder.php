<?php

namespace Database\Seeders;

use App\Models\Rating;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedRatings = [
            [
                'id'=>90,
                'name' => 'Brilliant',
                'stars' => 5,
                'icon'=>'star'
            ], [
                'id'=>70,
                'name' => 'Great',
                'stars' => 4,
                'icon'=>'star'
            ], [
                'id'=>50,
                'name' => 'OK',
                'stars' => 3,
                'icon'=>'star'
            ], [
                'id'=>40,
                'name' => 'Needs Improving',
                'stars' => 2,
                'icon'=>'star'
            ], [
                'id'=>30,
                'name' => 'Terrible',
                'stars' => 1,
                'icon'=>'star'
            ], [
                'id'=>10,
                'name' => 'You mean what?',
                'stars' => 1,
                'icon'=>'lemon'
            ],
            [
                'id'=>1,
                'name' => 'Untreated',
                'stars' => 0,
                'icon'=>'lemon'
            ],
        ];

        foreach ($seedRatings as $seedRating){
            Rating::updateOrCreate($seedRating);
        }
    }
}
