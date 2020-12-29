<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class year extends Model
{
    use HasFactory;
    protected $table = 'years';
    public $timestamps = true;
    public $fillable = [
        'y_name'
    ];
    public function entry(){
        return $this->hasMany(Entry::class);
    }
}
