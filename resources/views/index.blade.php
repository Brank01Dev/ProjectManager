@extends('layout') 
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Project Manager</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('Project.create') }}">
                    Add an project!
                </a>
            </div>
        </div>
    </div> 
 
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif 
 
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Creator Name</th>
            <th>Starting date</th>
            <th>Ending date</th>
            <th style="width:280px">Action</th>
        </tr> 
 
        @foreach($Project as $project)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $project->name}}

                <td>@if ($project->status === 'active')
                    {{ $project->description }}
                @else
                    <del> {{ $project->description }} </del>
                @endif
                    
                @if ($project->status == 'deleted')
                    <td style="color: red">Deleted</td>
                @else
                    <td>Active
                @endif

                <td>{{ $project->project_creator}} 
                <td>{{ $project->date_of_start}} 
                <td>{{ $project->date_of_end}}                   
 
                <td>
                    <form action="{{ route('Project.destroy', $project->id) }}" method="POST">
                        <a class="btn btn-info"
                            href="{{ route('Project.show', $project->id) }}">
                            Show
                        </a> 
 
                        <a class="btn btn-primary"
                            href="{{ route('Project.edit', $project->id) }}">
                            Edit
                        </a> 
 
    
                        {{ csrf_field() }}
                       {{ method_field('DELETE') }}
  
 
                        <button type="submit" class="btn btn-danger">
                            Edit Status
                        </button> 
 
                    </form>
                </td>
            </tr>
            
        @endforeach
    </table> 
 
    
 
@endsection