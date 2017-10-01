<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

class CurseController extends Controller
{
    public function o9cursa_get()
    {
        return View::make('curse.o9cursa');
    }

    public function o9cursa_post()
    {

    }
}
