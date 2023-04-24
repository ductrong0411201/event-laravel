<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
class Notification extends Model
{
    use HasFactory;
    protected $table = 'notifications';
    use Uuid;
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        "id",
        "type",
        "notifiable_type",
        "notifiable_id",
        "data",
        "created_at",
        "updated_at",
        "read_at",
        "workspace_id",
        "status",
        "output",
        "user_id"
    ];
}
