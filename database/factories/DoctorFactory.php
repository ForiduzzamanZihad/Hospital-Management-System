<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\Boolean;

class DoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            $user = Doctor::factory()->create([
                'name' => Str::random(10),
                'phone' => Str::random(10),
                'photo' => 'img/' . Str::random(10),
                'address' => Str::random(10),
                'speciality' => Str::random(5),
                'status' => Str::random(2)
            ])
        ];
    }
}