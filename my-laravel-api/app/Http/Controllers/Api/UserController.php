<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->input('name');

        if (!$name) {
            return response()->json([
                'message' => 'Name field is required!'
            ], 400);
        }

        return response()->json([
            'message' => 'You made a POST request with the following data!',
            'data' => [
                'name' => $name
            ]
        ], 200);
    }
}
