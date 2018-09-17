<?php

use Illuminate\Database\Seeder;

class currenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = array(
          array('symbol' => 'AR$','name' => 'Peso Argentino', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
          array('symbol' => 'US$','name' => 'EEUU Dolar', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
          array('symbol' => 'PYG','name' => 'Guaranies', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),

      );

      //  PropertyType::insert($data); // Eloquent approach
      DB::table('currencies')->insert($data); // Query Builder approach
    }
}
