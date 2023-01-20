<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muestra extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'fecha',
        'institution_id',
        'doctor_id',
        'paciente_name',
        'paciente_cedula',
        'paciente_edad',
        'category_id',
        'subcategory_id',
        'tipo_pago',
        'dolares',
        'bolivares'
    ];
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function subcategory() {
        return $this->belongsTo(SubCategory::class);
    }
    public function institution() {
        return $this->belongsTo(Institution::class);
    }

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

}
