


@extends('layouts.app')

@section('content')
 @if (session('statuss'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('statuss') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

<div class="container">
    

    <div class="container col-md-10 col-md-offset-2">
        <div class="well well bs-component">
            <div class="content">
                <h1 class="header">{!! $task->name !!}</h1>
                <p><strong>Start Date :</strong> {!! $task->start_date !!}</p>
                <p><strong>End Date :</strong> {!! $task->end_date !!}</p>
                <p><strong>Description :</strong> {!! $task->description !!}</p>
                <p><strong>Status :</strong>     {!! $task->status !!}</p>

                
                @if($task->status=='waiting')
     <form method="post" action="{{  route('Running',$task->id) }}">
         @csrf
                 <input type="hidden" name="status" value="Running">

                <button type="submit" class="btn btn-primary">Running</button>
                
     </form><br>
     @endif
     <form method="post">
                    @csrf
                    <a href="{!! action('ProjectController@update' , $project->id ) !!}"
                        class="btn btn-primary">Edit</a>
     </form>


            </div>
        </div>
    </div>

    <div class="container col-md-10 col-md-offset-2">
        <hr>
        @foreach ($errors->all() as $error)
        <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
         @if (session('danger'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
      
    </div>

    @endsection
