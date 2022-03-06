<?php

namespace Database\Factories;

use App\Models\ReportingTeacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportingTeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = ReportingTeacher::class;

    public function definition()
    {
        return [
            'name'=>$this->faker->name
        ];
    }
}
