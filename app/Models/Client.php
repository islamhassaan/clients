<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_english_name',
        'full_arabic_name',
        'username',
        'password',
        'email',
        'mobile',
        'country_code',
        'country'
    ];
}