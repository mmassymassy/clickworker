<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Lnurl;

class Worker extends Model
{
    use HasFactory;
    protected $fillable = ['email','lnurl','lnurl_id','code'];
    public function worker()
    {
        return $this->hasMany(Lnurl::class);
    }
}
