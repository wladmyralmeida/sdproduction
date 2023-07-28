<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HandymanTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('handyman_types')->delete();
        
        \DB::table('handyman_types')->insert(array (
            0 => 
            array (
                'commission' => 20.0,
                'type' => 'percent',
                'created_at' => '2021-02-14 11:43:51',
                'id' => 1,
                'name' => 'Empresa/Gerente',
                'status' => 1,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'commission' => 5.0,
                'type' => 'fixed',
                'created_at' => '2021-02-14 11:58:53',
                'id' => 2,
                'name' => 'Profissional Individual',
                'status' => 1,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}