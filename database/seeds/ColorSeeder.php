<?php

use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = [
            ['name' => 'blu', 'color' => '#0000ff'],
            ['name' => 'giallo', 'color' => '#ffff00'],
            ['name' => 'verde', 'color' => '#008000'],
        ];

        foreach ($colors as $color) {
            $c = new Color();
            $c->name = $color['name'];
            $c->color = $color['color'];
            $c->save();
        }
    }
}
