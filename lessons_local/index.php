<?php include (__DIR__.'/func.php')?> 
<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="/font/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <title>Отзывы</title>   
</head>
<body>
    <div class="header"><h3 id="header"><span id="head">Kh</span>Web - Домашка №4</h3></div>    
        <div class="content">
    
            <div class="main">
                <h3><i class="fa fa-comments-o" style="padding-right: 7px; color: #5d5d5d;"></i> Комментарии</h3>
        <hr style="margin-bottom: 10px;">
        <?php displayComment();?>
        <h3><i class="fa fa-commenting-o" aria-hidden="true" style="padding-right: 7px;color: #5d5d5d;font-size: 18px;margin-bottom: 10px;"></i> Оставить комментарий</h3>
                <hr>
                <form metod="get" action="/redirect.php" >
                    <input type="text" value="" name="coment" placeHolder="Введите сообщение..."><br>
                    <input id="button" type="submit" value="Отправить">
                </form>
                            
            </div>    
            
           <div class="gallery2">
                <h3><i class="fa fa-camera" style="padding-right: 7px; color: #5d5d5d;"></i> Загрузить фото</h3>
        <hr id="hr2" style="margin-bottom: 10px;"> 
            <form enctype="multipart/form-data" action="/upload.php" method="post">
                    
                    <input id="selectImg" name="userfile" type="file">
                    <input id="button2" type="submit" value="Загрузить">
                </form>
            </div>
            
            
            
            <div class="gallery">
                <?php
                include (__DIR__.'/image.php');
                foreach ($gallery as $num => $id) { ?> 
                <div class="photo">
                    <a href="image.php?code=<?php echo $num  ?> "><img src="/images/<?php echo $id; ?>"> <?php }?></a>
                </div>
            
            
            
            </div>

              
    </div>
</body>
</html>