<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Answer extends Model
{
    protected $fillable = [
        'text', 'parent_id', 'child_id',
    ];

    public function question()
    {
        return $this->hasOne('App\Question', 'id', 'child_id');
    }
    public function questionParent()
    {
        return $this->belongsTo('App\Question', 'parent_id', 'id');
    }
}
