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

            $data = file_get_contents("json.txt");
            $newarr = json_decode($data,TRUE);
            
            

            $id = $_GET['id'];
            $idNext = $id + 1;
            $idPrev = $id - 1;
            $name = $newarr[$id]["name"];
            $img = $newarr[$id]["imgPath"];
            $cost = $newarr[$id]["cost"];
            echo "<a href=indexp.php?sort=>Назад</a>";
            if($id <= 0){
            echo "<div class='cardsmax'>
                <p>$name</p>
                <div class='bg'>
                    <img src='$img'>
                </div>
                <p class='cost'>$cost руб</p>
                <div class='navi'>
                <a href='product.php?id=$idNext'>-></a>
                </div>
                <div class='buy'>
                    <form class='buy--form' action='cartWWJSON.php' method='POST'>
                    <label for='count'>Введите кол-во</label>
                    <input id='count' name='count' min='0' value='1' type='number'><br><br>
                    <input id='hidden' type='number' name='id' value='$id'>
                    <input type='submit' value='Добавить в корзину'>
                    </form>
                </div>
                </div>";
            }
            elseif($id >= count($goods)-1){
                echo "<div class='cardsmax'>
                <p>$name</p>
                <div class='bg'>
                    <img src='$img'>
                </div>
                <p class='cost'>$cost руб</p>
                <div class='navi'><a href='product.php?id=$idPrev'><-</a></div>
                <div class='buy'>
                    <form class='buy--form' action='cartWWJSON.php' method='POST'>
                    <label for='count'>Введите кол-во</label>
                    <input id='count' name='count'  min='0' value='1' type='number'><br><br>
                    <input id='hidden' type='number' name='id' value='$id'>
                    <input type='submit' value='Добавить в корзину'>
                    </form>
                </div>
                </div>";
            }
            else{
                echo "<div class='cardsmax'>
                <p>$name</p>
                <div class='bg'>
                    <img src='$img'>
                </div>
                <p class='cost'>$cost руб</p>
                <div class='navi'><a href='product.php?id=$idPrev'><-</a>
                <a href='product.php?id=$idNext'>-></a></div>
                <div class='buy'>
                    <form class='buy--form' action='cartWWJSON.php' method='POST'>
                    <label for='count'>Введите кол-во</label>
                    <input id='count' name='count' min='0' value='1' type='number'><br><br>
                    <input id='hidden' type='number' name='id' value='$id'>
                    <input type='submit' value='Добавить в корзину'>
                    </form>
                </div>
                </div>";
                
            }
            
            ?>
        </div>
    </div>
</body>
</html>