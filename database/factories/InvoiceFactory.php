<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'owner_id'      => Owner::factory(),
            'series'        => $this->faker->word,
            'number'        => $this->faker->randomNumber(),
            'issuance_date' => $this->faker->date(),
            'due_date'      => $this->faker->date(),
        ];
    }
}
