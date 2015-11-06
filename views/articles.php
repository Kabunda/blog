<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
        <div class="container">
            <div id="navigation">
                <ul>
                    <li><a href="admin">Панель администратора</a></li>
                    <li><a href='ishtar'>макет Иштар</a></li>
                    <li><a href='#'>пункт 3</a></li>
                    <li><a href='#'>пункт 4</a></li>
                    <li><a href='#'>пункт 5</a></li>
                </ul>
            </div>
            <h1>Мой первый блог</h1>
            <div>
                <?php foreach($articles as $a): ?>
                <div class="article">
                    <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                    <em>Опубликовано:<?=$a['date']?></em>
                    <p><?=articles_intro($a['content'])?></p>
                </div>
                <?php endforeach ?>
            </div>    
                <footer>
                    <p>Мой первый блог<br>Copyright &copy; 2015</p>
                </footer>
        </div>
</body>
</html>