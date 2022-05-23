<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function ranges()
    {
        return $this->hasMany(Range::class, 'division_id');
    }
}
