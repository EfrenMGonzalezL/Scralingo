<?php

use App\AvatarAccesories;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(ClassSeeder::class);
        $this->call(StudentClassesSeeder::class);
        $this->call(HomeworksSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(AccesoriesSeeder::class);
        $this->call(AvatarSeeder::class);
        $this->call(AvatarAccesoriesSeeder::class);
    }
}
