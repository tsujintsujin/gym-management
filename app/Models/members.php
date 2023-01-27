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
    'membership_id',
    ];

    public function trainer()
    {
        return $this->belongsTo(trainers::class);
    }

    public function membership()
    {
        return $this->belongsTo(memberships::class);
    }
}
