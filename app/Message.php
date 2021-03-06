<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'email', 'projet_name', 'message', 'type', 'title'
    ];

    public function files(){
        $this->belongsToMany(File::class);
    }

}
