<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;
    
    public function marca(){
        return $this->belongsTo(Marca::class);
    }

    public function veiculo() {
        return $this->hasMany(Veiculo::class);
    }
}
