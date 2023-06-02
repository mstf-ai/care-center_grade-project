<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'service',
        'doctor',
        'first_name',
        'last_name',
        'phone',
        'date',
        'time',
        'user_id'
    ];


    protected function first_name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
            set: fn ($value) => strtolower($value)

        );
    }
    protected $hidden = [
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}