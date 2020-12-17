<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $classes = [
            [
                'class_id' => 12107,
                'class_name' => 'Español',
                'teacher_id' => 1,
                'schedule_id' => 1,
                'class_color' => '#8EA604',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'class_id' => 12112,
                'class_name' => 'Matemáticas',
                'teacher_id' => 2,
                'schedule_id' => 2,
                'class_color' => '#DE4217',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]
        ];

        foreach ($classes as $class) {
            \App\SchoolClass::create(array(
                'class_id' => $class['class_id'],
                'class_name' => $class['class_name'],
                'teacher_id' => $class['teacher_id'],
                'schedule_id' => $class['schedule_id'],
                'class_color' => $class['class_color'],
                'created_at' => $class['created_at'],
                'updated_at' => $class['updated_at']
            ));
        }
    }
}
