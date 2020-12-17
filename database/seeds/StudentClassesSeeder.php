<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StudentClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student_classes = [
            [
                'student_id' => 1,
                'class_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'student_id' => 1,
                'class_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
        ];

        foreach ($student_classes as $student_class) {
            \App\StudentClasses::create(array(
                'student_id' => $student_class['student_id'],
                'class_id' => $student_class['class_id'],
                'created_at' => $student_class['created_at'],
                'updated_at' => $student_class['updated_at']
            ));
        }
    }
}
