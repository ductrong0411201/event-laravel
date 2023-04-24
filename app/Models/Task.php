<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Task extends Model
{
    use Notifiable;
    use HasFactory;
    protected $table = 'tasks';
    protected $fillable = [
        'id',
        'created_by',
        'workspace_id',
        'type',
        'data',
        'status',
        'created_at',
        'updated_at',
        'name',
        'job_id',
        'queue_name',
        'result_type',
        'result_ids',
        'start_time',
        'end_time',
        'pipeline_step_id',
        'owner_id',
        'upload_file_paths',
        'token_cost',
        'input',
        'logs_path',
    ];
    public function routeNotificationForMail($noti) {
        return ['ductronglu0411@gmail.com','trong.ld195935@sis.hust.edu.vn'];
    }
}
