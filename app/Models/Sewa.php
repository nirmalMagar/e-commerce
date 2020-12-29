<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;
    protected $table = 'sewas';
    public $timestamps = true;
    public $fillable = [
        's_name'
    ];
    public function entry(){
        return $this->hasMany(Entry::class);
    }
}
