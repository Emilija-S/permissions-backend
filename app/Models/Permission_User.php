<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Permission_User extends Pivot
{
    use HasFactory;

    protected $fillable = ['user_id', 'permission_id'];
}
