<?php
$texto = "Prática PHP";

// strtoupper → tudo maiúsculo
echo strtoupper($texto) . "<br>";

// strtolower → tudo minúsculo
echo strtolower($texto) . "<br>";

// strlen → tamanho da string
echo strlen($texto) . "<br>";

// str_replace → substituir palavra
echo str_replace("Prática", "PHP", $texto);
?>