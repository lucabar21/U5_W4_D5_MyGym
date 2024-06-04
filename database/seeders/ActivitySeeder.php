<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Activity;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        Activity::create([
            'type' => 'intense training',
            'description' => 'LEZIONI PER PER ESPERTI AD ALTA IN INTENSITÀ ',

        ]);

        Activity::create([
            'type' => 'light training',
            'description' => 'LEZIONI PER PRINCIPIANTI A BASSA INTENSITÀ',

        ]);
    }
}
