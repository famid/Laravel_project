<?php

namespace App\Services\Admin;

use App\Project;
use Auth;

class ProjectService
{
    public function getAuthUserProjects()
    {
        return Auth::user()->projects;
    }
    public function createNewProject($request)
    {
        Project::create([
            'user_id' => Auth::user()->id,
            'title'=>$request->title,
            'description'=>$request->description,
            'total_point'=>0,
            'deadline'=>$request->deadline,
        ]);
    }

    public function deleteProject($project)
    {
        $project->delete();

    }

    public function updateProject($project,$request)
    {
        $project->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'deadline'=>$request->deadline,
        ]);
    }
}
