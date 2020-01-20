<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Answer extends Model
{
    protected $fillable = [
        'text', 'id_parent', 'id_child',
    ];
    public $timestamps = false;

    public function question()
    {
        return $this->hasOne('App\Question', 'id', 'id_child');
    }
    public function questionParent()
    {
        return $this->belongsTo('App\Question', 'id_parent', 'id');
    }
}
