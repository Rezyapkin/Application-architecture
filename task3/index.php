<?php

namespace task3;

require_once "../config.php";
require_once "../Autoload.php";

spl_autoload_register([new \Autoload(), 'loadClass']);

echo "<h3>Задание 3</h3>";

$editor = new WordEditor(new Clipboard());
$doc = new WordDocument($editor);
$doc->open("task.txt");
$doc->print();

$editor->action($doc, new CopyCommand(9, 25));
$editor->action($doc, new PasteCommand(26));
$editor->action($doc, new PasteCommand(26));
$editor->action($doc, new PasteCommand(26));
$doc->print();

$editor->down(2);
$doc->print();

$editor->action($doc, new CutCommand(9, 25));
$editor->action($doc, new PasteCommand(0));
$doc->print();
$doc->save("task_out.txt");