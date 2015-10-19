<?php
    require_once("../database.php");
    require_once("../models/articles.php");

    $link = db_connect();

if(isset($_GET['action']))
//bool isset (mixed var [, mixed var [, ...]]) Возвращает TRUE, если var существует;
//иначе FALSE.
    $action="";//$_GET['action'];
else
    $action="";

if($_FILES["filename"]["size"] > 1024*3*1024)
   {
     echo ("Размер файла превышает три мегабайта");
     exit;
   }
   // Проверяем загружен ли файл
   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($_FILES["filename"]["tmp_name"], "e:".$_FILES["filename"]["name"]);
   } else {
      echo("Ошибка загрузки файла");
   }

echo "Служебная информация";
echo " _GET: ";
foreach ($_GET as $key => $value) {
    echo " $key => $value \n";
}
echo " _POST: ";
foreach ($_POST as $key => $value) {
    echo " $key => $value \n";
}
echo " _FILES: ";
foreach ($_FILES["filename"] as $key => $value) {
    echo " $key => $value \n";
}


if($action == "add"){
    
    if(!empty($_POST)){
//bool empty ( mixed $var )
//Проверяет, считается ли переменная пустой.
//Переменная считается пустой, если она не существует или её значение равно FALSE.
//empty() не генерирует предупреждение если переменная не существует.
//Возвращает FALSE, если var существует, и содержит непустое и ненулевое значение.
        articles_new($link, $_POST['title'], $_POST['date'], $_POST['content'], $_FILES["filename"]['name']);
        header("Location: index.php");
    }

    include("../views/article_admin.php");

}else if($action == "edit"){
    if(!isset($_GET['id']))
        header("Location: index.php");
    
    $id = (int)$_GET['id'];

    if(!empty($_POST) && $id > 0){
        articles_edit($link, $id, $_POST['title'], $_POST['date'], $_POST['content']);
        header("Location: index.php");
    }
    $article = articles_get($link, $id);
    include("../views/article_admin.php");
}else if($action == "delete"){
    $id = $_GET['id'];
    $article = articles_delete($link, $id);
    header("Location: index.php");
}else{

    $articles = articles_all($link);
    include("../views/articles_admin.php");

}
?>