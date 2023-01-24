<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public function product(){
        return $this->hasMany(Product::class);
    }      
    public function category(){
        return $this->hasMany(Category::class);
    }

    public function user(){
        return $this->belongsTo(user::class);
    }

}
