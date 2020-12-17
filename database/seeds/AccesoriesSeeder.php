<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AccesoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accesories = [
            /***********************************************
             *                     ROSTROS                 *
            ************************************************/
            [
                'name' => 'face1',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Face/Completes/face1.png',
                'required_level' =>  17,
                'category_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'face2',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Face/Completes/face2.png',
                'required_level' =>  10,
                'category_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'face3',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Face/Completes/face3.png',
                'required_level' => 8,
                'category_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'face4',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Face/Completes/face4.png',
                'required_level' =>  10,
                'category_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            /***********************************************
             *                     CABELLO                 *
            ************************************************/
            [
                'name' => 'blackMan1',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Hair/Black/blackMan1.png',
                'required_level' =>  17,
                'category_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackMan2',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Hair/Black/blackMan2.png',
                'required_level' =>  10,
                'category_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackMan3',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Hair/Black/blackMan3.png',
                'required_level' => 8,
                'category_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackMan4',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Hair/Black/blackMan4.png',
                'required_level' =>  10,
                'category_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackMan5',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Hair/Black/blackMan5.png',
                'required_level' =>  17,
                'category_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackMan6',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Hair/Black/blackMan6.png',
                'required_level' =>  10,
                'category_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackMan7',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Hair/Black/blackMan7.png',
                'required_level' => 8,
                'category_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackMan8',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Hair/Black/blackMan8.png',
                'required_level' =>  10,
                'category_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackWoman1',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Hair/Black/blackWoman1.png',
                'required_level' =>  17,
                'category_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackWoman2',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Hair/Black/blackWoman2.png',
                'required_level' =>  10,
                'category_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackWoman3',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Hair/Black/blackWoman3.png',
                'required_level' => 8,
                'category_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackWoman4',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Hair/Black/blackWoman4.png',
                'required_level' =>  10,
                'category_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackWoman5',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Hair/Black/blackWoman5.png',
                'required_level' =>  17,
                'category_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackWoman6',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Hair/Black/blackWoman6.png',
                'required_level' =>  10,
                'category_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            /***********************************************
             *                     CAMISAS                 *
            ************************************************/
            [
                'name' => 'greenShirt1',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Shirts/Green/greenShirt1.png',
                'required_level' =>  17,
                'category_id' => 3,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'greenShirt2',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Shirts/Green/greenShirt2.png',
                'required_level' =>  10,
                'category_id' => 3,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'greenShirt3',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Shirts/Green/greenShirt3.png',
                'required_level' => 8,
                'category_id' => 3,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'greenShirt4',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Shirts/Green/greenShirt4.png',
                'required_level' =>  10,
                'category_id' => 3,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'greenShirt5',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Shirts/Green/greenShirt5.png',
                'required_level' =>  17,
                'category_id' => 3,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'greenShirt6',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Shirts/Green/greenShirt6.png',
                'required_level' =>  10,
                'category_id' => 3,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'greenShirt7',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Shirts/Green/greenShirt7.png',
                'required_level' => 8,
                'category_id' => 3,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'greenShirt8',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Shirts/Green/greenShirt8.png',
                'required_level' =>  10,
                'category_id' => 3,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            /***********************************************
             *                    MANGAS                   *
            ************************************************/
            [
                'name' => 'greenArm_long',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Shirts/Green/greenArm_long.png',
                'required_level' =>  10,
                'category_id' => 4,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'greenArm_short',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Shirts/Green/greenArm_short.png',
                'required_level' => 8,
                'category_id' => 4,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'greenArm_shorter',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Shirts/Green/greenArm_shorter.png',
                'required_level' =>  10,
                'category_id' => 4,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            /***********************************************
             *               COLORES DE MANOS              *
            ************************************************/
            [
                'name' => 'tint1_hand',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Skin/Tint 1/tint1_hand.png',
                'required_level' =>  10,
                'category_id' => 5,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'tint2_hand',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Skin/Tint 2/tint2_hand.png',
                'required_level' =>  10,
                'category_id' => 5,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'tint3_hand',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Skin/Tint 3/tint3_hand.png',
                'required_level' =>  10,
                'category_id' => 5,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'tint4_hand',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Skin/Tint 4/tint4_hand.png',
                'required_level' =>  10,
                'category_id' => 5,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'tint5_hand',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Skin/Tint 5/tint5_hand.png',
                'required_level' =>  10,
                'category_id' => 5,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'tint6_hand',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Skin/Tint 6/tint6_hand.png',
                'required_level' =>  10,
                'category_id' => 5,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'tint7_hand',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Skin/Tint 7/tint7_hand.png',
                'required_level' =>  10,
                'category_id' => 5,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'tint8_hand',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Skin/Tint 8/tint8_hand.png',
                'required_level' =>  10,
                'category_id' => 5,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            /***********************************************
             *                  PANTALONES                 *
            ************************************************/
            [
                'name' => 'pantsBlue1_long',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Pants/Blue 1/pantsBlue1_long.png',
                'required_level' =>  10,
                'category_id' => 6,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'pantsBlue1_short',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Pants/Blue 1/pantsBlue1_short.png',
                'required_level' =>  10,
                'category_id' => 6,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'pantsBlue1_shorter',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Pants/Blue 1/pantsBlue1_shorter.png',
                'required_level' =>  10,
                'category_id' => 6,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'pantsBlue11',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Pants/Blue 1/pantsBlue11.png',
                'required_level' =>  10,
                'category_id' => 6,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'pantsBlue12',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Pants/Blue 1/pantsBlue12.png',
                'required_level' =>  10,
                'category_id' => 6,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'pantsBlue13',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Pants/Blue 1/pantsBlue13.png',
                'required_level' =>  10,
                'category_id' => 6,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'pantsBlue14',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Pants/Blue 1/pantsBlue14.png',
                'required_level' =>  10,
                'category_id' => 6,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            /***********************************************
             *                   ZAPATOS                   *
            ************************************************/
            [
                'name' => 'blackShoe1',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Shoes/Black/blackShoe1.png',
                'required_level' =>  10,
                'category_id' => 7,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackShoe2',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Shoes/Black/blackShoe2.png',
                'required_level' =>  10,
                'category_id' => 7,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackShoe3',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Shoes/Black/blackShoe3.png',
                'required_level' =>  10,
                'category_id' => 7,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackShoe4',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Shoes/Black/blackShoe4.png',
                'required_level' =>  10,
                'category_id' => 7,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'blackShoe5',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Shoes/Black/blackShoe5.png',
                'required_level' =>  10,
                'category_id' => 7,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            /***********************************************
             *               COLORES DE PIEL               *
            ************************************************/
            [
                'name' => 'tint1_head',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Skin/Tint 1/tint1_head.png',
                'required_level' =>  10,
                'category_id' => 8,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'tint2_head',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Skin/Tint 2/tint2_head.png',
                'required_level' =>  10,
                'category_id' => 8,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'tint3_head',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Skin/Tint 3/tint3_head.png',
                'required_level' =>  10,
                'category_id' => 8,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'tint4_head',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Skin/Tint 4/tint4_head.png',
                'required_level' =>  10,
                'category_id' => 8,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'tint5_head',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Skin/Tint 5/tint5_head.png',
                'required_level' =>  10,
                'category_id' => 8,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'tint6_head',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Skin/Tint 6/tint6_head.png',
                'required_level' =>  10,
                'category_id' => 8,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'tint7_head',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Skin/Tint 7/tint7_head.png',
                'required_level' =>  10,
                'category_id' => 8,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'tint8_head',
                'price' => 100,
                'image_url' => 'img/avatar/body_parts/Skin/Tint 8/tint8_head.png',
                'required_level' =>  10,
                'category_id' => 8,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]
        ];

        foreach ($accesories as $accesory) {
            \App\Accesory::create(array(
                'name' => $accesory['name'],
                'price' => $accesory['price'],
                'image_url' => $accesory['image_url'],
                'required_level' => $accesory['required_level'],
                'category_id' => $accesory['category_id'],
                'created_at' => $accesory['created_at'],
                'updated_at' => $accesory['updated_at']
            ));
        }
    }
}
