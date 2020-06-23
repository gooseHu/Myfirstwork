@extends('layouts.app')

@section('title', 'TODO EDIT')

@section('content')
    <h1 class="text-center my-5">EDIT TODO</h1>
    <div class="row justify justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    EDIT
                </div>
                <div class="card-body">
                    <form action="/todos/{{$todo->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{$todo->name}}"
                                   class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" rows="3" class="form-control
                                      @error('description') is-invalid @enderror">
                                        {{$todo->description}}</textarea>
                            @error('description')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



