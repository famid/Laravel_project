<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProjectRequest;
use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\TaskService;
use App\Task;
use App\Project;

class TaskController extends Controller
{
    protected $taskService;
    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function create(Project $project)
    {

        return view('admin.task.create',compact('project'));
    }

    public function store(TaskRequest $request)
    {
        $this->taskService->createNewTask($request);
        return redirect(route('admin.task.'));
    }
}
