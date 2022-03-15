<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $table = 'devices';

    protected $fillable = [
        'id',
        'customer_id',
        'reference',
        'name',
        'ip_local',
        'ip_public',
        'mac_adress',
        'status',
        'isActif',
        'isDeleted',
        'createdUserId',
        'updatedUserId',
    ];
}
