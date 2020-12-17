<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AvatarAccesoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $avatar_accesories = [
            [
                'accesory_id' => 1,
                'avatar_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'accesory_id' => 5,
                'avatar_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'accesory_id' => 13,
                'avatar_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'accesory_id' => 19,
                'avatar_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'accesory_id' => 27,
                'avatar_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'accesory_id' => 30,
                'avatar_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'accesory_id' => 38,
                'avatar_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'accesory_id' => 41,
                'avatar_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'accesory_id' => 45,
                'avatar_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'accesory_id' => 50,
                'avatar_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]
        ];

        foreach ($avatar_accesories as $accesory) {
            \App\AvatarAccesories::create(array(
                'accesory_id' => $accesory['accesory_id'],
                'avatar_id' => $accesory['avatar_id'],
                'created_at' => $accesory['created_at'],
                'updated_at' => $accesory['updated_at']
            ));
        }
    }
}
