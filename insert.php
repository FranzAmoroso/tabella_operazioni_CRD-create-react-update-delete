<?php
require_once('config.php');

if((isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])) && (isset($_REQUEST['cognome']) && !empty($_REQUEST['cognome'])) && (isset($_REQUEST['email']) && !empty($_REQUEST['email']))){
$nome = $connessione->real_escape_string($_REQUEST['nome']);
$cognome = $connessione->real_escape_string($_REQUEST['cognome']);
$email = $connessione->real_escape_string($_REQUEST['email']);
$insert = "INSERT INTO esercizio_table (nome,cognome,email) VALUES ('$nome','$cognome','$email')";

if($connessione->query($insert) === true){
    $data = [
        'message' => "riga inserita!!",
        "response" => 1
        ];
    echo json_encode($data);
    header('location:indextabella.php?msg1=RigaInserita!!');
}else{
    $data = [
        "message" => "riga non inserita",
        "response" => 0
    ];
    echo json_encode($data);
}
}else{
    header('location:indextabella.php?msg2=error');
}





?>