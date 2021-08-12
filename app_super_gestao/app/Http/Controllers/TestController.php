<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(int $p1, int $p2){
        //echo "Sum of $p1 + $p2 is : " . ($p1+$p2);

        //Array associativo
        //return view ('site.test', ['p1' => $p1, 'p2' => $p2]);

        //method Compact()
        //return view ('site.test', compact('p1', 'p2'));

        //method with()
        return view ('site.test')->with('p1', $p1)->with('p2', $p2);
     }
}
