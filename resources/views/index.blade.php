@extends('layouts.main')

@section('content')
<div class="main--wrapper">
	<section class="header">
		<x-header></x-header>
		<div class="header--body">
          <h1 class="header--title">Начни свое путешествие</h1>
          <h2 class="header--subtitle">Окунись в атмосферу Нью-Йорка 2010x <br> и начни свой путь в альтернативном мире свободы, роскоши и криминала</h2>

          <a class="header--button-first" href="{{ route('register') }}">Регистрация <span><img src="{{ asset('img/icons/arrow-right.svg') }}" alt="Arrow right icon"></span></a>
          <a class="header--button-second" href="#">Скачать лаунчер <span><img src="{{ asset('img/icons/arrow-right.svg') }}" alt="Arrow right icon"></span></a>

          <img src="{{ asset('img/icons/arrow-down.svg') }}" alt="Arrow down" class="bounce header--icon-down">
        </div>
	</section>
	<section class="advantages">
        <div class="advantages--wrapper">
          <div class="advantages--item">
            <div class="advantages--image">
              <img src="{{ asset('img/icons/icon3.svg') }}" alt="Advantages icon">
            </div>
            <div class="advantages--text">
              <h3 class="advantages--header">Воссозданный Нью-Йорк</h3>
              <p class="advantages--desc">Команда NYT отнеслась с вниманием к деталям и проработала реальные районы NY. Стать драгдилером улиц Бруклина или же брокером из Манхэттена – решать только тебе</p>
            </div>
          </div>
          <div class="advantages--item">
            <div class="advantages--image">
              <img src="{{ asset('img/icons/icon1.svg') }}" alt="Advantages icon">
            </div>
            <div class="advantages--text">
              <h3 class="advantages--header">Лаунчер и модификации</h3>
              <p class="advantages--desc">Благодаря лаунчеру и собственному модпаку – в 1 клик происходит погружение в новую игру с приятной графикой на вкус и ПК, невероятным кол-вом скинов для ролей, транспорта и оружия! </p>
            </div>
          </div>
          <div class="advantages--item">
            <div class="advantages--image">
              <img src="{{ asset('img/icons/icon2.svg') }}" alt="Advantages icon">
            </div>
            <div class="advantages--text">
              <h3 class="advantages--header">Roleplay Атмосфера</h3>
              <p class="advantages--desc"> Мы делаем всё, что бы каждый желающий ощутил комфорт. Сотни локаций для игры, реалистичный мод и внимательная администрация помогут ощутить вкус настоящей игры!</p>
            </div>
          </div>
        </div>
      </section>
	<section class="video">
		<h2 class="video--title">Не хватает деталей?</h2>
		<h4 class="video--subtitle">Смотри подробный обзор на New York Times от основателя проекта</h4>

		<div class="video--content">
		  <iframe loader="youtube" src="MfLB_bNr3Tg" width="1028" height="700"></iframe>
		</div>
	</section>
	<section class="roles">
		<div class="slider">
			<div class="slider--wrapper">
				<div class="slider--content">
					<div class="slider--count">
						<h6 class="slider--counter">01</h6>
					</div>
					<div class="slider--inner">
						<div class="slider--item">
							<h1 class="slider--item-header">Полицейский</h1>
							<p class="slider--item-desc">Офицер Бруклинского ПД. Старается быть справедливым и неподкупным копом, но система не всегда позволяем ему придерживаться своих принципов.</p>
						</div>
						<div class="slider--item">
							<h1 class="slider--item-header">Хулиганка</h1>
							<p class="slider--item-desc">Молодая и дерзкая любительница Манхэттенских рейв-тусовок, тяжёлого металла и всех прелестей ночной жизни.</p>
						</div>
						<div class="slider--item">
							<h1 class="slider--item-header">Студентка</h1>
							<p class="slider--item-desc">Изучает психологию, мечтает о светлом будущем и обожает прогулки по цивильным локациям Нью-Йорка. Вместо шумных тусовок предпочитает посещение галерей современного исскуства.</p>
						</div>
						<div class="slider--item">
							<h1 class="slider--item-header">Высокопоставленный член Якудзы</h1>
							<p class="slider--item-desc">Стиль его изящен, а дела грязные и высокодоходные. Помимо управления преступными бригадами, основал свой бренд модных и дорогостоящих костюмов.</p>
						</div>
						<div class="slider--item">
							<h1 class="slider--item-header">Бездомный</h1>
							<p class="slider--item-desc">Скитается по центральным улицам Манхэттена, получает пособие, считает себя свободным человеком. За 1$ расскажет как устроена вселенная и поведает тайны мирового правительства.</p>
						</div>
						<div class="slider--item">
							<h1 class="slider--item-header">Уличный Райтер</h1>
							<p class="slider--item-desc">Граффити и тэги это его жизненный кайф. Этот парень разукрашивает бетонные джунги Нью-Йорка ежедневно, за исключением моментов, когда нет денег на новые баллоны.</p>
						</div>
						<div class="slider--item">
							<h1 class="slider--item-header">Полицейский</h1>
							<p class="slider--item-desc">Офицер Бруклинского ПД. Старается быть справедливым и неподкупным копом, но система не всегда позволяем ему придерживаться своих принципов.</p>
						</div>
						<div class="slider--item">
							<h1 class="slider--item-header">Девушка из FDNY</h1>
							<p class="slider--item-desc">Молодая и амбициозная девушка с почётной профессией "пожарный-спасатель". В свободное от работы время - зооволонтёр. Также ведёт свой блог.</p>
						</div>
						<div class="slider--item">
							<h1 class="slider--item-header">Гангста-рэпер</h1>
							<p class="slider--item-desc">Очередной рэп исполнитель из низов Бруклинских улиц, которого знают лишь местные хоуми. Этот чел насквозь пропитан шмалью и текстами величейшего The Notorious B.I.G.</p>
						</div>
						<div class="slider--item">
							<h1 class="slider--item-header">Офисный планктон</h1>
							<p class="slider--item-desc">Менеджер какой-то там крупной корпорации на Уолл-Стрит и постоянный посетитель сети кофеень Ста́рбакс. Однажды он посмотрит фильм "Бойцовский Клуб" и начнётся веселье.</p>
						</div>
						<div class="slider--item">
							<h1 class="slider--item-header">Русский модник</h1>
							<p class="slider--item-desc">Модный житель славянского района "Брайтон-Бич". Открыл бутик "новинки последней моды" для местных, которые покинули СССР в 90-е но по прежнему не переоделись.</p>
						</div>
						<div class="slider--item">
							<h1 class="slider--item-header">Латинос</h1>
							<p class="slider--item-desc">Практически всегда движует на районе среди своих. Зарабатывает на жизнь грабежами туристов и воровством магнитол, из-за чего многократно судим (но это его не беспокоит).</p>
						</div>
						<div class="slider--item">
							<h1 class="slider--item-header">Босс итало-американской семьи</h1>
							<p class="slider--item-desc">Крепок во власти и имеет высокий статус в криминальном мире. Свою финансовую мощь основал на многолетнем кровопролитии, рэкету, ростовщи́честву и азартным играм.</p>
						</div>
						<div class="slider--item">
							<h1 class="slider--item-header">Скинхед</h1>
							<p class="slider--item-desc">Бьёт от сердца к солнцу, ломает кости на слэмах удовольствия ради, отморожен на все сто и неисправим, ведь свою жесть фанатично оправдывает идеей.</p>
						</div>
						<div class="slider--item">
							<h1 class="slider--item-header">Мобстер мафиозного клана</h1>
							<p class="slider--item-desc">Известен своим умением выбивать долги и вместе с тем зубные составы. Его визит означает, что вы не на хорошем счету у мафии и пришло время платить по счетам.</p>
						</div>
					</div>
					<div class="slider--button">
						<a href="{{ route('register') }}" class="slider--link">Попробовать роль <span><img src="{{ asset('img/icons/arrow-circle-right.svg') }}" alt="Arrow Right"></span></a>
					</div>
					<div class="slider--controls">
						<div class="slider--left">
							<button class="slider--left-link">
								<img src="{{ asset('img/icons/arrow-left-roles.svg') }}" alt="Arrow slider">
							</button>
						</div>
						<div class="slider--main-counter">
							<p class="slider--counter-el">
								<span class="slider--counter-active">01</span>
								/
								<span class="slider--counter-max">07</span>
							</p>
						</div>
						<div class="slider--right">
							<button class="slider--right-link">
								<img src="{{ asset('img/icons/arrow-right-roles.svg') }}" alt="Arrow slider">
							</button>
						</div>
					</div>
				</div>
				<div class="slider--image">
					<img src="{{ asset('img/roles/cop.png') }}" alt="Police Officer" class="slider--image-content">
					<img src="{{ asset('img/roles/6.png') }}" alt="Police Officer" class="slider--image-content">
					<img src="{{ asset('img/roles/7.png') }}" alt="Police Officer" class="slider--image-content">
					<img src="{{ asset('img/roles/8.png') }}" alt="Police Officer" class="slider--image-content">
					<img src="{{ asset('img/roles/9.png') }}" alt="Police Officer" class="slider--image-content">
					<img src="{{ asset('img/roles/10.png') }}" alt="Police Officer" class="slider--image-content">
					<img src="{{ asset('img/roles/11.png') }}" alt="Police Officer" class="slider--image-content">
					<img src="{{ asset('img/roles/12.png') }}" alt="Police Officer" class="slider--image-content">
					<img src="{{ asset('img/roles/13.png') }}" alt="Police Officer" class="slider--image-content">
					<img src="{{ asset('img/roles/14.png') }}" alt="Police Officer" class="slider--image-content">
					<img src="{{ asset('img/roles/15.png') }}" alt="Police Officer" class="slider--image-content">
					<img src="{{ asset('img/roles/16.png') }}" alt="Police Officer" class="slider--image-content">
					<img src="{{ asset('img/roles/17.png') }}" alt="Police Officer" class="slider--image-content">
					<img src="{{ asset('img/roles/18.png') }}" alt="Police Officer" class="slider--image-content">
					<img src="{{ asset('img/roles/19.png') }}" alt="Police Officer" class="slider--image-content">
					<img src="{{ asset('img/roles/20.png') }}" alt="Police Officer" class="slider--image-content">
				</div>
			</div>
		</div>
	</section>
</div>
<div class="second--wrapper">
	<section class="connect">
		<div class="connect--wrapper">
			<h1 class="connect--title">Присоединяйся к игре прямо сейчас, невероятная атмосфера ждёт тебя!</h1>
			<p class="connect--desc">Игровая сборка, мультиплеер и IP уже укомплектованы для тебя. Не стоит тянуть время, невероятная ROLE PLAY атмосфера ждёт тебя!</p>
			<div class="connect--buttons">
				<a href="{{ route('register') }}" class="connect--button-main">Пройти регистрацию</a>
				<a href="#" class="connect--button-secondary">Скачать лаунчер</a>
			</div>
		</div>
	</section>
	<section class="gallery">
		<div class="gallery-header">
			<h2 class="gallery--title">Галерея проекта</h2>

			<div class="gallery--categories">
				<a href="#" class="gallery--category active">Изображения</a>
				<a href="#" class="gallery--category">Видео</a>
			</div>
		</div>

		<div class="gallery--content">
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (1).jpg') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (1).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (2).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (3).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (4).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (5).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (6).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (7).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (8).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (9).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (10).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (11).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (12).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (13).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (14).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (15).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (16).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (17).png') }}" alt="Gallery Image">
			</div>
			<div class="gallery--item">
				<img src="{{ asset('img/gallery/image (18).png') }}" alt="Gallery Image">
			</div>
		</div>

		<div class="gallery--footer">
			<div class="gallery--buttons" id="galleryButtons">
			
			</div>
		</div>
	</section>
</div>
<script src="{{ asset('js/slider.js') }}"></script>
<!-- <script>
    [].forEach.call(document.querySelectorAll('img[data-src]'), function(img) {
      img.setAttribute('src', img.getAttribute('data-src'));
      img.onload = function() {
        img.removeAttribute('data-src');
      };
    });

    $(document).ready(function(e) {
      $("iframe[data-src]").Lazy();
      let screens = $('.gallery--item').length;
      let pages = Math.ceil(screens / 6);

      for (i = 1; i <= pages; i++) {
        $('#galleryButtons').append('<div class="gallery--button" data-page="' + i + '"></div>');
      }

      $('.gallery--button[data-page="1"]').addClass('active');

      $('.gallery--button').click(function(e) {
        e.preventDefault();
        let button = $(this);
        $('.gallery--button.active').removeClass('active');

        let page = button.attr('data-page');

        $('.gallery--item').each(function(index, element) {
          $(element).hide();

          console.log(page);

          if (index < (page * 6) && index >= (page * 6 - 6)) {
            $(element).show();
          }
        });

        button.addClass('active');
      });
    });
</script> -->
<x-login></x-login>
@endsection
