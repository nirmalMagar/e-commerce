<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;
    protected $table = 'entries';
    public $timestamps = true;
    public $fillable = [
        'd_darta_no'
    ];
    public function year(){
        return $this->belongsTo(Departmant::class,'year_id','id');
    }
    public function sewa(){
        return $this->belongsTo(Departmant::class,'sewa_id','id');
    }
}
