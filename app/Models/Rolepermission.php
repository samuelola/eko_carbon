<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rolepermission extends Model
{
    use HasFactory;

    protected $table = 'rolepermission';
    protected $guarded = [];

    public function user(){

        return $this->belongsTo('App\Models\User');
    }

    public function role(){

        return $this->belongsTo('App\Models\Role');
    }
}
