<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\Task;
/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/


Broadcast::channel('task.{id}', function ($id) {
    return true;
});

Broadcast::channel('user.{id}', function ($user,$id) {
    return (int) $user->id === (int) $id;
});
