<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command_Device extends Model
{
    use HasFactory;

    protected $table = 'commands_devices';

    protected $fillable = [
        'id',
        'command_id',
        'device_id',
        'status',
        'isActif',
        'isDeleted',
        'createdUserId',
        'updatedUserId',
    ];
}
