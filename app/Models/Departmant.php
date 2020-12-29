<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departmant extends Model
{
    use HasFactory;
    protected $table = 'departmants';
    public $timestamps = true;
    public $fillable = [
        'd_name'
    ];
    public function office(){
        return $this->hasMany(Office::class);
    }
    public function staff(){
        return $this->hasMany(Staff::class);
    }

}
