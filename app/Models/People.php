<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = ['name','surname','phone_number','street','country'];

    protected $table = 'peoples';

    use HasFactory;
}
