<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'text', 'description',
    ];

    public function answer()
    {
        return $this->hasMany('App\Answer', 'parent_id');
    }
}
