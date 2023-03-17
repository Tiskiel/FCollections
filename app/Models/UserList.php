<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Summary of UserList
 */
class UserList extends Model
{
    use HasFactory;

    protected $guarded = [];

    
    public function getKeyName() : string
    {
        return 'id'; 
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function item() : HasMany {
        return $this->hasMany(Item::class);
    }
}
