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
        })->when(isset($filters['tag']), function ($q) use ($filters) {
            $q->where('class', $filters['tag']);
        })->when(isset($filters['sort_by']) && $filters['sort_by'] == 'price', function ($q) use ($filters) {
            $q->whereHas('unit_of_measures', function ($q) use ($filters) {
               $q->orderBy('price','ASC');
            });
        })->when(isset($filters['sort_by']) && $filters['sort_by'] == 'quality', function ($q) use ($filters) {
            $q->orderBy('quality','DESC');
        });

    }

}
