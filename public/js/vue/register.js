const { createApp } = Vue;
//Register script
const app = createApp({
	data() {
		return {
			//Register
			firstStepStatus: true,
			registerFinish: false,

			test: {
				testFail: false,
				questionAccept: 0,
				questionCount: 1,
				questionMax: 7
			},

			login: '',
			email: '',
			password: '',
			repeatPassword: '',
			rememberMe: false
		}
	},
	methods: {
		clickTestButton(id) {
			const answers = document.querySelectorAll('.fRegister--answer');
			const answerSelect = document.querySelector('.fRegister--answer.selected') || false;
			
			answers.forEach(answer => {
				if(answer.attributes.id.nodeValue != this.test.question.answers[id - 1].id) return;
				answer.classList.add('selected');
				if(!answerSelect) return;
				answerSelect.classList.remove('selected');
			});
		},
		getQuestion() {
			fetch(`${NY_API}/registration/question`)
			.then(res => res.json())
			.then(question => {
				this.test.question = {
					text: question.text,
					style: `background: url('../img/questions/upload/${question.image}'); background-size: cover;`,
					answers: [
						{
							id: 1,
							ans: question.ans1
						},
						{
							id: 2,
							ans: question.ans2
						},
						{
							id: 3,
							ans: question.ans3
						}
					]
				};
				this.test.question.answers.forEach((answer, index) => {
					if((index + 1) === question.rAns) answer.isTrue = true;
					else answer.isTrue = false
				});
			}).catch(error => {
				console.error(`При загрузке страницы возникла ошибка.\n${error}`)
			})
		},
		sendQuestion() {
			const answerSelect = document.querySelector('.fRegister--answer.selected') || false;

			if(!answerSelect) return alert('Выберите ответ!');
			id = answerSelect.attributes.id.nodeValue;
			this.test.question.answers.forEach(ans => {
				if(ans.id != id) return;

				this.test.questionCount += 1;

				if(ans.isTrue) this.test.questionAccept += 1;
			});
			if(this.test.questionCount > this.test.questionMax) { 
				if(this.test.questionAccept < this.test.questionMax) return this.test.testFail = true;
				
				return this.firstStepStatus = true;
			}

			answerSelect.classList.remove('selected');
			this.getQuestion();
		},
		sendInfo() {
			if(this.login === '' || this.email === '' || this.password === '' || this.repeatPassword === '') return alert('Введите данные!');
			if(this.password !== this.repeatPassword) return alert('Пароли не совпадают!');
			
			fetch(`${NY_API}/registration`, {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json'
				},
				body: JSON.stringify({
					login: this.login,
					email: this.email,
					password: this.password
				})
			}).then(res => res.json())
			.then(data => {
				if(data.code !== 200) {
					console.error(data);
					alert('При выполнении операции произошла ошибка на стороне сервера!\nПовторите попытку позже'); 
				}
				localStorage.setItem('token', data.data.token);

				if(this.rememberMe) setCookie(`login=${this.login};password=${this.password};`, 150000);
				setCookie('session=true;');
				this.registerFinish = true;
			})
			.catch(error => console.error(`При загрузке страницы возникла ошибка.\n${error}`));
		}
	},
	created() {
		this.getQuestion();
	}
});
app.mount("#app");
