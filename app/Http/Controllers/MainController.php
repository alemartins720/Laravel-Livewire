<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(): View
    {
        $data = [
            'value4' => 'Valor de variável definida no controller'
        ];

        return view('home')->with($data);
    }
    
    
}
