<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    public function parent(){
        return $this->belongsTo(menu::class,'submenu');
    }
    public function children(){
        return $this->hasMany(menu::class,'submenu');
    }
}
