<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WishList extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function item() : HasMany {
        return $this->hasMany(Item::class);
    }
}
