
<?php include dirname(__DIR__) . '/' . "menu/menu.php" ?>
<? foreach ($news as $item): ?>
<a href="<?=route('NewsOne' , $item['id'])?>"><?=$item['title']?></a>
<?php endforeach?>


