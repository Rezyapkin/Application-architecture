<html>
<title>Домашнее задание к уроку 9</title>
<body>
<h1>Домашнее задание к уроку 9</h1>
<p>Курс алгоритмов у Вас не проходил, доп. задание для тех кто его не проходил не делал из-за нехватки времени. Основные задачи все сделал, включая * и **.</p>
<ul>
<?php for($lesson=1; file_exists('task'.$lesson); $lesson++): ?>
<li><a href="task<?=$lesson?>">Задание <?=$lesson?></a></li>
<?php endfor; ?>
</ul>
</body>
</html>