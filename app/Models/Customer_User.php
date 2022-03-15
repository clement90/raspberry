<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_User extends Model
{
    use HasFactory;

    protected $table = 'customers_users';

    protected $fillable = [
        'id',
        'customer_id',
        'user_id',
        'status',
        'isActif',
        'isDeleted',
        'createdUserId',
        'updatedUserId',
    ];
}
