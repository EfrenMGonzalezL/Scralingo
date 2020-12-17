<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class HomeworksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $homeworks = [
            [
                'school_class_id' => 1,
                'homework_name' => 'Tarea prueba',
                'homework_rewards' => 100,
                'homework_xp' => 600,
                'homework_active' => 1,
                'due_date' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'school_class_id' => 1,
                'homework_name' => 'Tarea prueba 2',
                'homework_rewards' => 200,
                'homework_xp' => 350,
                'homework_active' => 1,
                'due_date' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'school_class_id' => 1,
                'homework_name' => 'Tarea prueba 3',
                'homework_rewards' => 220,
                'homework_xp' => 357,
                'homework_active' => 1,
                'due_date' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'school_class_id' => 1,
                'homework_name' => 'Tarea prueba 4',
                'homework_rewards' => 100,
                'homework_xp' => 50,
                'homework_active' => 1,
                'due_date' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'school_class_id' => 1,
                'homework_name' => 'Tarea prueba 5',
                'homework_rewards' => 209,
                'homework_xp' => 20,
                'homework_active' => 1,
                'due_date' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
        ];

        foreach ($homeworks as $homework) {
            \App\Homework::create(array(
                'school_class_id' => $homework['school_class_id'],
                'homework_name' => $homework['homework_name'],
                'homework_rewards' => $homework['homework_rewards'],
                'homework_xp' => $homework['homework_xp'],
                'homework_active' => $homework['homework_active'],
                'due_date' => $homework['due_date'],
                'created_at' => $homework['created_at'],
                'updated_at' => $homework['updated_at']
            ));
        }
    }
}
