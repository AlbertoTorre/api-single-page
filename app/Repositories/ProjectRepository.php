<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectRepository extends BaseRepository {

    public function __construct(Project $project)
    {
        parent::__construct($project);
    }

    public function featureds($featured)
    {
        return $this->model
                    ->whereFeatured($featured)
                    ->get();
    }
}
