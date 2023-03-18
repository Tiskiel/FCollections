<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemWishList extends Model
{
    use HasFactory;

    public function wishList()
    {
        return $this->belongsTo(WishList::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
