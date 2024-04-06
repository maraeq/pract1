<?php

$number = readline("Введите число : ");
$xnum = $number % 2;
if ($xnum == 0) {
    echo " это четное число";
} else {
    echo " это нечетное число";
}