<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public function beasiswas()
    {
        # Declare morphTo method
        return $this->morphTo('App\Models\Beasiswa', 'beasiswaaable');
        
    }
}
