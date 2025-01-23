<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Item extends Model
{
    protected $guarded = ['id'];

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "purchases", "item_id", "user_id");
    }
}
