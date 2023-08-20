<?php
die('Регистрация временно не работает');

if(isset(($_COOKIE["session"])))
{
	header('Location: /');
	exit;
}
?>


@extends('layouts.clear')

@section('content')
	<div class="wrapper" id="app">
		<div class="register--wrapper">
	        <section class="register" v-if="firstStepStatus && !test.testFail">
	            <div class="register--bg">
	                <img src="{{ asset('img/bg-register.png') }}" alt="BG">
	            </div>
	            <div class="register--content">
	                <div class="register--header">
	                    <img src="{{ asset('img/logo-w.svg') }}" alt="Logotype">
	                </div>

	                <div class="register--title">
	                    <a href="{{ route('index') }}" class="register--back"><img src="{{ asset('img/icons/arrow-left.svg') }}">Вернуться назад</a>
	                	<h1>Регистрация</h1>
	                </div>

	                <form id="registerForm" @submit.prevent="sendInfo">
	                    <div class="register--form">
	                    	<div class="register--form-item form--input form--input-login">
	                            <input type="text" v-model="login" name="login" minlength="6" maxlength="50" class="form--input" placeholder="Введите логин" required>
	                        </div>
	                        <div class="register--form-item form--input form--input-email">
	                            <input type="email" v-model="email" name="email" class="form--input" placeholder="Введите почту" required>
	                        </div>
	                        <div class="register--form-item form--input form--input-password">
	                            <input type="password" v-model="password" name="password" class="form--input" placeholder="Придумайте надежный пароль" required>
	                        </div>
	                        <div class="register--form-item form--input form--input-password">
	                            <input type="password" v-model="repeatPassword" name="repeatpassword" class="form--input" placeholder="Повторите пароль" required>
	                    	</div>
	                    </div>

	                    <div class="form--footer">
	                        <div class="form--remember">
	                            <input type="checkbox" class="custom-checkbox" id="remember" name="remember" value="yes" @click="rememberMe = !rememberMe">
	                            <label for="remember">Запомнить меня</label>
	                                </div>
	                            <a href="#" class="form--reset-password">Забыли пароль?</a>
	                        </div>

	                        <div class="form--button">
	                            <button type="submit" id="registerButton" class="form--button">Создать аккаунт</button>
	                        </div>
	                </form>
	            </div>
	        </section>

	        <div class="modal" id="successModal" v-if="registerFinish">
	            <div class="modal--inner">
	                <div class="modal--header">
	                    <div class="modal--icon">
	                        <svg xmlns="http://www.w3.org/2000/svg" width="97" height="97" viewBox="0 0 97 97" fill="none">
	                            <circle cx="48.5" cy="48.5" r="48.5" fill="#217A2F" />
	                            <path d="M70.5825 47.6654C71.4849 46.4731 71.9844 45.0121 71.9844 43.4921C71.9844 41.0805 70.6362 38.7978 68.4663 37.5248C67.9077 37.1972 67.2717 37.0247 66.624 37.0253H53.7441L54.0664 30.4242C54.1416 28.829 53.5776 27.3144 52.4819 26.1596C51.9442 25.5904 51.2955 25.1375 50.5758 24.829C49.8562 24.5204 49.0809 24.3627 48.2979 24.3656C45.5049 24.3656 43.0342 26.2455 42.293 28.9364L37.6792 45.6405H37.6631V68.6288H63.0308C63.5249 68.6288 64.0083 68.5321 64.4541 68.3388C67.0107 67.2485 68.6597 64.7509 68.6597 61.9794C68.6597 61.3027 68.563 60.6366 68.3696 59.9921C69.272 58.7997 69.7715 57.3388 69.7715 55.8188C69.7715 55.142 69.6748 54.476 69.4814 53.8315C70.3838 52.6391 70.8833 51.1781 70.8833 49.6581C70.8726 48.9814 70.7759 48.31 70.5825 47.6654ZM29.0156 47.3593V66.9101C29.0156 67.8608 29.7837 68.6288 30.7344 68.6288H34.2256V45.6405H30.7344C29.7837 45.6405 29.0156 46.4086 29.0156 47.3593Z" fill="white" />
	                        </svg>
	                    </div>
	                    <h3>Завершение регистрации!</h3>
	                </div>

	                <div class="modal--body">
	                	<p>Ваш аккаунт успешно создан. Теперь вы имеете доступ к своему личному кабинету, где можете создать своего первого персонажа!</p>
	                </div>

	                <div class="modal--footer">
	                    <a href="{{ route('index') }}" class="modal--button-secondary">Продолжить</a>
	                </div>
	            </div>
	    	</div>
	        <section v-if="!firstStepStatus" class="register--first">
	            <div class="fRegister--logo">
	            	<img src="{{ asset('img/logo-w.svg') }}" alt="Logotype">
	            </div>

	            <div class="fRegister--header">
	                <div class="fRegister--back">
	                    <a href="{{ route('index') }}" class="register--back"><img src="{{ asset('img/icons/arrow-left.svg') }}">Вернуться назад</a>
	                </div>
	                <div class="fRegister--title">
	                    <h1>Регистрация</h1>
	                </div>
	                <div class="fRegister--counter">
	                    <h4>0<b id="counter">@{{ test.questionCount }}</b><span>/0@{{ test.questionMax }}</span></h4>
	                </div>
	            </div>
	            <div class="fRegister--question-results" v-if="test.testFail">
	            	<div class="fRegister--question-results-wrapper">
	                    <p>К сожалению, вы не смогли сдать тест. <br> Количество правильных ответов: <br> <span class="right--counter">0<b>@{{ test.questionAccept }}</b>/07</span></p>
	                    <button class="fRegister--button-main button-repeat" onclick="window.location.reload();">Повторить попытку</button>
	                </div>
	            </div>

	            <div class="fRegister--question-container" v-if="!test.testFail">
	                <div class="fRegister--question" id="qImage" :style="test.question.style">
	                    <div class="fRegister--question-text">
	                        <p id="qText">@{{ test.question.text }}</p>
	                    </div>
	                </div>

	                <div class="fRegister--answers">
	                    <div v-for="ans in test.question.answers" class="fRegister--answer" :id="ans.id" @click="clickTestButton(ans.id)">
	                    	<p>@{{ ans.ans }}</p>
	                    </div>
	            	</div>
	            </div>

	            <div class="fRegister--buttons" v-if="!test.testFail">
	                <a class="fRegister--button-secondary" href="{{ route('index') }}">Назад</a>
	                <button class="fRegister--button-main" @click="sendQuestion()">Отправить</button>
	            </div>
	        </section>
	    </div>
	</div>
	<x-footer></x-footer>
	<script src="js/vue/register.js"></script>
@endsection