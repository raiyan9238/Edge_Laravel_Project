@extends('layouts.app')

@section('content')
<h1 class="mb-4">My Task List</h1>

<form method="POST" action="/tasks">
    @csrf
    <div class="input-group mb-3">
        <input type="text" name="name" class="form-control" placeholder="New task">
        <button class="btn btn-primary">Add Task</button>
    </div>
</form>

<ul class="list-group">
    @foreach($tasks as $task)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $task->name }}
        <form method="POST" action="/tasks/{{ $task->id }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection