<?
function cleen(){
global $db;
foreach($_POST as $key => $value){
$_POST[$key] = mysqli_real_escape_string($db, $value);}

}


function save_mas(){

    global $db;
    cleen();
    extract($_POST);
    $query = "INSERT INTO gb (name, text) VALUES ('$name','$text')";
    mysqli_query($db, $query);

}

function get_mas(){
global $db;
$query = "SELECT * FROM gb ORDER BY id DESC";
$res = mysqli_query($db, $query);
return mysqli_fetch_all($res, MYSQLI_ASSOC);
}





function print_arr($arr){
    echo '<pre>'.print_r($arr, true).'</pre>';

}

