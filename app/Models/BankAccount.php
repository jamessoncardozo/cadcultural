<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $guarded=[];

    // Uma conta bancária pertence a um usuário
    public function user(){return $this->BelongsTo('App\Models\User');}

    // Uma conta bancária pertence a um usuário
    public function agent(){return $this->BelongsTo('App\Models\Agent');}

    // Uma conta bancária pertence a um banco
    public function bank(){return $this->belongsTo(Bank::class);}
}
