<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    protected $fillable = [
        'name', 'initials'
    ];

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
}
