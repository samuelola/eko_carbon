<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KYC extends Model
{
    use HasFactory;

    protected $table = 'kyc';

    protected $guarded = [];

    public function user(){

        return $this->belongsTo('App\Models\User');
    }
}
