<?php

namespace App\Services\Admin;

use App\Project;
use App\Task;
use Auth;

class TaskService
{
    public function createNewTask($request)
    {
        Task::create([
            'project_id' => Project::project()->id,
            'title'=>$request->title,
            'description'=>$request->description,
            'point'=>$request->point,
            'deadline'=>$request->deadline,
        ]);
    }

}
