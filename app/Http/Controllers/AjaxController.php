<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index()
    {
        return view('start');
    }
    public function getJson()
    {
        return ([

            array(
                'title' => 'new link',
                'link'  => 'http://laravel.vue/'
            ),
            array(
                'title' => 'second link',
                'link'  => 'https://www.youtube.com/watch?v=NNdTljRzPqE&index=5&list=PLD5U-C5KK50X1KcfueA73sGSjBsd8vgVG'
            )
        ]);
    }
}
