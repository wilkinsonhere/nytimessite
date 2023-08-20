<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\Question;

class QuestionController extends Controller
{
    public function __invoke()
    {
        return Question::inRandomOrder()->first();
    }
}
