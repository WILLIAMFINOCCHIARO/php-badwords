<!-- Ciao ragazzi,
Esercizio di oggi: PHP Badwords
nome repo: php-badwords
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
A domani :php: -->


<?php
$testo = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam est laborum deleniti itaque ab doloribus quibusdam, modi fugiat quasi. Esse libero ratione et maiores? Vel fugiat totam voluptate autem assumenda? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam est laborum deleniti itaque ab doloribus quibusdam, modi?';
$input = $_GET["Inputuser"];
$testoModificato = str_replace($input, '***', $testo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <form action="index.php" method="get">
        <p>Inserisci una parola da censurare: <input type="text" name="Inputuser"></p>
        <input type="submit" value="Submit">
    </form>
    <h2>TESTO NON CENSURATO</h2>
    <p> <?php echo $testo; ?></p>
    <p>La lunghezza del paragrafo è: <?php echo strlen($testo); ?></p>
    <hr>
    <h2>TESTO CENSURATO</h2>
    <p> <?php echo $testoModificato; ?></p>
    <p>La lunghezza del paragrafo è: <?php echo strlen($testoModificato); ?></p>
</body>

</html>