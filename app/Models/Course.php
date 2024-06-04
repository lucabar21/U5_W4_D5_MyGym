<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];


    public function activities()
    {
        return $this->belongsTo(Activity::class, 'activity_id');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
    public function slots()
    {
        return $this->belongsTo(Slot::class, 'slot_id');
    }
}
