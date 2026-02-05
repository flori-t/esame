<?php
declare(strict_types=1);

/**
 * Ritorna un saluto personalizzato.
 */
function greet(string $name): string
{
    return "CIAO, {$name}!";
}

// Comando di esecuzione: php hello.php [nome]
// Esempio: php hello.php Mario
$name = $argv[1] ?? "Mondo";
echo greet($name) . PHP_EOL;
