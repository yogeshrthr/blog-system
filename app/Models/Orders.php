<?php

namespace App\Models;
use App\Models\Orders;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table ='orders';
    protected $primary_key ='id';
    protected $fillable=[
        'amount',
        'user_id'
    ];
    protected $cast=[
        'amount'=>'decimal:2',
    ]; // valeu will comein formatetd

    // valeue will autometically will oem in resltu as formated
    // protected $casts = [
    //     'price' => 'decimal:2',     // Cast to decimal
    //     'is_active' => 'boolean',   // Cast to boolean
    //     'metadata' => 'array',      // Auto JSON encode/decode
    //     'options' => 'object',      // Cast to object
    //     'published_at' => 'date',   // Carbon instance
    // ];
    // public function scopeGreaterThan($query, $amount)
    // {
    //     return $query->where('amount', '>', $amount);
    // }

}
