<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WishList extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName() {
        return 'slug';
    }

    // protected $with = ['item', 'user'];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function item() : BelongsToMany {
        return $this->belongsToMany(Item::class, 'item_wishlist', 'wishlist_id', 'item_id');
    }
    
}
