<div class="header--menu">
    <div class="header--logo">
        <a href="{{ route('index') }}"><img src="{{ asset('img/nytfulllogowhite-min.png') }}" alt="Logotype"></a>
    </div>

    <div class="header--mobile">
        <a href="{{ route('index') }}"><img src="{{ asset('img/nytfulllogowhite-min.png') }}" alt="Logotype"></a>

        <button @click="toggleHeaderMenu">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="Editable-line" version="1.1" xml:space="preserve">
                <line fill="none" id="XMLID_103_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="16" y2="16"></line>
                <line fill="none" id="XMLID_102_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="25" y2="25"></line>
                <line fill="none" id="XMLID_101_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="7" y2="7"></line>
            </svg>
        </button>
    </div>

    <div class="header--links">
        <ul>
            <li><a href="https://forum.nytimes-rp.com" class="header--links-item">Форум</a></li>
            <li><a href="#" class="header--links-item">О проекте</a></li>
            <li><a href="https://forum.nytimes-rp.com/threads/416/" class="header--links-item">Правила</a></li>
            <li><a href="{{ route('about') }}" class="header--links-item">Начать играть</a></li>
            <li><a href="{{ route('shop') }}" class="header--links-item">Магазин</a></li>
        </ul>
    </div>
    <div class="header--socials">
        <ul>
            <li><a href="https://discord.com/servers/new-york-times-996446065345703956"><img src="{{ asset('img/icons/ds.svg') }}" alt="Discord"></a></li>
            <li><a href="https://t.me/newyorktimes2010"><img src="{{ asset('img/icons/tg.svg') }}" alt="Telegram"></a></li>
            <li><a href="https://vk.com/newyork.times"><img src="{{ asset('img/icons/vk.svg') }}" alt="VK"></a></li>
        </ul>
    </div>
    <div class="header--buttons">
        <?php if(!isset($_COOKIE['session'])) { ?>
            <div class="header--buttons-item">
                <a href="{{ route('register') }}" class="header--button">Регистрация</a>
            </div>
            <div class="header--buttons-item">
                <a href="login" id="loginPopup" class="header--button-main" @click.prevent="isActive = !isActive">Войти</a>
            </div>
        <?php } else { ?>
            <div class="header--buttons-item">
                <a href="/user/panel" @click.prevent="userPanel = !userPanel" class="header--button">@{{ user.login }}<img src="{{ asset('img/icons/carrot-down.svg') }}" alt="Carrot down"></a>

                <div v-if="userPanel" class="profile--dropdown" id="dropdownContainer">
                    <div class="dropdown--item">
                        <a href="#"><img src="{{ asset('img/icons/user-icon.svg') }}" alt="Settings Icon">Профиль</a>
                    </div>
                    <div class="dropdown--item">
                        <a href="#"><img src="{{ asset('img/icons/settings.svg') }}" alt="Settings Icon">Настройки</a>
                    </div>
                    <div class="dropdown--item">
                        <a href="/logout" @click.prevent="logout"><img src="{{ asset('img/icons/exit.svg') }}" alt="LogOut Icon">Выйти</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>