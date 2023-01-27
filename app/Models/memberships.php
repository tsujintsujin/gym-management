<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memberships extends Model
{
    use HasFactory;

    protected $table = 'memberships';
    protected $fillable = [
    'membership_type',
    'membership_price',
    ];
}
