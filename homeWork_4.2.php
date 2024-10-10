<?php
// 1. Определение переменных и констант
// Объявление переменных
$webSiteName = "My Website";  // строка
$visitorsCount = 9876;     // число
$isSiteActive = true;      // булево значение

// Создание константы с помощью функции define()
define("SITE_NAME", "My New Website");

echo "\n";
// Вывод значений с помощью echo
echo "Название сайта (echo): " . $webSiteName . "\n";
echo "Количество посетителей (echo): " . $visitorsCount . "\n";
echo "Активен ли сайт? (echo)" . ($isSiteActive ? ' Yes' : ' No') . "\n";

// Вывод константы с помощью echo
echo "Константа SITE_NAME (echo): " . SITE_NAME . "\n";

echo "\n";
// Вывод значений с помощью print
print "Название сайта (print): " . $webSiteName . "\n";
print "Количество посетителей (print): " . $visitorsCount . "\n";
print "Активен ли сайт? (print) " . ($isSiteActive ? ' Yes' : ' No') . "\n";

// Вывод константы с помощью print
print "Константа SITE_NAME (print): " . SITE_NAME . "\n\n";

// 2. Преобразование типов;
// Строка, содержащая число
$string = "12345";

// Преобразование строки в число
$stringToNumber = (int)$string;

// Вывод значения и типа переменной до преобразования
echo "До преобразования: " . $string . "\n";
echo "Тип до преобразования: " . gettype($string) . "\n\n";

// Вывод значения и типа переменной после преобразования
echo "После преобразования: " . $stringToNumber . "\n";
echo "Тип после преобразования: " . gettype($stringToNumber) . "\n\n";

// 3. Использование операторов
// Объявление числовых переменных
$n1 = 3;
$n2 = 5;
$n3 = 7;

// Арифметические операции
$addition = $n1 + $n2;         // Сложение
$subtraction = $n1 - $n2;      // Вычитание
$multiplication = $n1 * $n2;   // Умножение
$division = $n1 / $n2;         // Деление

// Вывод результатов арифметических операций
echo "Сложение: $n1 + $n2 = $addition\n";
echo "Вычитание: $n1 - $n2 = $subtraction\n";
echo "Умножение: $n1 * $n2 = $multiplication\n";
echo "Деление: $n1 / $n2 = $division\n\n";

// Операторы сравнения
$isEqual = ($n1 == $n3);       // Равно
$isGreaterThan = ($n1 > $n2);  // Больше
$isLessThan = ($n2 < $n3);     // Меньше

// Вывод результатов сравнения
echo "$n1 равно $n3? " . ($isEqual ? 'Да' : 'Нет') . "\n";
echo "$n1 больше $n2? " . ($isGreaterThan ? 'Да' : 'Нет') . "\n";
echo "$n2 меньше $n3? " . ($isLessThan ? 'Да' : 'Нет') . "\n\n";

// Логическое выражение
$logicalAnd = ($n1 > $n2) && ($n3 > $n1);   // И
$logicalOr = ($n1 > $n3) || ($n2 < $n3);    // Или

// Вывод результатов логических операций
echo "Логическое AND ($n1 > $n2 AND $n3 > $n1): " . ($logicalAnd ? 'True' : 'False') . "\n";
echo "Логическое OR ($n1 > $n3 OR $n2 < $n3): " . ($logicalOr ? 'True' : 'False') . "\n\n";

// 4. Суперглобальная переменная $_SERVER
// Вывод информации о сервере и окружении
echo "Имя сервера: " . $_SERVER['SERVER_NAME'] . "\n";
echo "IP-адрес пользователя: " . $_SERVER['REMOTE_ADDR'] . "\n";
echo "Браузер пользователя: " . $_SERVER['HTTP_USER_AGENT'] . "\n";
?>