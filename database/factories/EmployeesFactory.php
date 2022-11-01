<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'codeemployee'=>$this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'firstname' => $this->faker->firstName,
            'secondname' =>$this->faker->firstName,
            'communname' =>$this->faker->firstName,
            'birthday' =>$this->faker->dateTimeInInterval($startDate = '-30 years', $interval = '+ 5 days', $timezone = null),
            'gender'=> $this->faker->title,
            'addresse' =>$this->faker->address,
            'state'=>$this->faker->state,
            'country'=>$this->faker->country,
            'pincode'=>$this->faker->randomDigit,
            'phonenumber'=>$this->faker->phoneNumber,
            'email'=>fake()->unique()->safeEmail(),
            'departement'=>$this->faker->firstName,
            'fonction'=>$this->faker->firstName,
            'company'=>$this->faker->firstName,
            'report_to'=>$this->faker->firstName,
            'images'=>$this->faker->imageUrl($width = 640, $height = 480),
            'created_at'=>now()
        ];
    }
}
