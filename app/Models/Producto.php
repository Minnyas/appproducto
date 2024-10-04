<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','categoria_id','descripcion','precio','stock'];

    public function categoria(){
        return $this->belongsTo(categoria::class);
    }
}

