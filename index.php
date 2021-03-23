<html>
<title>Домашнее задание к уроку 10</title>
<body>
<h1>Домашнее задание к уроку 10</h1>
<ul>
<?php for($lesson=1; file_exists('task'.$lesson.'.php'); $lesson++): ?>
<li><a href="task<?=$lesson?>.php">Задание <?=$lesson?></a></li>
<?php endfor; ?>
</ul>
</body>
</html>