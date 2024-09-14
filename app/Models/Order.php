<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function order_items()
    {
        return $this->hasMany(OrderItem::class,'order_id');
    }
    public function item_extras()
    {
        return $this->hasMany(ItemExtra::class,'item_id')->orderBy('section_order', 'asc');
    }
}
