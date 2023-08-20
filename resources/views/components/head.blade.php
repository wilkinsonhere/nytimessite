<head>
    <Title>New York Times</Title>
    <link rel="stylesheet" href="{{ asset('fonts/SF-UI-Display/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- <link rel="icon" type="image/png" href="../dist/img/nytlogo-min.png"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script src="js/vue.js"></script>
    <script>
    	const NY_API = 'http://127.0.0.1:8000/api'
    	function setCookie(data, minutes = 0, path = '/') {
    		/*
				* - setCookie — создаёт куки
				* --------------------------
				*
				* data — Данные, которые буду создаваться (Строка)
				* data = 'email=abc@example.com;password=123456'
				*
				* minutes — Время в минутах на которое будет создаваться кук (Число)
				* Если нужно создать кук на одну сессию, то указывай 0
    			*
    			* path — Путь по которому будет работать кук. По умолчанию путь корневой(/) (Строка)
				* path = '/admin'
    		*/

    		if(minutes === 0) return document.cookie = `${data}; path=${path}`;
    		const d = new Date();
    		d.setTime(d.getTime() + (minutes * 10 * 1000));
    		const expires = d.toUTCString();
    		document.cookie = `${data}; expires=${expires}; path=${path}`;
    	}
    	function getCookie(cookieName = 'all_cookies') {
    		/*
				* - getCookie — получить куки
				* --------------------------
				*
				* cookieName — Имя кука, который нужно получить (Строка)
				* cookieName = 'email'
				*
				* Аргумент не обязателен. Если ничего не указать вернуться все куки
				* Если куков нет вернётся null
    		*/
    		if(cookieName === 'all_cookies') return document.cookie;

    		const cookies = document.cookie.split('; ');
			for (let i = 0; i < cookies.length; i++) {
				const cookie = cookies[i].split('=');
				if (cookie[0] === cookieName) {
				  return cookie[1];
				}
			}
			return null;
    	}

    	function deleteCookie() {
    		/*
				* - deleteCookie — удалить все куки
				* --------------------------
    		*/
    		const cookies = document.cookie.split(';');

    		for(let i = 0; i < cookies.length; i++) {
    			let cookie = cookies[i];
    			let eqPos = cookie.indexOf("=");
    			let name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
    			document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:000 UTC; path=/;";
    		}
    	}

    	if(!getCookie('session')) {
    		if(getCookie('password') && getCookie('login')) {
    			fetch(`${NY_API}/login`, {
    				method: 'POST',
    				headers: {
    					'Content-Type': 'application/json'
    				},
    				body: JSON.stringify({
    					login: getCookie('login'),
    					password: getCookie('password')
    				})
    			}).then(res => res.json())
    			.then(data => {
    				if(data.code !== 200) return deleteCookie();

    				setCookie('session=true;');
    				localStorage.setItem('token', data.data.token);
    				localStorage.setItem('login', getCookie('login'));
    			})
    			.catch(error => {
    				alert('Произошла ошибка на стороне сервера\nПовторите попытку позже');
    				console.error(error);
    			});
    		}
    	}
	</script>
</head>