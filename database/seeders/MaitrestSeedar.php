<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MaitreSt;

class MaitreSeedar extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::factrory(1)->create();
    }
}
