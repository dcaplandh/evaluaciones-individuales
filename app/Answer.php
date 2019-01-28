<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers_students';

    protected $guarded = [];

    public function module(){
      return $this->belongsTo(Module::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
    }
}
