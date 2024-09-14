<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    public function item()
    {
        return $this->belongsTo(Item::class,'item_id');
    }
    public function order_item_extras()
    {
        return $this->hasMany(OrderItemExtra::class,'order_item_id');
    }
    public function item_extras()
    {
        return $this->hasMany(OrderItemExtra::class,'item_id');
    }
}
