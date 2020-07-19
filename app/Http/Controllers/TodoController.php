<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ToDoCreateRequest;
use App\Todo;

class TodoController extends Controller
{

    public function index()
    {
        $todos = Todo::orderBy('completed')->get();

        return view('todos.index', compact('todos'));
    }
    public function store(ToDoCreateRequest $request)
    {

        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo Created Successfully');
    }
    public function edit(Todo $todo)
    {

        return view('todos.edit', compact('todo'));
    }
    public function update(Todo $todo, ToDoCreateRequest $request)
    {

        $todo->update(['title' => $request->title]);
        return redirect(route('todo.index'))->with('message', 'Updated!');
    }

    public function complete(Todo $todo)
    {

        $todo->update(['completed' => true]);
        return redirect()->back()->with('message', 'Task Marked as completed!');
    }
    public function incomplete(Todo $todo)
    {

        $todo->update(['completed' => false]);
        return redirect()->back()->with('message', 'Task Marked as incompleted!');
    }
    public function destroy(Todo $todo)
    {

        $todo->delete();
        return redirect()->back()->with('message', 'Task Deleted!');
    }
}
