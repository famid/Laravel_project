<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProjectRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\ProjectService;
use App\Project;

class ProjectController extends Controller
{
    private $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    public function index()
    {
        $projects = $this->projectService->getAuthUserProjects();
        return view('admin.project.index',compact('projects'));
    }

    public function create()
    {

        return view('admin.project.create');
    }

    public function store(ProjectRequest $request)
    {
        $this->projectService->createNewProject($request);
        return redirect(route('admin.project.index'));
    }

    public function show(Project $project)
    {

        return view('admin.project.show',compact('project'));
    }

    public function edit(Project $project)
    {
        return view('admin.project.edit',compact('project'));
    }
    public function update(Project $project,ProjectRequest$request)
    {

        $this->projectService->updateProject($project,$request);

        return redirect(route('admin.project.index'));
    }
    public function destroy(Project $project)
    {
        $this->projectService->deleteProject($project);
        return redirect(route('admin.project.index'));
    }
}
