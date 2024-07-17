<?php 

$insults = ['idiot', 'shit'];
$asterisk = [];

foreach($insults as $insult) {
    $asterisk[] = substr($insult, 0, 1) . str_repeat('*', strlen($insult) - 1);
}

$sentence = readline("Enter a sentence : ");
$sentence = str_replace($insults, $asterisk, $sentence);

echo $sentence;