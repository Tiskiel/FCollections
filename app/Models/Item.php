<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category'];

    public function wishlist() : BelongsToMany {
        return $this->belongsToMany(WishList::class, 'wishlist_id');
    }

    public function userlist() : BelongsToMany {
        return $this->belongsToMany(UserList::class,'user_list_id');
    }

    public function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
