<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="cartRederect.js" ></script>
</head>
<body>
<?php
$id = $_POST['id'];
$count = $_POST['count'];
$dataArr = file_get_contents('json.txt');
$arr = json_decode($dataArr,TRUE);
$cartFileName = "cart.txt";
$newArr = [
    [
        'count' => $count,
        'id' => $arr[$id]['id'],
        'name' => $arr[$id]['name'],
        'imgPath' => $arr[$id]['imgPath'],
        'cost' => $arr[$id]['cost'],
    ]
       
    
];
$dataNewArr = json_encode($newArr);
file_put_contents($cartFileName,$dataNewArr, FILE_APPEND);

?>
</body>
</html>
