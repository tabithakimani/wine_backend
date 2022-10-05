<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitOfMeasureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        'name','quantity','price','product_id'
        \DB::table('unit_of_measures')->delete();

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
                    'product_id' => 1,
                    'updated_at' => '2021-12-01 12:34:15',
                ),
            6 =>
                array (
                    'created_at' => '2021-12-01 12:34:15',
                    'deleted_at' => NULL,
                    'id' => 7,
                    'name' => 'Case',
                    'price' => 500.0,
                    'product_id' => 1,
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
                    'product_id' => 1,
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
                    'product_id' => 1,
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
                    'product_id' => 1,
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
                    'product_id' => 1,
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
                    'product_id' => 1,
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
                    'product_id' => 1,
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
                    'product_id' => 1,
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
                    'product_id' => 1,
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
                    'product_id' => 1,
                    'updated_at' => '2021-12-01 12:34:15',
                ),
        ));

    }
}
