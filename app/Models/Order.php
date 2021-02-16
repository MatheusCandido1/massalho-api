<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'ready_date', 'quantity', 'user_id', 'product_id', 'status'
    ];

    protected $casts = [
        'ready_date'  => 'date:d/m/Y - H:m',
    ];

    protected $appends = ['product_id_name'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function getProductIdNameAttribute() {
        return $this->product()->first()->name . ' - ' . $this->product()->first()->size . ' ' . $this->product()->first()->measure()->first()->initials;
    }

    public function solicitation()
    {
        return $this->belongsToMany('App\Solicitation', 'solicitations_orders', 'order_id', 'solicitation_id')->withTimestamps();;
    }
}
