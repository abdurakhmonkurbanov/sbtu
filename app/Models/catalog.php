<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalog extends Model
{
    use HasFactory;
    public function parent(){
        return $this->belongsTo(catalog::class,'submenu');
    }
    public function children(){
        return $this->hasMany(catalog::class,'submenu');
    }
}
