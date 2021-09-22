<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create();
        echo "User email: {$user->email} \n";
        echo "Token de acceso unico: \n {$user->createToken('tokenAccessUnique')->plainTextToken} \n";
        echo  "----------------------------\n\n";

        $projects = Project::factory(15)->create();
        echo  "Projects \n";
        foreach($projects as $project) {
            echo "Title project: {$project->title} \n";
        }
    }
}
