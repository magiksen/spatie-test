<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function doctors() {
        return $this->hasMany(Doctor::class);
    }

    public function muestras() {
        return $this->hasMany(Muestra::class);
    }
}
