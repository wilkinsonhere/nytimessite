@extends('layouts.main')

@section('content')
	<x-header></x-header>
	<main class="about__main">
		<div class="about--bg">
			<div class="about__container">			
				<seciton class="main-screen">
					<div class="main-screen__text">
						<p>We are</p>
						<h1>New York Times</h1>
					</div>
				</seciton>
			</div>
		</div>
		<div class="about__container">
			<section class="sub-main">
				<div class="about__block rotate-left">
					<p>Новое дыхание</p>
				</div>
				<div class="about__text">
					<h2>Ролевой проект на базе GTA, представляющий собой полноценную игру с концепцией реального Нью-Йорка.</h2>
				</div>
			</section>
		</div>
		<section class="about__info">
			<div class="about__block rotate-right">
				<p>Новое дыхание</p>
			</div>
			<div class="about__text about__dark">
				<h2>Реалистичная игровая карта с двумя известными и по своему уникальными боро — Бруклин и Манхэттен!</h2>
			</div>
			<img src="{{ asset('img/about-info-bg.svg') }}" alt="info bg">
		</section>
		<div class="about__manhattan-bg">
			<div class="about__container">			
				<seciton class="about__manhattan">
					<div class="city__text">
						<div class="city__top">
							<p>Лор острова</p>
							<img src="{{ asset('img/icons/circle_right.svg') }}" alt="icon">
						</div>
						<h2>Manhattan</h2>
					</div>
				</seciton>
			</div>
		</div>
		<div class="about__container">
			<section class="sub-main">
				<div class="about__text">
					<h2>Современный и полный динамичный жизни боро Нью-Йорка, состоящий из небоскрёбов и других чудес градостроительства</h2>
				</div>
			</section>
		</div>
		<section class="lore">
			<div class="lore__list">
				<div class="lore__item">
					<img src="{{ asset('img/manh1.svg') }}" alt="Lore img">
					<p>Именно здесь распологаются все всемирные центры, банки, биржи и просто крутейшие небоскрёбы, среди которых стоит быть вполне аккуратным, ведь толпы офисных планктонов спешат подняться в рабочей иерархии и могут снести вас с ног!</p>
				</div>
				<div class="lore__item">
					<img src="{{ asset('img/manh2.svg') }}" alt="Lore img">
					<p>Среди беттоных джунглей вас зелено встретит Центральный Парк, впечатляющий своим крупнейшим размеров, природным разнообразием (и человеческим тоже) и просто всеобщим «чилл-аутом»</p>
				</div>
			</div>
		</section>
		<div class="about__brooklyn-bg">
			<div class="about__container">			
				<seciton class="about__brooklyn">
					<div class="city__text">
						<div class="city__top">
							<p>Лор острова</p>
							<img src="{{ asset('img/icons/circle_right.svg') }}" alt="icon">
						</div>
						<h2>Brooklyn</h2>
					</div>
				</seciton>
			</div>
		</div>
		<div class="about__container">
			<section class="sub-main">
				<div class="about__text">
					<h2>Самый густонаселённый, популярный и многонациональный район с типичными ему кирпичными домами и выстрелами по ночам</h2>
				</div>
			</section>
		</div>
		<section class="lore">
			<div class="lore__list">
				<div class="lore__item">
					<img src="{{ asset('img/brook1.svg') }}" alt="Lore img">
					<p>Именно в Бруклине распологается русскоязычный район Брайтон-Бич, состоящий из эмигрантов развалившегося СССР, по сейчас зависли в атрибутах 90-х</p>
				</div>
				<div class="lore__item">
					<img src="{{ asset('img/brook2.svg') }}" alt="Lore img">
					<p>Также, Бруклин является довольно криминогенным районом NY с немалым количеством различных бандитских формирований. Главное не выходить за туристические маршруты, особенно ночью</p>
				</div>
			</div>
		</section>
		<div class="about__role">
			<div class="about__container">
				<div class="about__role-flex">
					<div class="about__block rotate-right">
						<p>Выбирай роль</p>
					</div>
					<h2 class="about__title title-role">
						Выбирай собственную роль и стань легендой со своим персонажем в Нью-Йорке
					</h2>
					<div class="about__role-list">
						<div class="about__role-item">
							<div class="about__role-header">
								<h3>Офицер полиции</h3>
							</div>
							<div class="about__role-img">
								<img src="{{ asset('img/icons/police.svg') }}" alt="Role icon">
							</div>
						</div>
						<div class="about__role-item">
							<div class="about__role-header">
								<h3>Боец боевых искусств</h3>
							</div>
							<div class="about__role-img">
								<img src="{{ asset('img/icons/karatist.svg') }}" alt="Role icon">
							</div>
						</div>
						<div class="about__role-item">
							<div class="about__role-header">
								<h3>Пожарный спасатель</h3>
							</div>
							<div class="about__role-img">
								<img src="{{ asset('img/icons/pojarniy.svg') }}" alt="Role icon">
							</div>
						</div>
						<div class="about__role-item">
							<div class="about__role-header">
								<h3>Кинорежиссёр</h3>
							</div>
							<div class="about__role-img">
								<img src="{{ asset('img/icons/rejisser.svg') }}" alt="Role icon">
							</div>
						</div>
						<div class="about__role-item">
							<div class="about__role-header">
								<h3>Музыкант</h3>
							</div>
							<div class="about__role-img">
								<img src="{{ asset('img/icons/musikant.svg') }}" alt="Role icon">
							</div>
						</div>
						<div class="about__role-item">
							<div class="about__role-header">
								<h3>Член итальянской мафии</h3>
							</div>
							<div class="about__role-img">
								<img src="{{ asset('img/icons/makaronik.svg') }}" alt="Role icon">
							</div>
						</div>
						<div class="about__role-item">
							<div class="about__role-header">
								<h3>Турист</h3>
							</div>
							<div class="about__role-img">
								<img src="{{ asset('img/icons/tyrist.svg') }}" alt="Role icon">
							</div>
						</div>
						<div class="about__role-item">
							<div class="about__role-header">
								<h3>Боец спецназа</h3>
							</div>
							<div class="about__role-img">
								<img src="{{ asset('img/icons/swat.svg') }}" alt="Role icon">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about__container">
			<section class="about__nav">
				<h2 class="about__title">
					Регистрируйся и начинай играть уже сейчас, но перед этим ознакомься с:
				</h2>
				<div class="about__nav-bottom">
					<div class="about__nav-item">
						<h3>Правила сервера</h3>
						<img src="{{ asset('img/icons/rule.svg') }}" alt="Icon">
					</div>
					<div class="about__nav-item">
						<h3>Лор мира</h3>
						<img src="{{ asset('img/icons/lore.svg') }}" alt="Icon">
					</div>
				</div>
			</section>
			<section class="about__launcher">
				<h2 class="about__title about__launch_title">
					И скачивай лаунчер
				</h2>
				<div class="about__launcher__block">
					<div class="about__launcher__left">
						<h3>Наш лаунчер New York Times</h3>
						<p>Доступен для Linux и Windows</p>
						<a href="#" class="about__laucher__button">
							Скачать лаунчер
						</a>
					</div>
					<img src="{{ asset('img/launcher.png') }}" alt="Launcher img">
				</div>
			</section>
		</div>
	</main>
@endsection