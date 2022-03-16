<?php

// функция разбиения ФИО
function getPartsFromFullname($fullName) 
{
    $tempArray = array_values(explode(' ', $fullName));
    $keys = ['surname', 'name', 'patronomyc'];
    $resultArray = array_combine($keys, $tempArray);

    return $resultArray;
}
