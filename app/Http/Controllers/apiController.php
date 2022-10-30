<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    function user(){
        return response()->json([
                'slackUsername' => "priscaEbuka",
                'backend' => true,
                'age' => 21,
                'bio' => "i am determined and optimistic",

        ]);
           
    }
}
