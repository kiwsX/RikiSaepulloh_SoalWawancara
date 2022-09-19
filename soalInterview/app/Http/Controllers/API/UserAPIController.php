<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAPIController extends Controller
{
    public function index()
    {
        $user = User::all();
        $response = [
          'message' => 'Success',
          'status' => true,
          'data' => $user
        ];
        return response()->json($response, Response::HTTP_OK);
    }
}
