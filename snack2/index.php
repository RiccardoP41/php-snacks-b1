<!-- Passare come parametri GET name, mail ed age
e verificare (cercando i metodi che non conosciamo
nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia
 un numero. Se tutto è ok stampare
“Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
$mail = $_GET["mail"];
$nome = $_GET["name"];
$eta = $_GET["age"];


var_dump(is_nan($eta));
var_dump(intval($_GET["age"]));

if (strlen($nome) < 4) {
    echo "Accesso negato! Il nome deve avere più di 3 caratteri";
} else {
    if ((strpos($mail,"@") !== false) && (strpos($mail,".") !== false)) {
        if (is_numeric($eta)) {
            echo "Accesso riuscito!";
        } else {
            echo "Accesso negato! L'età inserita non è un valore numerico";
        }
    } else {
        echo "Accesso negato! Controlla se manca '.' o '@' nella mail";
    }
}
 ?>

<!-- (is_nan()== false) mi legge come non-numero anche "3ertwrtwr6" ,
mettere intval($_GET["age"]) mi da 0 se non metto numeri o il  val
 numerico del primo numero della stringa, se c'è
is_numeric lo legge come intero o stringa numerica se c'è "e", per il resto pare ok -->
