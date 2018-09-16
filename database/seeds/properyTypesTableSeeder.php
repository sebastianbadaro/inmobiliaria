<?php

use Illuminate\Database\Seeder;

class properyTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      $data = array(
          array('name' => 'Alquiler', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
          array('name' => 'Venta', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
          array('name' => 'Loteo', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
      );

    //  PropertyType::insert($data); // Eloquent approach
      DB::table('property_types')->insert($data); // Query Builder approach

    }
}
