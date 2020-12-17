<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $teachers = [
            [
                'employee_number' => 37890,
                'telephone_number' => '6643397765',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'employee_number' => 33765,
                'telephone_number' => '6645338331',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        
        foreach ($teachers as $teacher) {
            \App\Teacher::create(array(
                'employee_number' => $teacher['employee_number'],
                'telephone_number' => $teacher['telephone_number'],
                'created_at' => $teacher['created_at'],
                'updated_at' => $teacher['updated_at'],
            ));
        }
    }
}
