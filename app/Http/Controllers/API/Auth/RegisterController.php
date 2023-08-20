<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required|string|min:6|max:50|unique:users,login',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string'
        ]);
        
        if($validator->fails()) 
        {
            return response([
                "error" => "Ошибка валидации",
                "code" => 400
            ], 400);
        }

        $data = $validator->validated();

        $salt = Str::random(10);
        $hashedPassword = Hash::make($data["password"], [
            'salt' => $salt
        ]);

        $token = Str::random(64);
        $ip = $request->getClientIp();

        try {
            User::create([
                'login' => $data["login"],
                'password' => $hashedPassword,
                'salt' => $salt,
                'email' => $data["email"],
                'lastIP' => $ip,
                'ucp_token' => $token,
                'gcode' => '',
                'ucp_ip' => $ip,
                'ucp_online' => Carbon::now()->timestamp
            ]);
            return [
                'message' => 'Пользователь создан',
                'code' => 200,
                'data' =>[
                    'token' => $token,
                ]
            ];
        } catch(\Exception $e) {
            return response([
                "message" => "Ошибка",
                "code" => 500,
                "error" => $e->getMessage()
            ], 500);
        }
    }
}
