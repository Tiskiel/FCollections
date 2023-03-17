<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function wishlist() : HasMany {
        return $this->hasMany(WishList::class);
    }

    public function userlist() : HasMany {
        return $this->hasMany(UserList::class);
    }
}
