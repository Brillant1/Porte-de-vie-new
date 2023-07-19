<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMail extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom','phone', 'message', 'objet', 'email'
    ];
}
