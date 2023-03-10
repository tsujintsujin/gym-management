<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainers extends Model
{
    use HasFactory;

    protected $table = 'trainers';
    protected $fillable = [
    'name',
    'email',
    'specialization',
    'phone',
    ];

    public function member()
    {
        return $this->hasMany(members::class);
    }
}
