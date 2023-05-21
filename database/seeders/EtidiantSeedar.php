<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Etidiant;


class EtidiantSeedar extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Etidiant::factrory(1)->create();
    }
}
