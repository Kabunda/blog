<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
        <div class="container">
            <h1>Мой первый блог</h1>
            <a href="index.php?action=add">Добавить статью</a>
            <div>
                <table class="admin-table">
                <tr>
                    <td>Дата</td>
                    <td>Заголовок</td>
                    <td></td>
                    <td></td>
                </tr>
                
                <?php foreach($articles as $a): ?>
                <tr>
                    <td><?=$a['date']?></td>
                    <td><?=$a['title']?></td>
                    <td><a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a></td>
                    <td><a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a></td>
                </tr>
                <?php endforeach ?>
                </table>
            </div>    
                <footer>
                    <p>Панель администратора</p>
                </footer>
        </div>
</body>
</html>