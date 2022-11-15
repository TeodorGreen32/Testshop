<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">
    <script defer src="product.js" ></script>
</head>
<body>
    <div class="container">
        <div class="product">
            <?php
            
            require('date.php');
            $id = $_GET['id'];
            $idNext = $id + 1;
            $idPrev = $id - 1;
            $name = $goods[$id]["name"];
            $img = $goods[$id]["imgPath"];
            $cost = $goods[$id]["cost"];
            echo "<a href=indexp.php?sort=>Назад</a>";
            if($id <= 0){
            echo "<div class='cardsmax'>
                <p>$name</p>
                <img src='$img'>
                <p class='cost'>$cost руб</p>
                <div class='navi'>
                <a href='product.php?id=$idNext'>-></a>
                </div>
                </div>";
            }
            elseif($id >= count($goods)-1){
                echo "<div class='cardsmax'>
                <p>$name</p>
                <img src='$img'>
                <p class='cost'>$cost руб</p>
                <div class='navi'><a href='product.php?id=$idPrev'><-</a></div>
                
                </div>";
            }
            else{
                echo "<div class='cardsmax'>
                <p>$name</p>
                <img src='$img'>
                <p class='cost'>$cost руб</p>
                <div class='navi'><a href='product.php?id=$idPrev'><-</a>
                <a href='product.php?id=$idNext'>-></a></div>
                <div class='buy'>
                    <p class='count'>0</p>
                    <div class='reg'> 
                        <button>+</button>
                        <button>-</button>
                    </div>
                    <button>Добавить в корзину</button>
                </div>
                </div>";
            }
            
            ?>
        </div>
    </div>
</body>
</html>