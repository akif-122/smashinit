<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemExtraDetail extends Model
{
    use HasFactory;
    public function item_extra()
    {
        return $this->belongsTo(ItemExtra::class,'extra_item_id');
    }
}
