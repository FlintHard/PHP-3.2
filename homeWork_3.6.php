<?php
// Уровень 1: Легкий
// 1. Конкатенация строк
$firstName = "Flint";
$secondName = "Hard";
$fullName = $firstName.' '.$secondName;
echo $fullName; // Flint Hard
echo "\n";

// 2. Изменение регистра
$fullNameUpper = strtoupper($fullName);
echo $fullNameUpper; // FLINT HARD
echo "\n";

$fullNameLower = strtolower($fullNameUpper);
echo $fullNameLower; // flint hard
echo "\n";

// 4. Поиск подстроки
$email = "flinthard@outlook.com";
$substring = "@"; // позиция № 9

$position = strpos($email, $substring);

if ($position !== false) {
    echo "Подстрока найдена в позиции: " . $position;
} else {
    echo "Подстрока не найдена";
}
echo "\n";

// 5. Замена подстроки
$nick = "Heart";
$nickName = str_replace($secondName, $nick, $fullName); // Flint Heart

echo $nickName;
echo "\n";

// 6. Форматирование строки
$age = 61;
$location = "Miami, USA, Fl";
$wealth = 420304001;

$dossier = sprintf("Совершенно секретно: "."Имя: %s, Возраст: %d, Состояние: %.1f $., Нахождение: %s", $fullName, $age, $wealth, $location);

echo $dossier;
echo "\n\n";

// 8. Работа с многострочным текстом
$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. \nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$htmlText = nl2br($text);

echo $htmlText;
echo "\n\n";

// Уровень 2: Усложненный
// 1. Сложная конкатенация строк

$dossier2 = "Имя: " . $fullName . "; Псевдоним: " . $nickName . "; Возраст: " . $age . "; Нахождение: " . $location . ".";

echo $dossier2;
echo "\n\n";


// 2. Изменение регистра с условиями
$string = "LoRem ipSuM dOloR sIt aMeT, cOnsEctEtuR adIpIscIng eLIt";
$regString = ucwords(strtolower($string));

echo $regString;
echo "\n\n";

// 3. Сравнение строк с учётом регистра и без
$string1 = "Hello";
$string2 = "hello";
$string3 = "Hello!";

// Проверка с использованием операторов сравнения
if ($string1 == $string2) {
    echo "Строки равны (==)\n";
} else {
    echo "Строки не равны (==)\n";
}

if ($string1 === $string2) {
    echo "Строки равны (===)\n";
} else {
    echo "Строки не равны (===)\n";
}

// Проверка с использованием функции strcasecmp() без учета регистра
if (strcasecmp($string1, $string2) === 0) {
    echo "Строки равны (strcasecmp)\n";
} else {
    echo "Строки не равны (strcasecmp)\n";
}
echo "\n";

// 4. Замена подстроки с использованием массива
$string = "Граждане, храните деньги в сберегательной кассе!";

// Массивы для поиска и замены
$search = ["Граждане", "сберегательной кассе"];
$replace = ["Господа", "крипте"];

// Замена слов в строке
$newString = str_replace($search, $replace, $string);

echo $newString;
echo "\n\n";

// 5. Форматирование строки с числом:
$dossier3 = sprintf("Его имя %s, ему %d лет. Место жительства - %s, его состояние $%d", $fullName, $age, $location, $wealth);

echo $dossier3;
echo "\n\n";

// 6. Разделение и объединение сложной строки
// Исходная строка с числовыми значениями и разделителями
$string = "10, 20, 30, 40, 50";
// Разделяем строку на массив чисел с помощью explode()
$numbersArray = explode(", ", $string);
// Суммируем элементы массива с помощью array_sum()
$summa = array_sum($numbersArray);

echo "Сумма чисел: " . $summa;
echo "\n\n";

// 7. Создание случайной строки
// Напишите функцию, которая генерирует случайную строку из букв и цифр.
function generateRandomString($length) {
// Массив символов (буквы и цифры)
$characters = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
               'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j',
               'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't',
               'u', 'v', 'w', 'x', 'y', 'z',
               'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
               'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
               'U', 'V', 'W', 'X', 'Y', 'Z'];
                   
$charactersLength = count($characters);
$randomString = '';

// Генерируем случайную строку заданной длины
for ($i = 0; $i < $length; $i++) {
    // Выбираем случайный индекс
    $randomIndex = rand(0, $charactersLength - 1);
    // Добавляем случайный символ к результирующей строке
    $randomString .= $characters[$randomIndex];
    }

return $randomString;
}

$randomString = generateRandomString(8); 
echo "Случайная строка: " . $randomString;
echo "\n\n";

// 8. Проверка строки на палиндром
// Напишите функцию, которая проверяет, является ли строка палиндромом.
function isPalindrome($string) {
    // Убираем пробелы и приводим строку к нижнему регистру
    $cleanedString = strtolower(str_replace(' ', '', $string));
    // Переворачиваем строку
    $reversedString = strrev($cleanedString);
    // Сравниваем оригинальную и перевёрнутую строки
    return $cleanedString === $reversedString;
}

// Проверка на палиндром:
$testStrings = [
    "Муха села на варенье...",
    "Tattarrattat",
    "Lorem ipsum dolor sit amet",
    "Rats live on no evil star",
    "1234567890987654321",
    "Some men interpret nine memos",
];

foreach ($testStrings as $string) {
    if (isPalindrome($string)) {
        echo "\"$string\" 'это палиндром.\n";
    } else {
        echo "\"$string\" это не палиндром.\n";
    }
}

?>