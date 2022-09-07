<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class EdulevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('edulevels')->insert([
            [
                "name" => "SD Sederajat",
                "desc" => "SD / MI",
            ],
            [
                "name" => "SLTP Sederajat",
                "desc" => "SMP / MTS",
            ],
        ]);
    }
}
