<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = ['unit_of_measure_id','product_id','quantity'];

    public function unit_of_measure(){
        return $this->belongsTo(UnitOfMeasure::class);
    }
     public function product(){
        return $this->belongsTo(Product::class);
     }
}
