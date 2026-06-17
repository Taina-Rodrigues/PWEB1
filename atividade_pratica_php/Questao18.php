<?php

$a = "Texto";
$b = "";
$c = 0;
$d = null;

// Testando isset()
echo "isset(a): " . (isset($a) ? "true" : "false") . "<br>";
echo "isset(d): " . (isset($d) ? "true" : "false") . "<br>";

// Testando empty()
echo "empty(a): " . (empty($a) ? "true" : "false") . "<br>";
echo "empty(b): " . (empty($b) ? "true" : "false") . "<br>";
echo "empty(c): " . (empty($c) ? "true" : "false") . "<br>";
echo "empty(d): " . (empty($d) ? "true" : "false") . "<br>";

?>