<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('products')->insert([
            [
                'name'=>'Iphone',
                "price"=>"400,000",
                "description"=>"A Smartphone with 64gb ram and much more features",
                "category"=>"mobile",
                "gallery"=>"https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/A/L/176353_1595878601.jpg"
            ],
            [
                'name'=>'LG TV',
                "price"=>"350,000",
                "description"=>"24 Inches Full Hd Led TV",
                "category"=>"Television",
                "gallery"=>"https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/C/C/168883_1613718592.jpg"
            ],
            [
                'name'=>'LGS TV',
                "price"=>"450,000",
                "description"=>"LGS 43 Inches Full HD LED TV",
                "category"=>"Television",
                "gallery"=>"https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/S/H/160872_1589392938.jpg"
            ],
            [
                'name'=>'Samsung Refrigerator',
                "price"=>"100,000",
                "description"=>"Single Door Fridge with Partitions",
                "category"=>"Refrigerator",
                "gallery"=>"https://upload.wikimedia.org/wikipedia/commons/0/09/Food_into_a_refrigerator_-_20111002.jpg"
            ],
            [
                'name'=>'Backpack Bag',
                "price"=>"10,000",
                "description"=>"Roomie Laptop And School Backpack Bag",
                "category"=>"Bags",
                "gallery"=>"https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/L/J/80429_1525922970.jpg"
            ]
        ]);
    }
}
