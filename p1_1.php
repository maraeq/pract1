<?php

$pass = 'pass123';
$cpass = readline('pass = ');
if ($pass === $cpass){
    echo "Пароль совпадает";
} else {
    echo "Пароль не совпадает";
}
