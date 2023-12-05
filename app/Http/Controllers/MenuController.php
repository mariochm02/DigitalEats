<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __invoke()
    {
        $platos = Plato::all();

        return view('menu', compact('platos'));
    }
}
