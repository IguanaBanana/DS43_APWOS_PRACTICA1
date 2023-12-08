<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;


class tenits extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'marca',
        'precio',
        'genero'
    ];

    public function type() {
        return $this->belongsTo(Type::class);
    }
    public function evolutions() {
        return $this->belongsTo(evolutions::class);
    }
}