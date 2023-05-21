<?php 
$testoValue = $_POST['textValue'];
$parolaValue = $_POST['wordValue'];
$testoCensurale = str_replace($parolaValue , '***', $testoValue);
$lunghezzaTesto = strlen($testoValue);
$lungezzaParolaCensurale = strlen($testoCensurale);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file-php</title>
</head>
<body>
    <div class="wrapper">
        <div class="container mt-4">
            <p><?php echo $testoValue.'Lunghezza testo:'.$lunghezzaTesto?></p>
           <p><?php echo $testoCensurale.'Lunghezza testo censurale:'.$lungezzaParolaCensurale?></p>
        </div>
    </div>
</body>
</html>