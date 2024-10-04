<?php

namespace Database\Seeders;
use App\Models\proveedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class proveedorseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Proveedor::factory(500)->create();
       
    }
}
