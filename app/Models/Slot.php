<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;

    protected $fillable = ['day', 'start', 'end'];


    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
