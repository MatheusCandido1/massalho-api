<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'quantity', 'user_id', 'product_id', 'status'
    ];


    protected $appends = ['product_id_name'];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function getProductIdNameAttribute() {
        return $this->product()->first()->name . ' - ' . $this->product()->first()->size . ' ' . $this->product()->first()->measure()->first()->initials;
    }

    public function solicitation()
    {
        return $this->belongsToMany('App\Models\Solicitation', 'solicitations_orders', 'order_id', 'solicitation_id')->withTimestamps();
    }
}
