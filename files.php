<?php 
$textValue = $_POST['textValue'];
$parolaValue = $_POST['wordValue'];
$parolaCensurale = str_replace('$parolaValue','***','$parolaValue');

$lunghezzaTesto = strlen($textValue);
$lungezzaParolaCensurale= strlen($parolaValue);
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
            <p><?php echo $textValue.'Lunghezza testo:'.$lunghezzaTesto ?></p>
           <p><?php echo $textValue.' '.'Lunghezza parola censurale:'. $lungezzaParolaCensurale.' ' .$parolaCensurale ?></p>
            
        </div>
    </div>
</body>
</html>