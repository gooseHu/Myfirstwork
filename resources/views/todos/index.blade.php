@extends('layouts.app')

@section('title', 'TODO LIST')
@section('content')
    <h1 class="text-center my-5">Todo Page</h1>
    <div class="row justify justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Todo List
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($todos ?? '' as $todo)
                            <li class="list-group-item">
                                    <span @if($todo->is_completed) style="text-decoration: line-through"@endif>
                                        {{$todo->name}}
                                    </span>
                                {{-- {{$todo->name}}
                                 @if($todo->is_completed)
                                     <span class="badge badge-pill badge-success">已完成</span>
                                 @else
                                     <span class="badge badge-pill badge-secondary">未完成</span>
                                 @endif  --}}

                                <a class="btn btn-primary float-right" href="/todos/{{$todo->id}}">View</a>

                                <form action="/todos/{{$todo->id}}" method="post"
                                      class="d-inline-block float-right mr-2">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                                @if(!$todo->is_completed)
                                    <form action="/todos/{{$todo->id}}/completed" method="post"
                                          class="d-inline-block float-right mr-2">
                                        @method('patch')
                                        @csrf
                                        <button type="submit" class="btn btn-warning">Complete</button>
                                    </form>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection


