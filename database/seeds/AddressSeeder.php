<?php

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
        	'type'=>'Tipo para payments',
        	'rec_address'=>'direccion recepcion',
        	'text_id'=>'id de prueba',
        	'amount'=>5500
        ]);
    }
}
