<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i < 10;$i++){
            DB::table('messages')->insert([
                'message' => "я строка №{$i}"
            ]);
        }

    }
}
