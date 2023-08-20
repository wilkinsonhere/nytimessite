<!DOCTYPE html>
<html lang="ru">
<x-head></x-head>
<body id="app" v-cloak>
	<div class="wrapper">
		@yield('content')
	</div>
	<x-footer></x-footer>
	<script src="{{ asset('js/jQuery.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>