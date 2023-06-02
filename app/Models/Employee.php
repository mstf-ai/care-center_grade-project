<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Employee extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',
        'job_title',
        'Gender',
        'department',
        'email',
        'user_active',
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


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}