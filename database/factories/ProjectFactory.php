<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition()
    {
        return [
            // 'image' => $this->faker->imageUrl(640, 480, "business"),
            'image' => "https://source.unsplash.com/collection/1907".random_int(20, 29)."/1600x900",
            'title' => $this->faker->sentence(2),
            'description' => $this->faker->paragraph(3),
            'tags' => json_encode($this->tags()),
            'featured'=> $this->faker->boolean()
        ];
    }

    protected function tags()
    {
        $qtyTags = 0;
        $tags=[];

        while( $qtyTags < random_int(2, 6) ){
            $tags[] = $this->faker->slug();
            $qtyTags++;
        }

        return $tags;
    }
}
