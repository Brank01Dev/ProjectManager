@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Prroject</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary"
                    href="{{ route('Project.index') }}">
                    Back
                </a>
            </div>
        </div>
    </div>
  
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Problems!</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('Project.update', $Project->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Project name:</strong>
                <input type="text" name="name" value="{{ $Project->name }}"
                class="form-control">
            </div>

            <div class="form-group">
                <strong>Project description:</strong>
                <input type="text" name="description" value="{{ $Project->description }}"
                class="form-control">
            </div>

            <div class="form-group">
                <strong>Project creator name:</strong>
                <input type="text" name="project_creator" value="{{ $Project->project_creator }}"
                class="form-control">
            </div>

            <div class="form-group">
                <strong>Project starting date:</strong>
                <input type="date" name="date_of_start" value="{{ $Project->date_of_start }}"
                class="form-control">
            </div>

            <div class="form-group">
                <strong>Project ending date:</strong>
                <input type="date" name="date_of_end" value="{{ $Project->date_of_end }}"
                class="form-control">
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Project status:</strong>
                <select name="status" class="form-select">
                    @php
                    $statuses = ['active', 'deleted'];
                    @endphp
                    @foreach ($statuses as $status)
                        @if($status === $Project->status)
                            <option selected value="{{ $status }}">{{ $status }} </option>
                        @else
                            <option value="{{ $status }}">{{ $status }} </option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
  
@endsection