<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lnurl extends Model
{
    use HasFactory;
    protected $fillable = ['lnurl'];
    public function lnurl(){
        return $this->belongsTo(Worker::class);
    }
}
