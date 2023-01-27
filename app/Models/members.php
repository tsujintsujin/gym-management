<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    use HasFactory;

    protected $table = 'members';
    protected $fillable = [
    'name',
    'email',
    'membership_expiration',
    'trainer_id',
    ];

    public function trainers()
    {
        return $this->belongsTo(trainers::class);
    }

    public function memberships()
    {
        return $this->hasMany(memberships::class);
    }
}
