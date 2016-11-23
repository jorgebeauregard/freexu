@extends('layouts.sidebar')

@section('title','My projects')

@section('content')
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>            
                   @if($project->creator_id == 1)
                      <td>{{$project->id}}</td>
                      <td>{{$project->name}}</td>
                      <td>{{ App\Category::find($project->category_id)->name }}</td>
                      <td><a href="" class="btn btn-danger"></a><a href="" class="btn btn btn-warning"><span class="glyphicon glyphicon-remove"></span><a></a></a></td>
                    @endif
                @endforeach
            </tr>
        </tbody>
    </table>
@endsection