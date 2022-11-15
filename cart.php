<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cart.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="cart">
            <div class="wrapper">
                <?php
                

                $out = file_get_contents('cart.txt');
                $out = preg_replace('/]\[/',',',$out);
                
                $Arr = json_decode($out,TRUE);
                
                foreach($Arr as $key){
                    $name = $key['name'];
                    $count = $key['count'];
                    echo "<div class='elem'>
                        <p>$name</p>
                        <p>$count</p>
                    </div>";
                };
                

                ?>
            </div>
            <div class="res">
                <button>Купить</button>
                <p class="sum">Общая сумма - 3050 руб.</p>
            </div>
            
        </div>
    </div>
</body>
</html>