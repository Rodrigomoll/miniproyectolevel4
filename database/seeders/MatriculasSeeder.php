<?php

namespace Database\Seeders;

use App\Models\matriculas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatriculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        matriculas::factory(10)->create();
    }
}
