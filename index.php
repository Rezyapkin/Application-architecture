<html>
<title>Домашнее задание к уроку 9</title>
<body>
<h1>Домашнее задание к уроку 9</h1>
<ul>
<?php for($lesson=1; file_exists('task'.$lesson); $lesson++): ?>
<li><a href="task<?=$lesson?>">Задание <?=$lesson?></a></li>
<?php endfor; ?>
</ul>
</body>
</html>