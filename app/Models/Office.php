<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    protected $table = 'offices';
    public $timestamps = true;
    public $fillable = [
        'off_name', 'off_name2', 'departmant_id'
    ];
    public function department(){
        return $this->belongsTo(Departmant::class,'departmant_id','id');
    }
}
