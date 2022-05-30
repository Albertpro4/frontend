<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Сайт</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <span>itFuture</span>
    </div>
    <div id="about">
      <a href="#" title="Возможности" onclick="slowScroll('#main')">Возможности</a>
      <a href="#" onclick="slowScroll('#overview')" title="Преимущества">Преимущества</a>
      <a href="#" onclick="slowScroll('#contacts')" title="Контакты">Контакты</a>
      <a href="#" onclick="slowScroll('#faq')" title="Ответы на вопросы">FAQ</a>
    </div>
  </header>

  <div id="top">
    <h1>Программирование</h1>
    <h3>Эпоха будущего!</h3>
  </div>

  <div id="main">
    <div class="intro">
      <h2>Наши услуги помогут вам!</h2>
      <span>Большой выбор всего, что может вам пригодиться</span>
    </div>
    <div class="text">
      <span>Будет текст.</span>
    </div>
  </div>

  <div id="overview">
    <h2>Преимущества</h2>
    <h4>с нами все проще</h4>

    <div class="img">
      <img src="https://itproger.com/img/courses/1532975967.jpg" alt="">
      <span>Изучение языка Ruby для начинающих</span>
    </div>
    <div class="img">
      <img src="https://itproger.com/img/courses/1530341233.jpg" alt="">
      <span>Уроки PhotoShop для начинающих</span>
    </div>
  </div>

  <div id="contacts">
    <center><h5>Обратная связь</h5></center>
    <form id="form_input" action="post.php" method="POST">
      <label for="name">Имя <span>*</span></label><br>
      <input type="text" placeholder="Введите имя" name="name" id="name"><br>
      <label for="email">Ваша почта <span>*</span></label><br>
      <input type="email" placeholder="Введите email" name="email" id="email"><br>
      <label for="message">Сообщение <span>*</span></label><br>
      <textarea placeholder="Введите ваше сообщение" name="message" id="message"></textarea><br>
        <button class="btn btn-success" type="submit">Отправить</button>
    </form>
  </div>
  </div>
  <div id="faq">
    <div>
      <span class="title">Оплата</span><br>
      <span class="heading">Как будет проходит оплата?</span>
      <p>Текст.</p>
      <span class="heading">Как будет проходит оплата?</span>
      <p>Текст.</p>
      <span class="heading">Как будет проходит оплата?</span>
      <p>Текст.</p>
    </div>
    <div>
      <span class="title">Информация</span><br>
      <span class="heading">Что входит в услуги сервиса</span>
      <p>Текстm.</p>
      <span class="heading">Что входит в услуги сервиса</span>
      <p>Текст.</p>
      <span class="heading">Что входит в услуги сервиса</span>
      <p>Текст.</p>
    </div>
    <div>
      <span class="title">Гарантии</span><br>
      <span class="heading">Какие гарантии есть</span>
      <p>Текст.</p>
      <span class="heading">Какие гарантии есть</span>
      <p>Текст.</p>
      <span class="heading">Какие гарантии есть</span>
      <p>Текст.</p>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }

    $(document).on("scroll", function () {
      if($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
      else
        $("header").attr("class", "fixed");
    });
  </script>
</body>
</html>
