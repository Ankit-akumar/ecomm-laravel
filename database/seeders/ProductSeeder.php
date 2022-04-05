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
                'name'=>'Dell Inspirion 15',
                'price'=>'86990',
                'discription'=>'11th Gen Intel® Core™ i7-11390H (12 MB cache, 4 cores, 8 threads, up to 5.00 GHz Turbo), 16 GB, 2 x 8 GB, DDR4, 3200 MHz, 512 GB, M.2, PCIe NVMe, SSD, NVIDIA® GeForce® MX450 with 2GB GDDR5 graphics memory',
                'category'=>'Laptops',
                'gallery'=>'https://images.app.goo.gl/4fzjG3CjdSnkgX1d6',
            ],
            [
                'name'=>'Asus Vivobook',
                'price'=>'50000',
                'discription'=>'Intel Core i5-8265U 4 x 1.6 - 3.9 GHz, Whiskey Lake-U,8192 MB, DDR4-2400, dual-channel, one SODIMM slot (occupied), 4GB soldered, 37 Wh, 4850 mAh Lithium-Ion, 7.7 V, Kingston RBUSNS8180DS3256GJ, 256 GB',
                'category'=>'Laptops',
                'gallery'=>'https://images.app.goo.gl/sCFvRo9JrTMXHn8x7',
            ],
            [
                'name'=>'Lenovo i3',
                'price'=>'11999',
                'discription'=>'Hard Drive Capacity	320GB,Brand	Lenova, Screen Size	15", Processor Type	i3, Memory Size	2GB, Warranty 1 Year, Color	Black, Power Source	Electric',
                'category'=>'Desktop PCs',
                'gallery'=>'https://images.app.goo.gl/bKQ3DBR8MaCFVUWW8',
            ],
            [
                'name'=>'HP Mouse X200',
                'price'=>'649',
                'discription'=>'HP Wireless Mouse X200 with Adjustable DPI Settings, 2.4GHz Wireless Connection, Compatible with HP PCs with Available USB-A Port / 3 Years Warranty, 6VY95AA (Black)',
                'category'=>'Accessories',
                'gallery'=>'https://images.app.goo.gl/r5VGbG4Gge5omgwD8',
            ]
        ]);
    }
}
