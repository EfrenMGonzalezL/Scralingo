<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $students = [
            [
                'registration_number' => 1230477,
                'current_level' => 17,
                'current_xp' => 10974,
                'money' => 635,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'registration_number' => 1232520,
                'current_level' => 13,
                'current_xp' => 7698,
                'money' => 426,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'registration_number' => 1226324,
                'current_level' => 7,
                'current_xp' => 968,
                'money' => 103,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
        ];

        foreach ($students as $student) {
            \App\Student::create(array(
                'registration_number' => $student['registration_number'],
                'current_level' => $student['current_level'],
                'current_xp' => $student['current_xp'],
                'money' => $student['money'],
                'created_at' => $student['created_at'],
                'updated_at' => $student['updated_at']
            ));
        }
    }
}
