<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion'];

    public function productos(){
        return $this->hasmany(Producto::class);
    }
}
