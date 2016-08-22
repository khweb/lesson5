<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Изображение</title>
</head>
<body>

<?php
   
$gallery = file(__DIR__.'/img.txt');

$image = $_GET[id];    
$num = $_GET[code];    
?>
    
    <div style="margin:auto;text-align: -webkit-center;">

        <?php if ($num == true){?>
        <img src="images/<?php echo $gallery[$num];?>">
        <?php } ?>

    
    </div>

</body>
</html>