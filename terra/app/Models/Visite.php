<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'terrain_id',
        'visitDate',
    ];

    public function getUserId()
    {
        return $this->attributes['user_id'];
    }
    public function setUserId($id)
    {
        $this->attributes['user_id'] = $id;
    }

    public function getTerrainId()
    {
        return $this->attributes['terrain_id'];
    }
    public function setTerrainId($id)
    {
        $this->attributes['terrain_id'] = $id;
    }

    public function getVisitDate()
    {
        return $this->attributes['visitDate'];
    }

    public function setVisitDate($date)
    {
        $this->attributes['visitDate'] = $date;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function terrain()
    {
        return $this->belongsTo(Terrain::class);
    }

    

}
