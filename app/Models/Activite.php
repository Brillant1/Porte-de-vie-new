<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;
    protected $fillable = [
        'publish_at', 'end_date', 'start_date', 'photo', 'description', 'titre', 'zone'
    ];
}
