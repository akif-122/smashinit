<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemExtra extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function item()
    {
        return $this->belongsTo(Item::class,'item_id');
    }
    public function extra_details()
    {
        return $this->hasMany(ItemExtraDetail::class,'extra_item_id');
    }
}
