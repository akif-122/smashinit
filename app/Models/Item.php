<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function extras()
    {
        return $this->hasMany(ItemExtra::class,'item_id')->orderBy('section_order', 'asc')->get();
    }
    public function item_extras()
    {
        return $this->hasMany(ItemExtra::class,'item_id')->orderBy('section_order', 'asc');
    }
}
