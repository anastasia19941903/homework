<?php

require_once  "2.php";

if ($age >= 18 & $age <= 59)  {

    echo "Вам ещё работать и работать";

}
elseif ($age > 59) {

    echo "Вам пора на пенсию";

}
elseif ($age >= 0 & $age <= 17) {

    echo "Вам еще рано работать";

}
else {
    echo "Неизвестный возраст";
}