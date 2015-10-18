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
            <div>
                <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>" enctype="multipart/form-data">
                    <label>
                        Название<br>
                        <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                    </label>
                    <br>
                    <label>
                        Дата<br>
                        <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
                    </label>
                    <br>
                    <label>
                        Содержимое<br>
                        <textarea name="content" class="form-item" required><?=$article['content']?></textarea>
                    </label>
                    <br>
                    <input type="submit" value="Сохранить" class="btn">
                </form><br>
                    <form method="post" action="upload.php" enctype="multipart/form-data">
                        <label>
                            Фотография<br>
                        <input type="file" name="filename">
                        </label>
                        <input type="submit" value="Загрузить"><br>
                    </form>
            </div>    
                <footer>
                    <p>Панель администратора<br>Добавление статьи</p>
                </footer>
        </div>
</body>
</html>