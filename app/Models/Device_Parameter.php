<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device_Parameter extends Model
{
    use HasFactory;

    protected $table = 'devices_parameters';

    protected $fillable = [
        'id',
        'device_id',
        'parametre_id',
        'status',
        'isActif',
        'isDeleted',
        'createdUserId',
        'updatedUserId',
    ];
}
