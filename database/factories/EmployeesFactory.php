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
            'codeemployee'=>$this->faker->address,
            'firstname' => $this->faker->firstName,
            'secondname' =>$this->faker->firstName,
            'birthday' =>$this->faker->address,
            'gender'=> $this->faker->title,
            'addresse' =>$this->faker->address,
            'state'=>$this->faker->state,
            'country'=>$this->faker->country,
            'pincode'=>$this->faker->randomDigit,
            'phonenumber'=>$this->faker->phoneNumber,
            'departement'=>$this->faker->address,
            'designation'=>$this->faker->address,
            'report_to'=>$this->faker->firstName,
            'created_at'=>now()

        
        ];
    }
}
