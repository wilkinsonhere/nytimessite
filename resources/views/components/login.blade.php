<div class="popup--login" v-if="isActive" id="popupWindow">
  <div class="popup--content">
    <div class="popup--header">
      <span></span>
      <h4 class="popup--title">Авторизация</h4>
      <button class="popup--close" @click="isActive = false"><img src="{{ asset('img/icons/close.svg') }}" alt="Close Icon"></button>
    </div>

    <div class="popup--body">
      <form method="POST" id="loginForm">
        <div class="popup--body-item popup--input-login">
          <input type="text" minlength="6" maxlength="50" name="login" class="popup--input" placeholder="Введите логин" v-model="login">
        </div>
        <div class="popup--body-item popup--input-password">
          <input type="password" minlength="1" v-model="password" name="password" class="popup--input" placeholder="Введите пароль">
    	</div>
      </form>
  	</div>
    <div class="popup--footer">
      <div class="popup--remember">
        <input type="checkbox" class="custom-checkbox" id="remember" name="remember" value="yes" @click="rememberMe = !rememberMe">
        <label for="remember">Запомнить меня</label>
      </div>
      <a href="#" class="popup--reset-password">Забыли пароль?</a>
    </div>

    <div class="popup--button">
      <a href="/login" id="loginButton" @click.prevent="logInAccount" class="popup--button-enter">Войти</a>
    </div>
  </div>
</div>