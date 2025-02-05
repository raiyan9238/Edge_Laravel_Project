<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Show all tasks
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    // Store new task
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|max:255']);
        
        Task::create(['name' => $request->name]);
        
        return redirect('/');
    }

    // Delete task
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/');
    }
}