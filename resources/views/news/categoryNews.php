<!doctype html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>

<a href="<?=route('Home')?>">Главная</a><br>

<? foreach ($news as $item): ?>
    <a href="<?=route('CategoryOne' , $item['id'])?>"><?=$item['category']?></a>
<?php endforeach?>

</body>
</html>

