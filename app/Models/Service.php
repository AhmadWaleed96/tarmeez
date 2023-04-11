<?php

namespace App\Models;
use App\Traits\Trans;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
     protected $guarded=[];
    use HasFactory , softDeletes ,Trans;

      public function users()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
      public function works()
    {
        return $this->hasMany(Work::class);
    }
      public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
      public function employments()
    {
        return $this->hasMany(Employment::class);
    }
      public function howdos()
    {
        return $this->hasMany(Howdo::class);
    }
}
