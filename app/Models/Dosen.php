<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    public function beasiswas()
    {
        # Declare morphMany method
        return $this->morphMany('App\Models\Beasiswa', 'beasiswaable');
    }
}
