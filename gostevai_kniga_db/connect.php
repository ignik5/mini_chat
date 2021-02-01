<?
$db = @mysqli_connect('localhost', 'root', '' , 'db') or die('ошибка соединения с бд');
if(!$db) die  (mysqli_connect_error());

mysqli_set_charset($db, 'utf8') or die('jib,rf ,j');
