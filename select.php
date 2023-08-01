<?php
require_once('config.php');

$Select = "SELECT * FROM esercizio_table";
if($result = $connessione->query($Select)){
    if($result->num_rows > 0){
        $data = [];
        while($rows =  $result->fetch_array(MYSQLI_ASSOC)){
$tmp;
$tmp ['id'] = $rows['id'];
$tmp ['nome'] = $rows['nome'];
$tmp ['cognome'] = $rows['cognome'];
$tmp ['email'] = $rows['email'];
array_push($data,$tmp);
    }
    echo json_encode($data);
}else{    
    echo "non ci sono righe disponibbile";}
}else{
    echo "ERROR: SELECT DATA". $connessione->error;
}



?>