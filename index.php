<?
 // запрет кэширования страницы браузером
    header("Expires: Thu, 19 Feb 1998 13:24:18 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-cache, must-revalidate");
    header("Cache-Control: post-check=0,pre-check=0");
    header("Cache-Control: max-age=0");
    header("Pragma: no-cache");

 // объединение функций через include
    include 'getFullnameFromParts.php';
    include 'getPartsFromFullname.php';
    include 'getShortName.php';
    include 'getGenderFromName.php';
    include 'getGenderDescription.php';
    include 'getPerfectPartner.php';
?>
    
<?php

// генерация случайного значения типа float
    function random_float($min,$max) 
{
    return ($min+lcg_value()*(abs($max-$min)));
}

    $example_persons_array = [
        [
            'fullname' => 'Иванов Иван Иванович',
            'job' => 'tester',
        ],
        [
            'fullname' => 'Степанова Наталья Степановна',
            'job' => 'frontend-developer',
        ],
        [
            'fullname' => 'Пащенко Владимир Александрович',
            'job' => 'analyst',
        ],
        [
            'fullname' => 'Громов Александр Иванович',
            'job' => 'fullstack-developer',
        ],
        [
            'fullname' => 'Славин Семён Сергеевич',
            'job' => 'analyst',
        ],
        [
            'fullname' => 'Цой Владимир Антонович',
            'job' => 'frontend-developer',
        ],
        [
            'fullname' => 'Быстрая Юлия Сергеевна',
            'job' => 'PR-manager',
        ],
        [
            'fullname' => 'Шматко Антонина Сергеевна',
            'job' => 'HR-manager',
        ],
        [
            'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
            'job' => 'analyst',
        ],
        [
            'fullname' => 'Бардо Жаклин Фёдоровна',
            'job' => 'android-developer',
        ],
        [
            'fullname' => 'Шварцнегер Арнольд Густавович',
            'job' => 'babysitter',
        ],
    ];
    
    echo getFullnameFromParts('Славин', 'Семён', 'Сергеевич'); // вызов функции объединеня ФИО в одну строку
    echo "<br><br>";
    print_r(getPartsFromFullname('Степанова Наталья Степановна')); // вызов функции разбиения ФИО в массив
    echo "<br><br>";
    echo getShortName('Бардо Жаклин Фёдоровна'); // вызов функции сокращения ФИО
    echo "<br><br>";
    echo getGenderFromName('Быстрая Юлия Сергеевна'); // вызов функции определения пола по ФИО
    echo "<br><br>";
    getGenderDescription($example_persons_array); // вызов функции определения возрастно-полового состава
    echo "<br><br>";
    echo getPerfectPartner('ШмАТКо', 'антонина', 'Сергеевна', $example_persons_array); // вызов функции идеального подбора пары
    
