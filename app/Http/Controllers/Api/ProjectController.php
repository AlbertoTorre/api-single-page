<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProjectRepository;

class ProjectController extends Controller
{
    private $repository;

    public function __construct(ProjectRepository $projectRepository)
    {
        $this->repository = $projectRepository;
    }

    public function featureds(Request $request)
    {
        $featureds = $this->repository->featureds($request->featured);
        return response()->json($featureds, 200);
    }
}
