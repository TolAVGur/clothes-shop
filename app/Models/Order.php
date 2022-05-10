<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function user() {
        return $this->belongsTo(User::class); // навигационная ссылка (Заказ принадлежит юзеру)
    }

    public function orderItems() {
        return $this->hashMany(OrderItem::class); // 
    }

    public function shipping() {
        return $this->hashOne(Shipping::class); // 
    }

    public function transaction() {
        return $this->hashOne(Transaction::class); // 
    }

}
