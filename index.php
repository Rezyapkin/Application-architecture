<html>
<title>Домашнее задание к уроку 7</title>
<body>
<h1>Домашнее задание к уроку 7</h1>
<h3>1. Найти и указать в проекте Front Controller и расписать классы, которые с ним взаимодействуют.</h3>
<p>Front Controller - Kernel (app/Kernel.php)</p>
<p>Класс ControllerResolver нужен для поиска нужного контроллера. Сами контроллеры находятся в пространстве именн controller (MainController, OrderController, ProductController, UserController).</p>
<p>Класс ArgumentResolver получает нужный метод (action), который нужно вызвать в классе контроллера.</p>
<p>В качестве параметров фронт контроллер принимает экземпляр класса Request, а возвращает Response (сгенерированная страница).</p>
<p>P.S. Надеюсь описал то, что нужно</p>
</body>
</html>