<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $fillable = [
        'naam',
        'evenement_type_id',
        'datum',
        'locatie',
        'beschrijving',
    ];
}