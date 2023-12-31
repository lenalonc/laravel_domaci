<?php

namespace App\Models;

use App\Models\Manufacturer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smartphone extends Model
{
    use HasFactory;

    protected $fillable=[
        'serijski_broj',
        'model',
        'memorija',
        'cena',
        'manufacturer_id',
        'user_id'
    ];


    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    

}
