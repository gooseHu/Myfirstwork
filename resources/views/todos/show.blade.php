@extends('layouts.app')

@section('title', 'TODO SHOW')

@section('content')
    <h1 class="text-center my-5">{{$todo->name}}</h1>
    <div class="row justify justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold d-flex align-items-center justify-content-between">
                    Detail
                    @if($todo->is_completed)
                        <span class="badge badge-pill badge-success float-right">已完成</span>
                    @else
                        <span class="badge badge-pill badge-danger float-right">未完成</span>
                    @endif
                </div>
                <div class="card-body">
                    {{$todo->description}}
                </div>
                <div class="card-footer">
                    <a href="/todos/{{$todo->id}}/edit" class="btn btn-block btn-outline-success">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection


