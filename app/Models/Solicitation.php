<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Solicitation;

class Solicitation extends Model
{
    protected $fillable = [
        'code', 'ready_date', 'status'
    ];

    protected $casts = [
        'ready_date'  => 'date:d/m/Y - H:m',
    ];

    public function order()
    {
        return $this->belongsToMany('App\Models\Order', 'solicitations_orders', 'order_id', 'solicitation_id')->withTimestamps();;
    }
}
