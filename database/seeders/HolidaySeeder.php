<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Holiday as Holiday;

require_once 'vendor/autoload.php';

class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Holiday::create([
            'holiday_name' => 'Hutan Pinus Pengger',
            'location' => 'Yogyakarta',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum labore, error maxime illo nam quod minima doloribus, impedit dolor veniam natus excepturi nihil molestias numquam. Fugiat iure provident minima natus!',
            'rating' => 4.9,
            'price' => 15000,
            'is_picked' => true,
        ]);
        
        Holiday::create([
            'holiday_name' => 'Pantai Ancol',
            'location' => 'Jakarta',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum labore, error maxime illo nam quod minima doloribus, impedit dolor veniam natus excepturi nihil molestias numquam. Fugiat iure provident minima natus!',
            'rating' => 4.8,
            'price' => 200000,
            'is_picked' => false,
        ]);

        Holiday::create([
            'holiday_name' => 'Candi Borobudur',
            'location' => 'Yogyakarta',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum labore, error maxime illo nam quod minima doloribus, impedit dolor veniam natus excepturi nihil molestias numquam. Fugiat iure provident minima natus!',
            'rating' => 4.8,
            'price' => 50000,
            'is_picked' => false,
        ]);
        
        Holiday::create([
            'holiday_name' => 'Pantai Kuta',
            'location' => 'Bali',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum labore, error maxime illo nam quod minima doloribus, impedit dolor veniam natus excepturi nihil molestias numquam. Fugiat iure provident minima natus!',
            'rating' => 4.5,
            'price' => 60000,
            'is_picked' => false,
        ]);

        Holiday::create([
            'holiday_name' => 'Taman Mini Indonesia',
            'location' => 'Jakarta',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum labore, error maxime illo nam quod minima doloribus, impedit dolor veniam natus excepturi nihil molestias numquam. Fugiat iure provident minima natus!',
            'rating' => 4.3,
            'price' => 100000,
            'is_picked' => false,
        ]);

        Holiday::create([
            'holiday_name' => 'Taman Safari',
            'location' => 'Jakarta',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum labore, error maxime illo nam quod minima doloribus, impedit dolor veniam natus excepturi nihil molestias numquam. Fugiat iure provident minima natus!',
            'rating' => 4.8,
            'price' => 80000,
            'is_picked' => false,
        ]);
        
        Holiday::create([
            'holiday_name' => 'Museum Angkut',
            'location' => 'Yogyakarta',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum labore, error maxime illo nam quod minima doloribus, impedit dolor veniam natus excepturi nihil molestias numquam. Fugiat iure provident minima natus!',
            'rating' => 4.2,
            'price' => 50000,
            'is_picked' => false,
        ]);
        
        Holiday::create([
            'holiday_name' => 'Pulau Komodo',
            'location' => 'Yogyakarta',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum labore, error maxime illo nam quod minima doloribus, impedit dolor veniam natus excepturi nihil molestias numquam. Fugiat iure provident minima natus!',
            'rating' => 4.7,
            'price' => 100000,
            'is_picked' => false,
        ]);
    }
}
