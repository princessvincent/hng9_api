<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    function user(){
        return response()->json([
            'success' => true,
            'data' => [
                'slackusername' => "priscaEbuka",
                'backend' => true,
                'age' => 21,
                'bio' => "i am determined",
            ]

        ]);
           
    }
}
