<?php
require_once('config.php');
$query = "SELECT * FROM esercizio_table";
$sql = $connessione->query($query);

if ($sql->num_rows > 0)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazioni PHP/MYSQL/AJAX</title>
    
    <style>
        body{
            background-color: rgba(100, 100, 100, 0.500);
        }
        button {

            background-color: rgb(161, 1, 1);
            box-shadow: 1px 2px 1px 2px #00000090;
            border: 1px solid beige;
            width: 100%;
            font-style: italic;
            border-radius: 50px 0px 50px 0px;
            cursor: pointer;
        }
        .modifica-persona, .elimina-persona{
            background-color: rgb(161, 1, 1);
            box-shadow: 1px 2px 1px 2px #00000090;
            border: 1px solid beige;
            width: 100%;
            font-style: italic;
            border-radius: 50px 0px 50px 0px;
            cursor: pointer;
        }

        td {
            border: 1px solid black;
            align-items: center;
            padding: 10px;
        }

        table {
            width: 100%;
        }

        .form-inserimento {
            z-index: 99;
            width: 500px;
        }
        .modifica-persona{
            background-color: rgb(161, 1, 1);
            box-shadow: 1px 2px 1px 2px #00000090;
            border: 1px solid beige;
            width: 100%;
            font-style: italic;
            border-radius: 0px 50px 0px 50px !important;
            cursor: pointer;
            font-weight: 700;
            font-family: cursive;
        }
        .modifica-persona:hover{
            background-color: rgb(200, 1, 1);
            box-shadow: 1px 2px 1px 2px #00000090;
            border: 1px solid beige;
            width: 100%;
            font-style: italic;
            border-radius: 50px 00px 50px 0px !important;
            cursor: pointer;
        }
        .elimina-persona{
            background-color: rgb(161, 1, 1);
            box-shadow: 1px 2px 1px 2px #00000090;
            border: 1px solid beige;
            width: 100%;
            font-style: italic;
            border-radius: 50px 0px 50px 0px !important;
            cursor: pointer; 
            font-weight: 700;
            font-family: cursive;
        }
        .elimina-persona:hover{
            background-color: rgb(100, 1, 1);
            box-shadow: 1px 2px 1px 2px #00000090;
            border: 1px solid beige;
            width: 100%;
            font-style: italic;
            border-radius: 50px 0px 50px 0px !important;
            cursor: pointer;   
        }

        form {
            
            display: none;
        }
        #formA{
            display: flex;
            flex-direction: column;
            padding: 10px;
            width: 500px;
            display: flex;
            align-items: center;
           
            
            
        }
        #input_nome{
            
            width: max-content;
            margin: 10px;
            
        }
        #input_nome:focus{
            outline:none;
            color: grey;
        }
        #input_cognome{
            width: max-content;
            margin: 10px;
            
        }
        #input_cognome:focus{
            outline: none;
        }
        #input_email{
            width: max-content;
            margin: 10px;
            outline: none; 
        }
        #input_email:focus{
            outline: none;
            
        }
        #button_submit{
            border-radius: 50px;
            overflow: hidden;
            width: max-content;
            padding: 5px;
            margin: 5px;

            
        
        }
        label{
            width: max-content;
            margin-top: 10px;
        }
        #span{
            display: flex;
            justify-items: center;
            position: fixed;
            border-radius: 50px;
            background-color: grey;
    box-shadow: 3px  3px rgb(161, 1, 1) ;
    margin: 5px;
    z-index: 999;
}
p{
    font-family: cursive;
    font-weight: 700;
}
td{
    background-color: rgba(128, 128, 128, 0.500);
    z-index: 1;
    border-radius: 5px;
}
.effetto{
    filter:blur(10px);
    position: relative;
    z-index: -999;
}
    </style>
     
</head>

<body>
    <!-- <p class="data"><?php /* require 'date.php' */ ?></p> -->
    <button id="nuova_riga">Inserisci Dati</button>
    <span id="span">
    <form action="insert.php" method="POST" id="form-nuoviDati" >
        
    </form>
    </span>
    <div id="tabella-conteiner">
    </div>
    <?php if(isset($_REQUEST['msg1'])){
                                echo '<p>Riga inserita!!</p>';
                            } ?>
    <script src="script.js"></script>
</body>

</html>