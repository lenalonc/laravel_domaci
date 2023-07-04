<?php

namespace App\Models;

use App\Models\Smartphone;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'zemlja_porekla'
    ];

    public function smartphones(){
        return $this->hasMany(Smartphone::class);
    }

}
