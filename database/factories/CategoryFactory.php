<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->fake()->name(),
            'parent_id' => 0,
            'icon' =>'1',
            'description' => 'Đây là dòng mô tả',
            'slug'=> '1234',
            'status'=> 1,

        ];
    }
}
