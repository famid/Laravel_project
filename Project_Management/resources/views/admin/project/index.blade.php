@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link btn btn-dark" href="{{route('admin.project.create')}}">Create Project</a>
                            </li>
                        </ul>


                        <table width="100%">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Total Point</th>
                                <th>Deadline</th>
                                <th>Show Project</th>
                            </tr>
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{$project->title}}</td>
                                    <td>{{$project->description}}</td>
                                    <td>{{$project->total_point}}</td>
                                    <td>{{$project->deadline}}</td>
                                    <td><a class="btn btn-dark btn-sm" href="{{route('admin.project.show',[$project->id])}}">Show Project</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
