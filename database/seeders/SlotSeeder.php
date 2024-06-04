<?php

namespace Database\Seeders;

use App\Models\Slot;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $slots = [

            ['day' => '2024-06-01', 'start' => '10:00:00', 'end' => '11:00:00'],

            ['day' => '2024-06-01', 'start' => '12:00:00', 'end' => '13:00:00'],

            ['day' => '2024-06-01', 'start' => '14:00:00', 'end' => '15:00:00'],

            ['day' => '2024-06-01', 'start' => '16:00:00', 'end' => '17:00:00'],

            ['day' => '2024-06-01', 'start' => '18:00:00', 'end' => '19:00:00'],
        ];

        foreach ($slots as $slotData) {
            Slot::create($slotData);
        }
    }
}
