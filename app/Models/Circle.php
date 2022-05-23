<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    public function divisions()
    {
        return $this->hasMany(Division::class, 'circle_id');
    }
    public function ranges1()
    {
        return $this->hasMany(Range::class, 'division_id');
    }
}
