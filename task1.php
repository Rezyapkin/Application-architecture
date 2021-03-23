<?php

include 'Tree.php';

echo "<h3>LNR</h3>";
$tree->bypass('lnr');
echo "<br>";

echo "<h3>LRN</h3>";
$tree->bypass('lrn');
echo "<br>";

echo "<h3>NLR</h3>";
$tree->bypass('nlr');
echo "<br>";