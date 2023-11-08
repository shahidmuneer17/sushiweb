<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function storeInSession(Request $request)
    {
        session([
            'method' => $request->input('method'),
            'restaurent' => $request->input('restaurent'),
        ]);

        return response()->json(['status' => 'success']);
    }
}