<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code', 'name', 'size', 'quantity', 'measure_id', 'type_id' 
    ];

    protected $appends = ['type_id_name','measure_id_name'];

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function getTypeIdNameAttribute() {
       return $this->type()->first()->name;
    }

    public function getMeasureIdNameAttribute() {
        return $this->measure()->first()->initials;
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
    

    public function measure()
    {
        return $this->belongsTo('App\Measure');
    }
}
