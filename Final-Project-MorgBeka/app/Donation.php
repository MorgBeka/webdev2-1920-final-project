<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'Donatie';

    protected $fillable = [
        'lastName',
        'firstName',
        'email',
        'amount',
    ];
}
