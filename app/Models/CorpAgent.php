<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorpAgent extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function user(){

        return $this->BelongsTo('App\Models\User');

    }

    public function account() {
      
        return $this->hasMany('App\Models\BankAccount');
    }

    public function artisticsegment() {
      
        return $this->hasMany('App\Models\ArtisticSegment');
    }

    public function bank() {
      
        return $this->hasMany('App\Models\Bank');
    }
}
