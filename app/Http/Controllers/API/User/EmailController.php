<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Mail\User\CodeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'code' => 'required|integer'
        ]);


        if($validator->fails()) 
        {
            return response([
                "error" => "Ошибка валидации",
                "code" => 400
            ], 400);
        }

        $data = $validator->validated();

        try {
            Mail::to($data["email"])->send(new CodeMail($data["code"]));
        } catch (\Exception $e) {
            return response([
                "error" => "Ошибка отправки почты",
                "code" => 500,
                "errors" => $e->getMessage()
            ], 500);
        }
        
        return [
            "message" => "Запрос выполнен",
            "code" => 200
        ];   
    }
}
