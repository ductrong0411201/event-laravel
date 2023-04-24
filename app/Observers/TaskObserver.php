<?php

namespace App\Observers;

use App\Events\TaskChange;
use App\Models\Task;
use App\Models\User;
use App\Notifications\TaskChangeNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Mail;
class TaskObserver
{
    public function created(Task $task)
    {

        $message = "Task {$task->id} - {$task->name} is created successful";
        event(new TaskChange($task->id, [
            'message' => $message,
            'task_status' => $task->status,
        ]));
        $users = User::query()->where('id', $task->created_by)->get();
        $noti = Notification::send($users, new TaskChangeNotification());
        dd($noti);

    }
    public function updated(Task $task)
    {
        $message = "Task {$task->id} - {$task->name} is updated successful";
        event(new TaskChange($task->id, [
            'message' => $message,
            'task_status' => $task->status,
        ]));
        $users = User::query()->where('id', $task->created_by)->get();
        $noti = Notification::send($users, new TaskChangeNotification());
        // $mail = Mail::to('ductronglu0411@gmai.com')->send(new MailMessage);
        // Notification::route('mail', $users)->notify(new TaskChangeNotification());
    }
}
