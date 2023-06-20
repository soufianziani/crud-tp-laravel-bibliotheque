<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livres extends Model
{
    use HasFactory;
    // protected $fillable=[ 'anneePub' , 'anneePub' ,'auteur_id', 'titre'] ;
    public function auteur()
    {
        return $this->belongsTo(auteurs::class);
    }
}
