<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Summary of UserList
 */
//For next step of refacto => rename UserList to UserCollections
class UserList extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['item', 'user'];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function item() : BelongsToMany {
        return $this->belongsToMany(Item::class, 'item_user_list', 'user_list_id', 'item_id');
    }
    
}
