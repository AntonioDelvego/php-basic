<?php
$title = "Главная страница - страница обо мне";
$heading = "Информация обо мне";
$currentYear = date ('Y');
$imgSrc = "images/bee.jpg";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?=$title?></title>
    <meta charset="UTF-8">
</head>
<body>
<h1><?=$heading?></h1>
Краткая биография обо мне.
Родился в 1985 году в городе Москва. Закончил в 2008 году МАИ.
На данный момент работаю ведущим инженером в крупной авиакомпании.
Поскольку я люблю авиацию, то хотел бы поделиться несколькими интересными
фотографиями на эту тему
<br><br>
<img src="<?=$imgSrc?>" alt="some image" width="400">
<br><br>
<br><br>
<b>Просто пример жирного текста</b>
<br><br>
<?=$currentYear?>
</body>
</html>
