@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Project Title: <h4>{{$project->title}}</h4>
                        <br>
                        Project Deadline: <h6>{{$project->deadline}}</h6>
                    </div>

                        @method('DELETE')

                        <div class="card bg-dark text-white">
                            <div class="card-body">

                                <p>
                                    {{$project->description}}
                                </p>

                            </div>
                        </div>
                        <br>


                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link btn btn-dark" href="{{route('admin.project.edit',[$project->id])}}">Edit Project</a>
                        </li>
                        <li class="nav-item ml-2">
                            <a class="nav-link btn btn-dark" href="{{route('admin.project.task.create',[$project->id])}}">Create Task</a>
                        </li>
                    </ul>

                    </div>
                <br>
                <div class="align-content-between">

                   <h5>Task</h5>

                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
