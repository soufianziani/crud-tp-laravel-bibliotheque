<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emprunts extends Model
{
    use HasFactory;
    public function livre()
    {
        return $this->belongsTo(livres::class);
    }
}
