<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phonebook extends Model
{

    protected $fillable = ['firstname','lastname','number','email','location'];

    public function user(){
      return $this->belongsto(User::class);
    }
}
