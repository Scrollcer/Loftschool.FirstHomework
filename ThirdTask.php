<?php
$age = 22;
if ($age > 17 && $age < 66){
    echo "Вам еще работать и работать";
}elseif ($age < 18){
    echo "Вам ещё рано работать";
}elseif ($age > 65){
    echo "Вам пора на пенсию";
}else{
    echo "Неизвестный возраст";
}

