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
<h3>2. Найти в проекте паттерн Registry и объяснить, почему он был применён.</h3>
<p>Нашел: Framework\Registry )))</p>
<p>В нем храниться DI-контейнер $containerBuilder. containerBuilder в любой момент (из любого класса) можно получить из реестра.</p>
<p>Также в нем хранится конфигурация проекта (загружается из конфигурационного файла), что очень удобно. Можем получить значение переменной конфигурации через метод Registry::getDataConfig.</p>
<h3>Добавить во все классы Repository использование паттерна Identity Map вместо постоянного генерирования сущностей.</h3>
<p>Смотреть папку task3. <b>Сомневаюсь там ли храню и правильно ли разместил IdentityMap, а также верно ли обращаюсь</b></p>
</body>
</html>