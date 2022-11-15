<?php

if(isset($_POST['pass']) && trim($_POST['pass']) != ''){
    if(strlen($_POST['pass']) >= 6){
        echo "Приветсвутю, ", $_POST['name'], "<br>";
        echo "Твой пароль на сегодня - ", $_POST['pass'];
    }
    else{
        echo "Пароль должен быть больше 6-ти символов";
    }
    
    
}
else{
    echo "Введите данные";
}
    


?>