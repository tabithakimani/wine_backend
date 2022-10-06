<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Setup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'set:up';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Log::info('start');
        DB::table('products')->delete();
        DB::table('unit_of_measures')->delete();
        \DB::table('products')->insert(array (
            0 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'id' => 1,
                    'name' => 'Reisling',
                    'image' => 'https://storage.googleapis.com/wineshop-assets/wine-bottles/reisling.png',
                    'class' => 'white',
                    'quality' => 'vintage',
                    'details' => 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis eget lorem nec placerat. Morbi sed sapien eu lorem eleifend elementum. Donec scelerisque, odio quis placerat tempor, eros dui feugiat.',
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            1 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'id' => 2,
                    'name' => 'Reisling',
                    'image' => 'https://images.vivino.com/thumbs/Idmjm47oRtWK85oWJpRjgA_pb_x600.png',
                    'class' => 'white',
                    'quality' => 'vintage',
                    'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis eget lorem nec placerat. Morbi sed sapien eu lorem eleifend elementum.',
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            2 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'id' => 3,
                    'name' => 'Breidecker',
                    'image' => 'https://images.vivino.com/thumbs/tLtS1VwaRxCL25zZ-j6pZg_pb_x600.png',
                    'class' => 'white',
                    'quality' => 'vintage',
                    'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis eget lorem nec placerat. Morbi sed sapien eu lorem eleifend elementum..',
                    'updated_at' => '2021-12-01 12:34:15',
                ),

            3 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'id' => 4,
                    'name' => 'Chardonnay',
                    'image' => 'https://storage.googleapis.com/wineshop-assets/wine-bottles/chardonnay.png',
                    'class' => 'sparkling',
                    'quality' => null,
                    'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis eget lorem nec placerat. Morbi sed sapien eu lorem eleifend elementum..',
                    'updated_at' => '2021-12-01 12:34:15',
                ),

            4 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'id' => 5,
                    'name' => 'Breidecker',
                    'image' => 'https://images.vivino.com/thumbs/388WZvIkRNO3hu9vpbHAvA_pb_x600.png',
                    'class' => 'white',
                    'quality' => 'vintage',
                    'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis eget lorem nec placerat. Morbi sed sapien eu lorem eleifend elementum..',
                    'updated_at' => '2021-12-01 12:34:15',
                ),

            5 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'id' => 6,
                    'name' => 'Hukupapa',
                    'image' => 'https://images.vivino.com/thumbs/OuKH8BzBSoCcUvxbk8LTQA_pb_x600.png',
                    'class' => 'white',
                    'quality' => 'vintage',
                    'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis eget lorem nec placerat. Morbi sed sapien eu lorem eleifend elementum..',
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            6 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'id' => 7,
                    'name' => 'Hunters Gewurztraminer',
                    'image' => 'https://storage.googleapis.com/wineshop-assets/wine-bottles/hunters_gewurztraminer.png',
                    'class' => 'white',
                    'quality' => 'vintage',
                    'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis eget lorem nec placerat. Morbi sed sapien eu lorem eleifend elementum..',
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            7 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'id' => 8,
                    'name' => 'Hunters Late Harvest Sauvignon-Blanc',
                    'image' => 'https://images.vivino.com/thumbs/JiG0PoJRRpG_UYOwARTsXQ_pb_x600.png',
                    'class' => 'white',
                    'quality' => null,
                    'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis eget lorem nec placerat. Morbi sed sapien eu lorem eleifend elementum..',
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            8 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'id' => 9,
                    'name' => 'Hunters Mirumiru Non Vintage',
                    'image' => 'https://images.vivino.com/thumbs/U-4WD7JtRZCEaJd7b4_jCw_pb_x600.png',
                    'class' => 'red',
                    'quality' => null,
                    'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis eget lorem nec placerat. Morbi sed sapien eu lorem eleifend elementum..',
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            9 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'id' => 10,
                    'name' => 'Pinot Noir',
                    'image' => 'https://images.vivino.com/thumbs/QRQm5yweS1Sh3GNd1zriog_pb_x600.png',
                    'class' => 'red',
                    'quality' => 'vintage',
                    'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis eget lorem nec placerat. Morbi sed sapien eu lorem eleifend elementum..',
                    'updated_at' => '2021-12-01 12:34:15',
                ),
        ));

        \DB::table('unit_of_measures')->insert(array (
            0 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 1,
                    'name' => 'Case',
                    'price' => 204.9,
                    'product_id' => 1,
                    'quantity' => 0,
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            1 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 2,
                    'name' => 'Bottle',
                    'price' => 17.9,
                    'product_id' => 1,
                    'quantity' => 0,
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            2 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 3,
                    'name' => 'Case',
                    'price' => 300.88,
                    'product_id' => 2,
                    'quantity' => 0,
                    'updated_at' => '2021-12-01 12:34:15',
                ),

            3 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 4,
                    'name' => 'Bottle',
                    'price' => 24.35,
                    'quantity' => 0,
                    'product_id' => 2,
                    'updated_at' => '2021-12-01 12:34:15',
                ),

            4 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 5,
                    'name' => 'Case',
                    'price' => 134.45,
                    'product_id' => 3,
                    'quantity' => 0,
                    'updated_at' => '2021-12-01 12:34:15',
                ),

            5 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 6,
                    'name' => 'Bottle',
                    'price' => 12.23,
                    'quantity' => 0,
                    'product_id' => 3,
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            6 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 7,
                    'name' => 'Case',
                    'price' => 500.0,
                    'product_id' => 4,
                    'quantity' => 0,
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            7 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 8,
                    'name' => 'Bottle',
                    'price' => 55.5,
                    'product_id' => 4,
                    'quantity' => 0,
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            8 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 9,
                    'name' => 'Case',
                    'price' => 50.0,
                    'product_id' => 5,
                    'quantity' => 0,
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            9 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 10,
                    'name' => 'Bottle',
                    'price' => 5.5,
                    'product_id' => 5,
                    'quantity' => 0,
                    'updated_at' => '2021-12-01 12:34:15',
                ),

            10 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 11,
                    'name' => 'Case',
                    'price' => 198.0,
                    'product_id' => 6,
                    'quantity' => 0,
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            11 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 12,
                    'name' => 'Bottle',
                    'price' => 22.35,
                    'product_id' => 6,
                    'quantity' => 0,
                    'updated_at' => '2021-12-01 12:34:15',
                ),

            12 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 13,
                    'name' => 'Case',
                    'price' => 98.5,
                    'quantity' => 0,
                    'product_id' => 7,
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            13 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 14,
                    'name' => 'Bottle',
                    'price' => 12.5,
                    'quantity' => 0,
                    'product_id' => 7,
                    'updated_at' => '2021-12-01 12:34:15',
                ),

            14 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 15,
                    'name' => 'Case',
                    'quantity' => 0,
                    'price' => 630.0,
                    'product_id' => 8,
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            15 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 16,
                    'quantity' => 0,
                    'name' => 'Bottle',
                    'price' => 56.5,
                    'product_id' => 8,
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            16 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 17,
                    'name' => 'Case',
                    'quantity' => 0,
                    'price' => 630.0,
                    'product_id' =>9,
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            17 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 18,
                    'quantity' => 0,
                    'name' => 'Bottle',
                    'price' => 56.5,
                    'product_id' => 9,
                    'updated_at' => '2021-12-01 12:34:15',
                ),
        ));
        Log::info('end');
    }
}
