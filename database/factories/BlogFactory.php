<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {



        $categories = [
            "Understanding Mental Health",
            "Personal Stories & Journeys",
            "Mindfulness & Meditation",
            "Self-Care & Daily Habits",
            "Relationships & Emotional Health",
            "Work, Study & Burnout",
            "Digital Wellness",
            "Therapy & Professional Help",
            "Growth & Mindset",
            "Mental Health in Society"
        ];

        return [
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph(4),
            'read_time' => $this->faker->numberBetween(5, 20),
            'views' => $this->faker->numberBetween(1000, 5000),
            'featured_image' => "https://picsum.photos/300/200",
            'category' => $this->faker->randomElement($categories),
            'author_name' => $this->faker->name,
            'author_excerpt' => $this->faker->sentence(3),
            'author_image' => "https://avatar.iran.liara.run/public",
            'body' => $this->faker->paragraph(20),

        ];
    }
}
