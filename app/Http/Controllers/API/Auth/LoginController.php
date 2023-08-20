<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\UCPToken;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required|string|exists:users|min:6|max:50',
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


        $user = User::where('login', $data["login"])->first();

        if(!Hash::check($data["password"], $user->password))
        {
            return response([
                'message' => 'Отказано в доступе — Пароль неверный',
                'code' => 403
            ], 403);
        }
        $token = Str::random(32);
        $userAgent = Hash::make($request->userAgent());
        $ip = $request->ip();
        $time = Carbon::now()->timestamp;

        try {
            UCPToken::create([
                'userId' => $user->id,
                'token' => $token,
                'ip' => $ip,
                'lastUpdate' => $time,
                'userAgent' => $userAgent
            ]);
            $user->update([
                'ucp_token' => $token,
                'lastIp' => $ip,
                'ucp_online' => $time
            ]);
            return [
                'message' => 'Доступ разрешён',
                'code' => 200,
                'data' => [
                    'token' => $token
                ]
            ];
        } catch(\Exception $e) {
            return response([
                'message' => 'Ошибка создания данных',
                'code' => 500,
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
