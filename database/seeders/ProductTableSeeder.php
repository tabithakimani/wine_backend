<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

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

    }
}
