@extends('layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Project</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary"
                    href="{{ route('Project.index')}}">
                    Back
                </a>
            </div>
        </div>
    </div>
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <h3><strong>{{ $Project->name }}</strong></h3>
            </div>
            <div class="form-group">
                <strong>Project description:</strong>
                @if ($Project->status === 'active')
                    {{ $Project->description }}
                @else
                    <del> {{ $Project->description }} </del>
                @endif
            </div>

            <div class="form-group">
                <strong>Project creator:</strong>
                {{ $Project->project_creator }}
            </div>

            <div class="form-group">
                <strong>Project starting date:</strong>
                {{ $Project->date_of_start }}
            </div>

            <div class="form-group">
                <strong>Project ending date:</strong>
                {{ $Project->date_of_end }}
            </div>


            <div class="form-group">
                <strong>Status:</strong>
                @if ($Project->status === 'active')
                    Active
                @else
                    <div style="color: red">Deleted</div>
                @endif
            </div>

        </div>
    </div>
@endsection