<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'cedula'=>$this->faker->numberBetween($min = 1000, $max = 9000),
            'nombre' => $this->faker->firstname,
            'apellido'=>$this->faker->lastname,
            'direccion'=>$this->faker->address,
            'telefono'=>$this->faker->phoneNumber,
            'rol_id'=>$this->faker->numberBetween($min=1,$max=5)
        ];
    }
}
