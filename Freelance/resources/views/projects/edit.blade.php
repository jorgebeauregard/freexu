@extends('layouts.sidebar')

@section('title','Edit a submitted project')

@section('content')

<!--/top story-->

<div class="row">    
  <div class="col-sm-12">
{!! Form::model($project,
    [
    'method' => 'PUT',
    'route' =>['projects.update', $project->id], 
    'files' => 'true'
    ]) !!}
        <div class="form-group">
          {!! Form::label('name', 'Project Name') !!}
          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Put the name of your project here!']) !!} 
        </div>
        <div class="form-group">
          {!! Form::label('description', 'Description') !!}
          {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'What is your project about?']) !!} 
        </div>
        <div class="form-group">
          {!! Form::label('category', 'Category') !!}
          {!! Form::select('category', $titulos, null, ['class' => 'form-control']) !!} 
        </div>
        <div class="form-group">
          {!! Form::label('image', 'Image') !!}
          {!! Form::file('image') !!} 
        </div>
        <br>
        <div class="form-group">
          {!! Form::submit('Edit your project', ['class' => 'btn btn-primary']) !!}
        </div>
      {!! Form::close() !!}
  </div>
</div>



@endsection