<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function validator(Request $request)
    {
        return Validator::make($request->all(), [
            'full_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

    }

    protected function register(Request $request)
    {
        if ($this->validator($request)->fails()) {
            return response()->json(
                [
                    'errors' => $this->validator($request)->errors()
                ],
                Response::HTTP_UNPROCESSABLE_ENTITY);
        } else {

            $user = User::create([
                'full_name' => $request['full_name'],
                'phone_number' => $request['phone_number'],
                'password' => Hash::make($request['password']),
            ]);
            $token = $user->createToken('citadel')->accessToken;

            return response()->json(
                [
                    'message' => 'user added successfully',
                    'user' => $user,
                    'token' => $token

                ], Response::HTTP_CREATED);

        }
    }
}
