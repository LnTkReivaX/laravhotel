<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        return [
            'author_id' => \App\Models\User::factory(),
            'title' => $title,
            'content' => $this->faker->paragraph(),
            'ingredients' => $this->faker->paragraph(),
            'url' => str_replace(' ', '-', $title),
            'tags' =>$this->faker->text(),
            'status' => 'published',

        ];
    }
}