<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItemExtra extends Model
{
    use HasFactory;
    public function extra_item()
    {
        return $this->belongsTo(ItemExtraDetail::class,'extra_id');
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
