<?php

namespace Database\Seeders;

use App\Models\Bab;
use App\Models\Buku;
use App\Models\Peran;
use App\Models\Santri;
use App\Models\Kemajuan;
use App\Models\Pengurus;
use App\Models\Detail_peran;
use App\Models\Detail_kemajuan;
use Illuminate\Database\Seeder;




class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
 
        Santri::factory(25) -> create();
        Peran::factory(10) -> create();
        Pengurus::factory(25) -> create();
        Buku::factory(50) -> create();
        Bab::factory(20) -> create();
        Kemajuan::factory(50) -> create();
        Detail_kemajuan::factory(300) -> create();
        Detail_peran::factory(80) -> create();
        
    }
























    
}
