<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    //
    public function error(Request $request)
    {
        $statusCode = $request->get('statusCode', 500);
        $errorMessage = $request->get('errorMessage', 'An unexpected error occurred.');

        return view('error', compact('statusCode', 'errorMessage'));
    }
}
