<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactForm>
 */
class PianoLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username' => $this->faker->username(20),
            'userid' => $this->faker->postcode(),
            'song' => $this->faker->username(20), 
            'composer' => $this->faker->username(20), 
            'playingage' => $this->faker->numberBetween(1, 10),
            'difficulty' => $this->faker->numberBetween(1, 10),
            'degree' => $this->faker->numberBetween(1, 10),
            'playingtimerp' => $this->faker->numberBetween(1, 10),
            'playingtimenrp' => $this->faker->numberBetween(1, 10),
            'score' => $this->faker->username(20),  
            'readingperiod' => $this->faker->numberBetween(1, 10),  
            'exercise' => $this->faker->username(20),   
            'technique' => $this->faker->username(20),   
            'recording' => $this->faker->username(20),  
            'url' => $this->faker->url(20),   
            'soundsource' => $this->faker->username(20),   
            'books' => $this->faker->username(20),  
            // 'caution' => $this->faker->username(20),
        ];
    }
}
