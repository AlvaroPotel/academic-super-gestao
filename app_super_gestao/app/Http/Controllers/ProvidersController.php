<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function index(){
        $provider = ['Provider 1','Provider 2','Provider 3','Provider 4','Provider 5','Provider 6','Provider 7','Provider 8','Provider 9','Provider 10', 'Provider 11'];
        return view('app.provider.index', compact('provider'));
     }
}
