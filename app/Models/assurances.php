<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assurances extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(type_assurances::class, 'type_assurance_id');
    }

    protected $fillable = ['libelle', 'montant', 'bonus', 'type_assurance_id'];
}
