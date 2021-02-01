<?
require_once "files.php";
require_once "connect.php";
?>
<?
if(!empty($_POST)){

save_mas();
header("Location: {$_SERVER['PHP_SELF']}");
exit;

}


$messeges = get_mas();
print_arr($masseges);


?>
<!DOCTYPE html>
<html><head>
<title>Гостевая книга</title>
</head>


<style>

.messeges{
border:1px solid #ccc;
padding: 10px;
margin-bottom:20px;


}


</style>
<body>
<form method='post'>

<p><label for ="name">Имя:</label><br>
<input type='text' name ='name' id="name"></p>


<p><label for ="text">Текст:</label><br>
<textarea type='text' name ='text' id="text"></textarea></p>
<p><button type ='submit'  >отправить</button></p>


</form>
<hr>

<? if (!empty($messeges)):?>
<?foreach($messeges as $messege): ?>

<div class="messeges">
<p> автор:<?=$messege['name']?>| дата:|<?=$messege['date']?> </p>
<div><?=nl2br(htmlspecialchars($messege['text']))?></div>

</div>
<?endforeach;?>
<? endif;?>

</body>
</html>