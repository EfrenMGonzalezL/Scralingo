<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Cara',
                'slug' => 'face',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Cabello',
                'slug' => 'hair',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Camisas',
                'slug' => 'shirts',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Mangas',
                'slug' => 'sleeves',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Manos',
                'slug' => 'hands',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Pantalones',
                'slug' => 'pants',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Zapatos',
                'slug' => 'shoes',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Piel',
                'slug' => 'skin',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
        ];

        foreach ($categories as $category) {
            \App\Category::create(array(
                'name' => $category['name'],
                'slug' => $category['slug'],
                'created_at' => $category['created_at'],
                'updated_at' => $category['updated_at']
            ));
        }
    }
}
