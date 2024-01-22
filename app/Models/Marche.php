<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marche extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomMarche',
        'description',
        'capacite',
        'adresse',
        'telephone',
        'image',
        'ville_id',
    ];
}
