<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_Date', 'orden_Status', 'Customer_id',
    ];

    public function customer():BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
