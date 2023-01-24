<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function menu(){
        return $this->belongsTo(Menu::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }
    public function brand(){
        return $this->hasOne(Brand::class);
    }

    public function ingredient(){
        return $this->hasMany(Ingredient::class);
    }
    public function discount(){
        return $this->hasMany(Discount::class);
    }
}
