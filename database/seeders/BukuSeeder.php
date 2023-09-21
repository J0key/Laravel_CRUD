<?php

namespace Database\Seeders;

use App\Models\BukuModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * 
     */
    public function run(): void
    {
        DB::statement('ALTER TABLE buku AUTO_INCREMENT = 1');
        DB::table('buku')->truncate();
        BukuModel::factory(13)->create();
        // DB::table('buku')->insert([
        //     'judul' => String::random(10),
        //     'penulis' => String::random(10)
        // ]);
    }
}
