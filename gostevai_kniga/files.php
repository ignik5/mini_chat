<?
function save_mas(){

$str=$_POST['name'].'|'.$_POST['text'].'|'.date('Y-n-d H:i:s')."\n***\n";
file_put_contents('gb.txt',$str, FILE_APPEND );


}
function get_mas(){
return file_get_contents('gb.txt');


}

function arrae_mess($messeges){
    $messeges = explode("\n***\n", $messeges);
    array_pop($messeges);


    return array_reverse($messeges);

}
function get_format_messege($messege){

    return explode("|", $messege);
    

}


function print_mess($arr){
    echo '<pre>'.print_r($arr, true).'</pre>';

}

