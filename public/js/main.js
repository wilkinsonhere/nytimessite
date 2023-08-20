const { createApp } = Vue;

const app = createApp({
	data() {
		return {
			// Login menu
			isActive: false,
			userPanel: false,
			
			user: {
				login: localStorage.getItem('login')
			},

			login: '',
			password: '',
			rememberMe: false
		}
	},
	methods: {
		/* Методы для дизайна */
		toggleHeaderMenu() {
			$(".header--links, .header--socials, .header--buttons").toggle("slideDown");
		},
		
		logout() {
			deleteCookie();
			localStorage.removeItem('token');
			localStorage.removeItem('login');
			location.reload();
		},

		logInAccount() {
			fetch(`${NY_API}/login`, {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json'
				},
				body: JSON.stringify({
					login: this.login,
					password: this.password
				})
			}).then(res => res.json())
			.then(data => {
				if(data.code !== 200) return alert('Отказано в доступе\nВозможно, такого аккаунта не существует, либо вы ввели неверный пароль');
				
				localStorage.setItem('token', data.data.token);
				localStorage.setItem('login', this.login);
				setCookie('session=true;');
				if(this.rememberMe) setCookie(`login=${this.login};password=${this.password}`, 150000);
				return location.reload();
			})
		}
	}
})

app.mount('#app');