<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        \DB::table('pelajaran')->insert([
            [
                "nama_pelajaran" => "Matematika",
                "kelas" => "XI",
                "desc" => "Ini Mata Matematika Pelajaran kelas XI",
            ],
            [
                "nama_pelajaran" => "Bahasa Indonesia",
                "kelas" => "XI",
                "desc" => "Ini Mata Pelajaran Bahasa Indonesia kelas XI",
            ],
        ]);
    }
}
