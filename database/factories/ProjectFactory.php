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
            'image' => $this->faker->image(),
            'title' => $this->faker->title(),
            'description' => $this->faker->words(3, true),
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
