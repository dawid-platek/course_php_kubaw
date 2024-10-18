<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

/* Stałe w PHP tworzymy z funkcją define(), nazwy stałcyh nie mają znaku $, nie można zmieniać ich wartości */


define("CONSTANT_TEST", 123);
echo (CONSTANT_TEST. "<br>");

// define("CONSTANT_TEST", 123); //Nie można powtórzyć stałej

echo(__FILE__. "<br>");

echo(__DIR__. "<br>");

?>




</body>
</html>