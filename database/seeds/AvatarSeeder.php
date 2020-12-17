<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $avatars = [
            [
                'student_id' => 1,
                'name' => 'Papito piernas largas',
                'image_url' => null,
                'hair_url' =>  '/img/avatar/body_parts/Hair/Black/blackMan5.png',
                'skin_url' => '/img/avatar/body_parts/Skin/Tint 1/tint1_head.png',
                'face_url' => '/img/avatar/body_parts/Face/Completes/face4.png',
                'shirt_url' => '/img/avatar/body_parts/Shirts/Green/greenShirt5.png',
                'sleeves_url' => '/img/avatar/body_parts/Shirts/Green/greenArm_long.png',
                'hands_url' => '/img/avatar/body_parts/Skin/Tint 1/tint1_hand.png',
                'pants_url' => '/img/avatar/body_parts/Pants/Blue 1/pantsBlue1_long.png',
                'shoes_url' => '/img/avatar/body_parts/Shoes/Black/blackShoe5.png',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]
        ];

        foreach ($avatars as $avatar) {
            \App\Avatar::create(array(
                'student_id' => $avatar['student_id'],
                'name' => $avatar['name'],
                'image_url' => $avatar['image_url'],
                'hair_url' => $avatar['hair_url'],
                'skin_url' => $avatar['skin_url'],
                'face_url' => $avatar['face_url'],
                'shirt_url' => $avatar['shirt_url'],
                'sleeves_url' => $avatar['sleeves_url'],
                'hands_url' => $avatar['hands_url'],
                'pants_url' => $avatar['pants_url'],
                'shoes_url' => $avatar['shoes_url'],
                'created_at' => $avatar['created_at'],
                'updated_at' => $avatar['updated_at']
            ));
        }
    }
}
