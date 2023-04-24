<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    public function store(Request $requset) {
        $task = new Task;
        $task->created_by = $requset->get('created_by');
        $task->workspace_id = $requset->get('workspace_id');
        $task->type = $requset->get('type');
        // $task->data = $requset->get('data');
        $task->status = 5;
        $task->name = $requset->get('name');
        $task->node_id = $requset->get('node_id');
        $task->save();
        return response()->json($task);
    }
    public function update(Request $request, $id) {
        $task = Task::findOrFail($id);
        $task->status = $request->get('status');
        $task->save();
        return response()->json($task);
    }
}
