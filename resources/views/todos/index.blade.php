@extends('todos.layout')

@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-info">
            <div class="panel-heading">New Task</div>

            <div class="panel-body">

                <form action="{{route('todo.store')}}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Task</label>

                        <div class="col-sm-6">
                            <input type="text" name="title" id="task-name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" name="Create" value="Create" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Create Task</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @if (count($todos) > 0)
        <div class="panel panel-info">
            <div class="panel-heading">Current Tasks</div>

            <div class="panel-body">

                <h3 class="border-b pb-4">Task</h3>


                <ul class="my-5">
                    <x-alert />
                    @foreach($todos as $todo)
                    <li class="flex justify-between p-2">
                        <div>
                            @include('todos.complete-button')
                        </div>
                        @if($todo->completed)
                        <p class="line-through">{{$todo->title}}</p>
                        @else
                        <p>{{$todo->title}}</p>
                        @endif

                        <div>
                            <a href="{{route('todo.edit',$todo->id)}}" class="text-blue-400 cursor-pointer text-white"><span class="fas fa-edit px-2"></span></a>

                            <span onclick="event.preventDefault();
                                    if(confirm('Are you really want to delete?')){
                                    document.getElementById('form-delete-{{$todo->id}}').submit()
                                    }
                                    " class="fas fa-trash text-red-300 cursor-pointer px-2"></span>

                            <form style="display:none" id="{{'form-delete-'.$todo->id}}" method="post" action="{{route('todo.destroy', $todo->id)}}">
                                @csrf
                                @method('delete')
                            </form>
                        </div>

                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
        @endif
    </div>
</div>
@endsection