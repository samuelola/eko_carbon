<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffsettersTransaction extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){

        return $this->belongsTo('App\Models\User');
    }

    public function project(){

        return $this->belongsTo('App\Models\Project');
    }
}
