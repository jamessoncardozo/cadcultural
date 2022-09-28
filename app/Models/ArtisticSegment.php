<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtisticSegment extends Model
{
    use HasFactory;

    protected $guarded=[];

    // Uma conta bancária pertence a um usuário
    public function user(){return $this->BelongsTo('App\Models\User');}

    // Uma conta bancária pertence a um Agent
    public function agent(){return $this->belongsTo(Agent::class);}
}
