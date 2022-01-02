<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'samsung s22',
            'category'=>'mobile',
            'price'=>'120000',
            'description'=>'ekdum mast',
            'gallary'=>'https://m.media-amazon.com/images/I/612jqOSsxYL._SL1200_.jpg'
            ],
            [
                'name'=>'laptop charger',
                'category'=>'laptop',
                'price'=>'1200',
                'description'=>'fast',
                'gallary'=>'https://m.media-amazon.com/images/I/71gNw71y50L._SL1500_.jpg'
            ],
            [
                'name'=>'laptop keyboard',
                'category'=>'laptop',
                'price'=>'1690',
                'description'=>'smooth',
                'gallary'=>'https://m.media-amazon.com/images/I/61ae09NfP3L._SL1000_.jpg'
            ],
            [
                'name'=>'samsung s20',
                'category'=>'mobile',
                'price'=>'49,990.00 ',
                'description'=>'brand new',
                'gallary'=>'https://m.media-amazon.com/images/I/81vDZyJQ-4L._SL1500_.jpg'
            ]
        ]);
    }
}
