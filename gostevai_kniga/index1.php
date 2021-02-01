<?
require_once "files.php";

?>
<?
if(!empty($_POST)){
save_mas();
header("Location: {$_SERVER['PHP_SELF']}");
exit;

}


$messeges = get_mas();
$messeges = arrae_mess($messeges);


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
<p><button type ='submit' name='buton' >отправить</button></p>


</form>
<hr>

<? if (!empty($messeges)):?>
<?foreach($messeges as $messege): ?>

<? $messege= get_format_messege($messege) ;?>
<div class="messeges">
<p> автор:<?=$messege[0]?>| дата:|<?=$messege[2]?> </p>
<div><?=nl2br(htmlspecialchars($messege[1]))?></div>

</div>
<?endforeach;?>
<? endif;?>

</body>
</html>