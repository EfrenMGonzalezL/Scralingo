<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name' => 'Bryan',
                'paternal_surname' => 'Silva',
                'maternal_surname' => 'Reynoso',
                'email' => 'bryan.silva@uabc.edu.mx',
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'password' => bcrypt('bryan'),
                'profile_img' => 'https://randomuser.me/api/portraits/men/58.jpg',
                'user_id' => 1,
                'user_type' => 'App\\Student',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Alondra',
                'paternal_surname' => 'Martinez',
                'maternal_surname' => 'Guzman',
                'email' => 'alondra.martinez@uabc.edu.mx',
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'password' => bcrypt('twin'),
                'profile_img' => 'https://randomuser.me/api/portraits/women/17.jpg',
                'user_id' => 2,
                'user_type' => 'App\\Student',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Kelly',
                'paternal_surname' => 'Inzunza',
                'maternal_surname' => 'Kelly',
                'email' => 'kelly.inzunza@uabc.edu.mx',
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'password' => bcrypt('kellesita'),
                'profile_img' => 'https://randomuser.me/api/portraits/women/28.jpg',
                'user_id' => 1,
                'user_type' => 'App\\Teacher',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Christian',
                'paternal_surname' => 'Justo',
                'maternal_surname' => 'Romero',
                'email' => 'cjusto@uabc.edu.mx',
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'password' => bcrypt('anciano'),
                'profile_img' => 'https://randomuser.me/api/portraits/men/21.jpg',
                'user_id' => 3,
                'user_type' => 'App\\Student',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Mario',
                'paternal_surname' => 'Gonzalez',
                'maternal_surname' => 'Lopez',
                'email' => 'mgonzalez97@uabc.edu.mx',
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'password' => bcrypt('gei'),
                'profile_img' => 'https://randomuser.me/api/portraits/men/92.jpg',
                'user_id' => 2,
                'user_type' => 'App\\Teacher',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
        ];

        foreach ($users as $user) {
            \App\User::create(array(
                'name' => $user['name'],
                'paternal_surname' => $user['paternal_surname'],
                'maternal_surname' => $user['maternal_surname'],
                'email' => $user['email'],
                'email_verified_at' => $user['email_verified_at'],
                'password' => $user['password'],
                'profile_img' => $user['profile_img'],
                'user_id' => $user['user_id'],
                'user_type' => $user['user_type'],
                'created_at' => $user['created_at'],
                'updated_at' => $user['updated_at']
            ));
        }
    }
}
