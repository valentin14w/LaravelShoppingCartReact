<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $products = [
            [
                'name' => 'Tenis Nike Air',
                'description' => 'Tenis Nike Air 809',
                'category' => 'Caballero',
                'image' => 'https://cf.shopee.com.mx/file/f70b179903bc2668d1bcc1c7c6f8a279',
                'price' => 1099
            ],
            [
                'name' => 'Tenis Adidas',
                'description' => 'TENIS ADIDAS VS PACE B74494',
                'category' => 'Dama',
                'image' => 'https://www.claroshop.com/medios-plazavip/swift/v1/claroshop/landings/adidas/TENIS_ADIDAS_500x500_PNG.png',
                'price' => 1089
            ],
            [
                'name' => 'Tenis Puma',
                'description' => 'Tenis Puma Flyer Runner',
                'category' => 'Dama',
                'image' => 'https://cdn1.coppel.com/images/catalog/pr/8128892-1.jpg',
                'price' => 689
            ],
            [
                'name' => 'Tenis Lacoste',
                'description' => 'Tenis Lacoste Powercourt',
                'category' => 'Niños',
                'image' => 'https://elektra.vtexassets.com/arquivos/ids/3219015/image-b8b508e95feb43709ffc5048770abf22.jpg?v=637690570891130000',
                'price' => 799
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
