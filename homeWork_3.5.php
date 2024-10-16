<?php
// Задача 1: Создание простого массива
/* Создайте массив с именами нескольких ваших друзей и выведите его на экран */

// Создаем массив с именами людей

$names = array("Алексей", "Мария", "Ольга", "Иван", "Екатерина");

// Выводим массив на экран
foreach ($names as $name) {
    echo $name . "<br>";
}

// ----------------------------------------------------
// Задача 2: Индексы массива
// Создайте массив чисел и получите значение элемента по индексу

// Создаем массив с произвольными числами
$numbers = array(12, 45, 78, 23, 56);

// Выводим элемент массива с индексом 2
echo "Элемент с индексом 2: " . $numbers[2];

// ----------------------------------------------------
// Задача 3: Ассоциативный массив
/* Создайте ассоциативный массив, который будет содержать информацию о вашем друге: имя, возраст и город */

// Создаем ассоциативный массив
$person = array(
    "name" => "Алексей",
    "age" => 30,
    "city" => "Москва"
);

// Выводим имя и возраст
echo "Имя: " . $person["name"] . "<br>";
echo "Возраст: " . $person["age"];

// ----------------------------------------------------
// Задача 4: Массивы с циклами
/* У вас есть массив чисел. Выведите все числа из массива, которые больше 10 */

// Создаем массив из чисел
$numbers = array(5, 12, 8, 25, 7, 15);

// Цикл для вывода чисел, которые больше 10
foreach ($numbers as $number) {
    if ($number > 10) {
        echo $number . "<br>";
    }
}

// ----------------------------------------------------
// Задача 5: Работа с массивами функций
// Создайте массив чисел и посчитайте их сумму

// Создаем массив из 5 чисел
$numbers = array(10, 20, 5, 15, 30);

// Находим сумму всех чисел массива
$sum = array_sum($numbers);

// Выводим сумму на экран
echo "Сумма всех чисел: " . $sum;

// ----------------------------------------------------
// Задача 6: Учет товаров в магазине
/* Необходимо создать систему учета товаров в магазине. 
Каждый товар должен храниться в виде ассоциативного массива с ключами:
name — название товара
price — цена товара
quantity — количество на складе */

// 1. Создаем массив товаров
$products = array(
    array("name" => "Ноутбук", "price" => 50000, "quantity" => 10),
    array("name" => "Смартфон", "price" => 30000, "quantity" => 20),
    array("name" => "Планшет", "price" => 20000, "quantity" => 15),
    array("name" => "Наушники", "price" => 5000, "quantity" => 50),
    array("name" => "Монитор", "price" => 15000, "quantity" => 5)
);

// 2. Функция для вывода списка товаров с их названиями и ценами
function displayProducts($products) {
    foreach ($products as $product) {
        echo "Название: " . $product['name'] . ", Цена: " . $product['price'] . " руб.<br>";
    }
}

// 3. Функция для добавления нового товара в массив
function addProduct(&$products, $name, $price, $quantity) {
    $products[] = array("name" => $name, "price" => $price, "quantity" => $quantity);
}

// 4. Функция для обновления количества товара на складе
function updateQuantity(&$products, $name, $newQuantity) {
    foreach ($products as &$product) {
        if ($product['name'] === $name) {
            $product['quantity'] = $newQuantity;
            return;  // Прерываем цикл, когда товар найден и обновлен
        }
    }
}

// Тестируем функции

// Выводим все товары
echo "<strong>Список товаров:</strong><br>";
displayProducts($products);

echo "<br>";

// Добавляем новый товар
addProduct($products, "Клавиатура", 2500, 30);
echo "<strong>После добавления нового товара:</strong><br>";
displayProducts($products);

echo "<br>";

// Обновляем количество товара "Смартфон"
updateQuantity($products, "Смартфон", 10);
echo "<strong>После обновления количества товара 'Смартфон':</strong><br>";
displayProducts($products);

// ----------------------------------------------------
// Задача 7: Расчет среднего балла студентов
/* У вас есть массив студентов, каждый студент представлен в виде ассоциативного массива с полями:
name — имя студента
grades — массив оценок студента
Задача:
1. Создайте массив из как минимум 3 студентов.
2. Напишите функцию, которая выводит средний балл каждого студента.
3. Напишите функцию, которая выводит имя студента с самым высоким средним баллом */

// 1. Создаем массив из как минимум 3 студентов
$students = array(
    array("name" => "Иванов", "grades" => array(5, 4, 5, 3)),
    array("name" => "Петров", "grades" => array(4, 5, 5, 5)),
    array("name" => "Сидоров", "grades" => array(3, 3, 4, 5))
);

// 2. Функция для вывода среднего балла каждого студента
function displayAverageGrades($students) {
    foreach ($students as $student) {
        $average = array_sum($student['grades']) / count($student['grades']);
        echo "Средний балл студента " . $student['name'] . ": " . round($average, 2) . "<br>";
    }
}

// 3. Функция для нахождения студента с самым высоким средним баллом
function findTopStudent($students) {
    $topStudent = null;
    $highestAverage = 0;

    foreach ($students as $student) {
        $average = array_sum($student['grades']) / count($student['grades']);
        if ($average > $highestAverage) {
            $highestAverage = $average;
            $topStudent = $student['name'];
        }
    }

    echo "Студент с самым высоким средним баллом: " . $topStudent . " (средний балл: " . round($highestAverage, 2) . ")";
}

// Тестируем функции

// Выводим средний балл каждого студента
echo "<strong>Средний балл каждого студента:</strong><br>";
displayAverageGrades($students);

echo "<br>";

// Находим студента с самым высоким средним баллом
echo "<strong>Студент с самым высоким средним баллом:</strong><br>";
findTopStudent($students);

// ----------------------------------------------------
// Задача 8: Поиск дубликатов в массиве
/* Предположим, у вас есть массив чисел. Вам нужно найти и вывести все повторяющиеся числа.
Задача:
1. Создайте массив с произвольными числами, в котором есть повторяющиеся элементы.
2. Напишите функцию, которая находит все дубликаты в массиве и выводит их */

// 1. Создаем массив с произвольными числами, в котором есть повторяющиеся элементы
$numbers = array(5, 3, 8, 3, 7, 5, 9, 2, 5, 7);

// 2. Функция для нахождения всех дубликатов в массиве
function findDuplicates($array) {
    $counts = array_count_values($array); // Считаем количество каждого числа
    $duplicates = array(); // Массив для хранения дубликатов

    // Проходим по массиву с количеством элементов
    foreach ($counts as $number => $count) {
        if ($count > 1) {
            $duplicates[] = $number; // Если число встречается более одного раза, добавляем его в массив дубликатов
        }
    }

    // Выводим дубликаты
    if (!empty($duplicates)) {
        echo "Повторяющиеся числа: " . implode(", ", $duplicates);
    } else {
        echo "Повторяющихся чисел нет.";
    }
}

// Тестируем функцию
findDuplicates($numbers); // Повторяющиеся числа: 5, 3, 7

// ----------------------------------------------------
// Задача 9: Объединение и сортировка массивов
/* У вас есть два массива с числами. Нужно объединить их в один и отсортировать по возрастанию.
Задача:
1. Создайте два массива с числами.
2. Напишите функцию, которая объединяет оба массива в один.
3. Напишите функцию, которая сортирует объединенный массив по возрастанию. */

// 1. Создаем два массива с числами
$array1 = array(5, 2, 9, 1, 7);
$array2 = array(8, 3, 6, 4, 0);

// 2. Функция для объединения двух массивов в один
function mergeArrays($array1, $array2) {
    return array_merge($array1, $array2); // Объединяем массивы
}

// 3. Функция для сортировки массива по возрастанию
function sortArrayAscending(&$array) {
    sort($array); // Сортируем массив по возрастанию
}

// Тестируем функции

// Объединяем массивы
$mergedArray = mergeArrays($array1, $array2);

// Сортируем объединенный массив
sortArrayAscending($mergedArray);

// Выводим отсортированный массив
echo "Отсортированный массив: " . implode(", ", $mergedArray);

// ----------------------------------------------------
// Задача 10: Фильтрация массива
/* У вас есть массив чисел. Вам нужно создать функцию, которая отфильтрует массив и вернет только четные числа.
Задача:
1. Создайте массив с числами.
2. Напишите функцию, которая отфильтровывает все нечетные числа и возвращает
массив только с четными числами. */

// 1. Создаем массив с числами
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// 2. Функция для фильтрации массива и возврата только четных чисел
function filterEvenNumbers($array) {
    $evenNumbers = array(); // Массив для хранения четных чисел

    foreach ($array as $number) {
        if ($number % 2 == 0) {
            $evenNumbers[] = $number; // Добавляем число в массив, если оно четное
        }
    }

    return $evenNumbers;
}

// Тестируем функцию
$evenNumbers = filterEvenNumbers($numbers);

// Выводим массив четных чисел
echo "Четные числа: " . implode(", ", $evenNumbers);

?>