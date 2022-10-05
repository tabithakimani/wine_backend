<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone_number' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(
                [
                    'errors' => $validator->errors()
                ], Response::HTTP_UNPROCESSABLE_ENTITY
            );
        } else {

            $user = User::where('phone_number', $request->input('phone_number'))->first();

            if ($user) {
                if (Hash::check($request->password, $user->password)) {
                    Auth::login($user);
                    $user->save();
                    $token = $user->createToken('citadel')->accessToken;
                    return response()->json(
                        [
                            'token' => $token,
                            'user' => $user,
                        ], Response::HTTP_OK
                    );
                } else {
                    return response()->json(
                        [
                            'message' => 'Credentials Provided are Incorrect'
                        ], Response::HTTP_NOT_FOUND
                    );
                }
            } else {
                return response()->json(
                    [
                        'message' => 'Credentials Provided are Incorrect'
                    ], Response::HTTP_NOT_FOUND
                );
            }
        }
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->token()->revoke();

        $user->save();

        return response()->json([
            'message' => 'Successfully logged out',
        ], Response::HTTP_OK);
    }
}
