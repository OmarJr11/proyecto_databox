<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserRole;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Roles extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = [
        'id',
        'code',
        'name',
        'creator',
    ];

    protected static function userRole(): HasOne
    {
        return $this->hasOne(UserRole::class);
    }
}
