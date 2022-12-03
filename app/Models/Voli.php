<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voli extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sektor()
    {
        return $this->hasOne('App\Models\Sektor');
    }
}
