<?php

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            ['name' => 'Nike', 'image' => 'https://c.static-nike.com/a/images/w_1920,c_limit/mdbgldn6yg1gg88jomci/image.jpg'],
            ['name' => 'Adidas', 'image' => 'https://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c4f2.png'],
            
        ];

        foreach ($brands as $brand) {
            $b = new Brand();

            $b->name = $brand['name'];
            $b->image = $brand['image'];
            $b->save();
        }
    }
}
