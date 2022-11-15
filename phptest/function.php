<?php

if(isset($_GET['pass']) && trim($_GET['pass']) != ''){
    if(strlen($_GET['pass']) >= 6){
        echo "Приветсвутю, ", $_GET['name'], "<br>";
        echo "Твой пароль на сегодня - ", $_GET['pass'];
    }
    else{
        echo "Пароль должен быть больше 6-ти символов";
    }
    
    
}
else{
    echo "Введите данные";
}
    


?>