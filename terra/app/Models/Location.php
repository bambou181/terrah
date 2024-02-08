<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['departement', 'commune'];
    
    use HasFactory;
    
/*
    public function terrains()
    {
        return $this->hasMany(Terrain::class);
    }

*/
}


