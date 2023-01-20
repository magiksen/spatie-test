<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
    ];

    public function subcategories() {
        return $this->hasMany(SubCategory::class);
    }

    public function muestras() {
        return $this->hasMany(Muestra::class);
    }
}
