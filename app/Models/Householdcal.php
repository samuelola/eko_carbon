<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Householdcal extends Model
{
    use HasFactory;

    protected $table = 'emissioncal';

    protected $guarded = [];

    public function user(){

        return $this->belongsTo('App\Models\User');
    }
}
