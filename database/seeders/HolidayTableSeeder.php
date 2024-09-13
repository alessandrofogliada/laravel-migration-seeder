<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Holiday;
use Illuminate\Support\Str;


class HolidayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $holidays = config('holidays');

        foreach($holidays as $$holiday){
            $new_holiday = new Holiday();
            $new_holiday->title = $holiday['title'];
            $new_holiday->slug = Str::slug($holiday['title'], '-');
            $new_holiday->date = $holiday['start_date'];
            $new_holiday->date = $holiday['end_date'];
            $new_holiday->text = $holiday['description'];
            $new_holiday->decimal = $holiday['price'];
            $new_holiday->boolean = $holiday['is_international'];
            dump($new_holiday);
        }

    }
}
