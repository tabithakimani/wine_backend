<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'class', 'quality'];


    public function unit_of_measures(){
        return $this->hasMany(UnitOfMeasure::class);
    }

    public function scopeFilterBy($q, $filters)
    {
        $q->when(isset($filters['search']), function ($q) use ($filters) {

            $q->where('name', 'LIKE', '%' . $filters['search'] . '%');
        })->when(isset($filters['class']) && count($filters['class']), function ($q) use ($filters) {
            $q->whereIn('class', $filters['class']);
        });

    }

}
