<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index(){
        $todos = Todo::query()->orderByDesc('created_at')->get();
        return view('todos.index')->with(['todos' => $todos]);
    }
    public function show(Todo $todo)
    {
        //dd($todoId);
        //$todo = Todo::findOrFail($todoId);
        //return $todo;
        return view('todos.show')->with(['todo'=> $todo]);
    }

//    public function show($todoId)
//    {
//        $todo = Todo::findOrFail($todoId);
//
//        return view('todos.show', compact('todo'));
//    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'description' => 'required'
        ]);

        $name = $request->get('name');
        $description = $request->get('description');

        $todo = new Todo();
        $todo->name = $name;
        $todo->description = $description;
        $todo->save();

        $request->session()->flash('success-info', 'Create successful!');

        return redirect('/todos');
    }

    public function edit(Todo $todo)
    {
        //dd($todoId);
        //$todo = Todo::findOrFail($todoId);
        //return $todo;
        return view('todos.edit')->with(['todo'=> $todo]);
    }

    public function update(Todo $todo, Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',
            'description' => 'required'
        ]);

        $name = $request->get('name');
        $description = $request->get('description');

        //$todo = Todo::findOrFail($todoId);
        $todo->name = $name;
        $todo->description = $description;
        $todo->save();

        $request->session()->flash('success-info', 'Update successful!');

        return redirect("/todos/{$todo->id}");
    }

    public function destroy(Todo $todo, Request $request)
    {
        //$todo = Todo::findOrFail($todoId);
        try{
            $todo->delete();
        }catch (\Exception $exception){
            dd($exception);
        }

        $request->session()->flash('success-info', 'Delete successful!');

        return redirect('/todos');
    }

    public function complete(Todo $todo)
    {
        $todo->is_completed = true;
        $todo->save();
        return redirect('/todos');
    }
}
