<?php

namespace Database\Factories;
use App\Models\proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
  protected $model = Proveedor::class;
    public function definition(): array
    {
        return [
          'nombre'=>$this->faker->word,
          'contacto'=>$this->faker->numerify('########')
        ];
    }
}
