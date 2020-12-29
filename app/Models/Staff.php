<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';
    public $timestamps = true;
    public $gaurded = [
    ];
    public function department(){
        return $this->belongsTo(Departmant::class,'s_departmant','id');
    }
}
