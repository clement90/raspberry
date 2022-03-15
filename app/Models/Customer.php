<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'id',
        'name',
        'adress_zip_code',
        'adress_country',
        'adress_street',
        'adress_number',
        'reference',
        'status',
        'isActif',
        'isDeleted',
        'createdUserId',
        'updatedUserId',
    ];
}
