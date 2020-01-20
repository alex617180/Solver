<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'text', 'description',
    ];
    public $timestamps = false;

    public function answer()
    {
        return $this->hasMany('App\Answer', 'id_parent');
    }
}
