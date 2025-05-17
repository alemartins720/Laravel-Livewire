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
    
    public function showClients(): View
    {
        $clients = [
            ['id' => 1 ,'name' => 'Client 1' , 'phone' => '99998881'],
            ['id' => 2 ,'name' => 'Client 2' , 'phone' => '99998882'],
            ['id' => 3 ,'name' => 'Client 3' , 'phone' => '99998883'],
            ['id' => 4 ,'name' => 'Client 4' , 'phone' => '99998884'],
            ['id' => 5 ,'name' => 'Client 5' , 'phone' => '99998885']
        ];

        return view('clients' , compact('clients'));
    }
}
